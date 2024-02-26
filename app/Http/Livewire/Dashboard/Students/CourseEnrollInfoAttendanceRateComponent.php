<?php

namespace App\Http\Livewire\Dashboard\Students;

use App\Models\Course;
use App\Models\Lecture;
use App\Models\User;
use App\Traits\HasErrorClassTrait;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

/**
 * @property Course $course
 */
class CourseEnrollInfoAttendanceRateComponent extends Component
{
    use WireToast;
    use HasErrorClassTrait;
    public $isDirty = false;
    public $course_id;
    public $student_id;
    public $student_attended_lectures = [];
    protected $messages = [
        'student_attended_lectures.*.student_attended_total_minutes.lte' =>
            'Student attended duration must be less or equal to the instructor\'s',
    ];

    public function getCourseProperty()
    {
        return Course::find($this->course_id);
    }

    public function mount($course_id, $student_id): void
    {
        $this->course_id = $course_id;
        $this->student_id = $student_id;
        $this->loadLectures();
    }

    private function loadLectures(): void
    {
        $this->isDirty = false;
        $this->student_attended_lectures = $this->getCourseLectures()
            ->get()
            ->map(function ($lecture) {
                //                dd(
                //                    \Carbon\CarbonInterval::seconds('10900')
                //                        ->cascade()
                //                        ->format(),
                //                );

                $student_attended_total_minutes = (string) (isset($lecture->users[0])
                    ? $lecture->users[0]->pivot->attended_minutes
                    : 0);

                $student_attended_duration_array = CarbonInterval::minutes(
                    $student_attended_total_minutes,
                )
                    ->cascade()
                    ->toArray();
                $instructor_attended_duration_array = CarbonInterval::minutes(
                    $lecture->instructor_attended_minutes,
                )
                    ->cascade()
                    ->toArray();

                return [
                    'id' => $lecture->id,
                    'title' => $lecture->title,
                    'drip_datetime' => (string) $lecture->drip_datetime,
                    'delivery_mode' => (string) $lecture->delivery_mode,
                    'student_attended_total_minutes' => (string) (isset($lecture->users[0])
                        ? $lecture->users[0]->pivot->attended_minutes
                        : 0),
                    'student_attended_hours' => (string) $student_attended_duration_array['hours'],
                    'student_attended_minutes' => (string) $student_attended_duration_array['minutes'],
                    'editable_attended_minutes' =>
                        (string) (isset($lecture->users[0]) &&
                            $lecture->delivery_mode == 1) /*face to face only is editable*/,
                    'instructor_attended_total_minutes' =>
                        (string) $lecture->instructor_attended_minutes,
                    'instructor_attended_hours' => (string) $instructor_attended_duration_array['hours'],
                    'instructor_attended_minutes' =>
                        (string) $instructor_attended_duration_array['minutes'],
                ];
            })
            ->toArray();
    }

    private function getCourseLectures()
    {
        return $this->course
            ->lectures()
            ->whereHas('content', function (Builder $query) {
                $query->where('publish_status', 'Published');
            })
            ->with([
                'users' => function ($query) {
                    $query->where('users.id', $this->student_id);
                },
            ]);
    }

    public function render()
    {
        return view('livewire.dashboard.students.course-enroll-info-attendance-rate-component');
    }

    public function updated($field, $value)
    {
        $this->isDirty = true;
        $field_string = \Str::of($field);
        $index = (string) \Str::of($field)->between('student_attended_lectures.', '.');
        switch ($field_string) {
            case $field_string->endsWith('.student_attended_hours'):
            case $field_string->endsWith('.student_attended_minutes'):
                $this->student_attended_lectures[$index]['student_attended_total_minutes'] =
                    $this->student_attended_lectures[$index]['student_attended_hours'] * 60 * 60 +
                    $this->student_attended_lectures[$index]['student_attended_minutes'] * 60;
                break;
            case $field_string->endsWith('.instructor_attended_hours'):
            case $field_string->endsWith('.instructor_attended_minutes'):
                $this->student_attended_lectures[$index]['instructor_attended_total_minutes'] =
                    $this->student_attended_lectures[$index]['instructor_attended_hours'] * 60 * 60 +
                    $this->student_attended_lectures[$index]['instructor_attended_minutes'] * 60;
                break;
        }

        $this->validate();
    }

    public function saveEditedDurations(): void
    {
        $this->validate();

        foreach ($this->student_attended_lectures as $index => $student_attended_lecture) {
            /** @var Lecture $aLectureToUpdate */

            $aLectureToUpdate = $this->getCourseLectures()->find($student_attended_lecture['id']);

            if (isset($aLectureToUpdate->users[0])) {
                $aLectureToUpdate->instructor_attended_minutes =
                    $student_attended_lecture['instructor_attended_total_minutes'];
                $aLectureToUpdate->save();
            }

            $aLectureToUpdate
                ->users()
                ->lockForUpdate()
                ->syncWithoutDetaching([
                    $aLectureToUpdate->users[0]->id => [
                        'attended_minutes' =>
                            $student_attended_lecture['student_attended_total_minutes'],
                    ],
                ]);
        }

        $this->emitUp('students-refresh');
        $this->loadLectures();
        toast()
            ->success('Attendance rate has been updated for the course: ' . $this->course->title)
            ->push();
    }
    public function cancelEditedDurations(): void
    {
        $this->loadLectures();
    }

    protected function rules()
    {
        return [
            'student_attended_lectures' => 'array',
            'student_attended_lectures.*.student_attended_total_minutes' => [
                'required',
                'lte:student_attended_lectures.*.instructor_attended_total_minutes',
            ],
            'student_attended_lectures.*.student_attended_hours' => ['required', 'min:0', 'max:24'],
            'student_attended_lectures.*.student_attended_minutes' => ['required', 'min:0', 'max:60'],
            'student_attended_lectures.*.instructor_attended_total_minutes' => ['required'],
            'student_attended_lectures.*.instructor_attended_hours' => ['required', 'min:0', 'max:24'],
            'student_attended_lectures.*.instructor_attended_minutes' => ['required', 'min:0', 'max:60'],
        ];
    }
}
