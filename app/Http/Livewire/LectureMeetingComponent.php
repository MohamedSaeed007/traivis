<?php

namespace App\Http\Livewire;

use App\Events\LectureUserJoined;
use App\Events\LectureUserLeft;
use App\Models\Lecture;
use App\Models\User;
use Aws\Chime\ChimeClient;
use Aws\Chime\Exception\ChimeException;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Collection;
use Livewire\Component;
use Str;

class LectureMeetingComponent extends Component
{
    public Lecture $lecture;
    public $all_students;
    public $students;
    public $online_students_array;
    public $offline_students_array;
    public $is_instructor;
    public $is_online = false;
    public $is_muted;
    public $is_allowed;
    public $is_muted_by_instructor;
    public $meeting_res;
    public $attendee_res;
    public $join_token;
    public $current_user_id;
    private $chime_client;

    public function __construct($id = null)
    {
        parent::__construct($id);
        $this->chime_client = new ChimeClient([
            'region' => 'us-east-1',
            'version' => '2018-05-01',
        ]);
    }

    public function mount()
    {
        $business_id = session('business_id');
        $this->current_user_id = 'user.' . auth()->id();
        $this->is_instructor =
            !is_null($business_id) && $business_id == $this->lecture->course->business_id;
    }

    public function chime_meeting()
    {
        try {
            $response = $this->chime_client->createMeeting([
                'ClientRequestToken' => $this->lecture->url_lecture,
                'ExternalMeetingId' => 'section.' . $this->lecture->id,
                'MediaRegion' => 'us-east-1',
                'Tags' => [
                    [
                        'Key' => 'section', // REQUIRED
                        'Value' => $this->lecture->title, // REQUIRED
                    ],
                ],
            ]);

            $this->meeting_res = $response->toArray();
            $this->lecture->meeting_id = $response['Meeting']['MeetingId'];
            $this->lecture->meeting_response = json_encode($this->meeting_res);
            $this->lecture->save();

            //            $this->emit('meetingCreated', $this->meeting_res['Meeting']['MeetingId']);
            return $this->meeting_res;
        } catch (ChimeException $e) {
            //            $this->emit('meetingCreationFailed', $e->getMessage());
        }
        return null;
    }

    public function join_chime_meeting()
    {
        if ($this->is_authorized()) {
            try {
                $this->attendee_res = $this->chime_client
                    ->createAttendee([
                        'ExternalUserId' => 'user.' . auth()->id(), // REQUIRED
                        'MeetingId' => $this->meeting_res['Meeting']['MeetingId'], // REQUIRED
                        'Tags' => [
                            [
                                'Key' => 'userId', // REQUIRED
                                'Value' => 'user.' . auth()->id(), // REQUIRED
                            ],
                        ],
                    ])
                    ->toArray();
                $this->is_online = true;
                LectureUserJoined::dispatch(
                    $this->lecture,
                    auth()->id(),
                    auth()->user()->name,
                    auth()->user()->avatar,
                );
                return $this->attendee_res;
            } catch (ChimeException $e) {
                //                if ($e->getAwsErrorCode() === 'NotFoundException') {
                // return back()->with('message', 'Meeting not found. Try to create new meeting.');
                return null;
                //                }
            }
        }
        return null;
    }

    public function is_authorized(): bool
    {
        return $this->lecture->course->users->where('id', auth()->user()->id)->first() ||
            $this->is_instructor;
    }

    public function leave_chime_meeting()
    {
        if ($this->is_authorized()) {
            try {
                $response = $this->chime_client->deleteAttendee([
                    'MeetingId' => $this->meeting_res['Meeting']['MeetingId'], // REQUIRED
                    'AttendeeId' => $this->attendee_res['Attendee']['AttendeeId'], // REQUIRED
                ]);
                $this->is_online = false;
                LectureUserLeft::dispatch(
                    $this->lecture,
                    auth()->id(),
                    auth()->user()->name,
                    auth()->user()->avatar,
                );
                return $response->toArray();
            } catch (ChimeException $e) {
                //                if ($e->getAwsErrorCode() === 'NotFoundException') {
                // return back()->with('message', 'Meeting not found. Try to create new meeting.');
                return null;
                //                }
            }
        }
        return null;
    }

    public function chime_list_attendees($nextToken = null)
    {
        if ($this->is_authorized()) {
            try {
                $response = $this->chime_client->listAttendees([
                    'max-results' => 99, // REQUIRED
                    'MeetingId' => $this->meeting_res['Meeting']['MeetingId'], // REQUIRED
                    'next-token' => $nextToken, // REQUIRED
                ]);

                $response_array = $response->toArray();

                $attendeesExtractUserIds = collect(
                    data_get($response_array, 'Attendees.*.ExternalUserId'),
                )
                    ->transform(function ($items) {
                        return (string) Str::of($items)->afterLast('.');
                    })
                    ->toArray();

                $response_array['AttendeeFullNames'] = User::with([
                    'lectures' => function ($q) {
                        /** @var BelongsToMany $q */
                        $q->where('lecture_id', $this->lecture->id);
                    },
                ])
                    ->findMany($attendeesExtractUserIds, [
                        'id',
                        'name',
                        //                        'profile_pic'
                    ])
                    ->transform(function ($item) {
                        return [
                            'ExternalUserId' => 'user.' . $item->id,
                            'FullName' => $item->name,
                            'Avatar' => $item->avatar,
                            'isMuted' =>
                                isset($item->lectures[0]) && $item->lectures[0]->pivot->muted == 1,
                            'isDisallowed' =>
                                isset($item->lectures[0]) && $item->lectures[0]->pivot->disallowed == 1,
                            'isUpraised' =>
                                isset($item->lectures[0]) && $item->lectures[0]->pivot->upraised == 1,
                        ];
                    })
                    ->toArray();
                $this->online_students_array = $response_array;
                return $this->online_students_array;
            } catch (ChimeException $e) {
                return null;
            }
        }

        return null;
    }

    public function render()
    {
        //        $this->get_chime_meeting();
        $this->all_students = $this->list_students()->map(function ($user) {
            $user->Avatar = $user->avatar;
            return $user;
        });
        //        dump($this->online_students_array);
        $online_students = isset($this->online_students_array['Attendees'])
            ? collect($this->online_students_array['Attendees'])->pluck('ExternalUserId')
            : collect();

        $this->offline_students_array = $this->all_students
            ->filter(function ($item) use ($online_students) {
                return !$online_students->contains(function ($value, $key) use ($item) {
                    return $value == 'user.' . $item->id;
                });
            })
            ->toArray();
        $this->students = $this->all_students->toArray();

        if (
            $currentUser = $this->lecture
                ->users()
                ->where('user_id', auth()->id())
                ->first()
        ) {
            $this->is_muted = $currentUser->pivot->muted == 1;
            $this->is_muted_by_instructor = $currentUser->pivot->muted_by_instructor == 1;
            $this->is_allowed = $currentUser->pivot->disallowed == 0;
        } else {
            $this->is_muted = false;
            $this->is_muted_by_instructor = false;
            $this->is_allowed = true;
        }

        return view('livewire.lecture-meeting-component', [
            'students' => $this->all_students->toArray(),
        ]);
    }

    public function list_students()
    {
        //        dump($list->toArray());

        $course_users = $this->lecture->course->users()->get([
            'users.id',
            'users.name',
            //                'users.profile_pic',
            'users.created_at',
        ]);
        $lecture_users = $this->lecture->users()->get();

        return $course_users->map(function (User $user) use ($lecture_users) {
            $lecture_user = $lecture_users->where('id', $user->id)->first();
            $user->pivot->muted = $lecture_user ? $lecture_user->pivot->muted : false;
            $user->pivot->disallowed = $lecture_user ? $lecture_user->pivot->disallowed : false;
            $user->pivot->upraised = $lecture_user ? $lecture_user->pivot->upraised : false;
            $user->pivot->muted_by_instructor = $lecture_user
                ? $lecture_user->pivot->muted_by_instructor
                : false;
            return $user;
        });

        // return
        //            ->zip()
        //            ->transform(function ($student) {
        //                dd($student->toArray());
        //                $student->attributes = [
        //                    'muted' => $student->pivot->muted == 1,
        //                    'disallowed' => $student->pivot->disallowed == 1,
        //                    'upraised' => $student->pivot->upraised == 1,
        //                ];
        //                return $student;
        //            });
    }

    public function disallowUser($userId)
    {
        if ($this->is_instructor) {
            $attendee = collect($this->online_students_array['Attendees'])->firstWhere(
                'ExternalUserId',
                $userId,
            );

            if ($user = $this->getStudentById($userId)) {
                $this->lecture->disallowUser($user);
                $this->chime_client->deleteAttendee([
                    'MeetingId' => $this->meeting_res['Meeting']['MeetingId'],
                    'AttendeeId' => $attendee['AttendeeId'],
                ]);
            }
        }
    }

    /**
     * @param $userId
     * @return User|mixed|null
     */
    private function getStudentById($userIdString): mixed
    {
        $id = preg_replace('/[^0-9]/', '', $userIdString);
        return $this->lecture->course->users->find($id);
        // ->where('users.id', $userId)->first();
    }

    public function update_attendance()
    {
        //        dd('here');
        if ($this->is_instructor && $this->is_online) {
            try {
                $this->chime_client->getAttendee([
                    'AttendeeId' => $this->attendee_res['Attendee']['AttendeeId'], // REQUIRED
                    'MeetingId' => $this->meeting_res['Meeting']['MeetingId'], // REQUIRED
                ]);
            } catch (\Exception $e) {
                $this->is_online = false;
                return;
            }

            $lecture = Lecture::where('id', $this->lecture->id)
                ->lockForUpdate()
                ->first();
            $lecture->instructor_attended_minutes += 300;
            $lecture->save();

            $nextToken = null;
            do {
                try {
                    $response = $this->chime_client->listAttendees([
                        //                                    'max-results' => 99, // REQUIRED
                        'MeetingId' => $this->meeting_res['Meeting']['MeetingId'], // REQUIRED
                        'next-token' => $nextToken, // REQUIRED
                    ]);
                    $nextToken = $response->NextToken ?? null;

                    $attendeesExtractUserIds = collect(
                        data_get($response, 'Attendees.*.ExternalUserId'),
                    );
                    //                    $user = $this->getStudentById($userId);

                    foreach ($attendeesExtractUserIds as $attendeesExtractUserId) {
                        if ($user = $this->getStudentById($attendeesExtractUserId)) {
                            $UserDate = $this->lecture->users()->firstWhere('user_id', $user->id);

                            if ($UserDate) {
                                $previous_attended_minutes = $UserDate->pivot->attended_minutes + 300;
                            } else {
                                $previous_attended_minutes = 300;
                            }
                            $this->lecture
                                ->users()
                                ->lockForUpdate()
                                ->syncWithoutDetaching([
                                    $user->id => [
                                        'attended_minutes' => $previous_attended_minutes,
                                    ],
                                ]);
                        }
                    }
                } catch (ChimeException $e) {
                    $nextToken = null;
                }
            } while ($nextToken);
        }
    }

    public function allowUser($userId)
    {
        if ($this->is_instructor) {
            if ($user = $this->getStudentById($userId)) {
                $this->lecture->allowUser($user);
            }
        }
    }

    public function muteUser($userId)
    {
        $user = $this->getStudentById($userId);
        if ($user && ($this->is_instructor || $user->id == auth()->user()->id)) {
            $this->lecture->muteUser($user, $this->is_instructor);
        }
    }

    public function unmuteUser($userId)
    {
        $user = $this->getStudentById($userId);
        if ($user && ($this->is_instructor || $user->id == auth()->user()->id)) {
            $this->lecture->unmuteUser($user, $this->is_instructor);
        }
    }

    public function upraise()
    {
        $user = $this->getStudentById(auth()->id());
        if ($user && ($this->is_instructor || $user->id == auth()->user()->id)) {
            $this->lecture->upraise($user);
        }
    }

    public function lower()
    {
        $user = $this->getStudentById(auth()->id());
        if ($user && ($this->is_instructor || $user->id == auth()->user()->id)) {
            $this->lecture->lower($user);
        }
    }

    //    public function getListeners()
    //    {
    //        return [
    //            "echo-private:App.Models.Lecture.{$this->lecture->id},LectureUserDisallowed" => 'LectureUserDisallowed',
    //        ];
    //    }
    //
    //    public function LectureUserDisallowed()
    //    {
    //        $currentUser = $this->lecture->users()->firstwhere('user_id', auth()->id());
    //        if ($currentUser) {
    //            $this->is_allowed = $currentUser->pivot->disallowed == 0;
    //        }
    //    }
}
