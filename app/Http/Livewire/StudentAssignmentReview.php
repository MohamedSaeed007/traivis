<?php

namespace App\Http\Livewire;

use App\Models\Assignment;
use App\Models\AssignmentUserResponse;
use App\Models\Business;
use App\Models\Complete;
use App\Models\Content;
use App\Models\Course;
use App\Models\MediaLibrary;
use App\Models\User;
use Livewire\Component;
use Spatie\MediaLibrary\Support\MediaStream;

class StudentAssignmentReview extends Component
{
    public $showPopup = false;
    public $user;
    public $assignment;
    public $assignmentUser;
    public $status;
    public $score;
    public $response;

    protected $listeners = ['openAssignmentReviewModal' => 'openModal'];

    public function openModal($assignmentId, $userId): void
    {
        // dd($assignmentId,$userId);
        $this->assignment = Assignment::find($assignmentId);
        $this->user = User::find($userId);
        $this->assignmentUser = $this->user->assignments()->where('assignment_id', $this->assignment->id)->first()->pivot;
        if ($this->assignmentUser->assignment_submission_date) {
            $this->showPopup = true;
        }
        $this->status = $this->assignmentUser->status;
        $this->score = $this->assignmentUser->grade;
    }

    public function updatedStatus(): void
    {
        $this->assignmentUser->status = $this->status;
        $this->assignmentUser->grade = $this->score;
        $this->assignmentUser->save();
        AssignmentUserResponse::create([
            'assignment_user_id' => $this->assignmentUser->id,
            'responseable_type' => Business::class,
            'responseable_id' => session('business_id'),
            'notes' => $this->response,
        ]);
        if ($this->status == 'Accepted') {
            Complete::updateOrCreate([
                'user_id' => $this->assignmentUser->user->id,
                'completable_type' => Content::class,
                'completable_id' => $this->assignment->content->id,
            ]);
            $courseCompleted = 1;
            foreach ($this->assignment->course->contents as $content) {
                $isCompleted = $content->completes()->where('user_id', $this->assignmentUser->user->id)->first();
                if (!$isCompleted) {
                    $courseCompleted = 0;
                }
            }
            if ($courseCompleted) {
                Complete::updateOrCreate([
                    'user_id' => $this->assignmentUser->user->id,
                    'completable_type' => Course::class,
                    'completable_id' => $this->assignment->course->id,
                ]);
            }
        }
    }

    public function downloadResource($mediaId = null)
    {
        if ($mediaId) {
            $media = MediaLibrary::find($mediaId);
            return response()->download($media->getPath(), $media->file_name);
        } else {
            $downloads = $this->content->getMedia('resources');
            return MediaStream::create('my-files.zip')->addMedia($downloads);
        }
    }

    public function submit()
    {
        $this->validate([
            'score' => 'required',
            'response' => 'required|string',
        ]);
        if ($this->score >= $this->assignment->options['pass_points']) {
            $this->status = 'Accepted';
        } else {
            $this->status = 'Rejected';
        }
        $this->updatedStatus();
    }
    public function render()
    {
        return view('livewire.student-assignment-review');
    }
}
