<?php

namespace App\Http\Livewire;

use App\Models\AssignmentUser;
use App\Models\AssignmentUserResponse;
use App\Models\MediaLibrary;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\MediaLibrary\Support\MediaStream;

class StudentAssignment extends Component
{
    use WithFileUploads;
    public $enrolled = false;
    public $isMaker;
    public $endTime;
    public $content;
    public ?User $user;
    public $assignmentUser;
    public $response = [
        'notes' => '',
        'resources' => '',
    ];
    public $status;
    public $assignmentStarted = false;

    protected $listeners = ['send-response' => '$refresh', 'refreshComponent' => '$refresh'];
    protected $rules = [
        'response.notes' => 'required',
        'response.resources' => 'nullable|array',
        'response.resources.*' => 'nullable|mimes:jpg,png,pdf,avi,mp4,mp3,zip',
    ];

    public function updatedStatus($value)
    {
        if ($value == 'Closed') {
            $this->assignmentUser->status = 'Closed';
            $this->assignmentUser->save();
        }
    }

    public function mount($content)
    {
        $this->content = $content;
        if (!Auth()->check()) {
            return;
        }
        $this->user = Auth()->user();
        $this->enrolled = $this->user->isEnrolled($this->content->course->id);
        $this->isMaker = $this->content->course->isMaker();

        $this->assignmentUser = $this->user
            ->assignments()
            ->where('assignment_id', $this->content->id)
            ->first();
        if (!$this->assignmentUser) {
            $this->user->assignments()->syncWithoutDetaching($this->content->id);
            $this->assignmentUser = $this->user
                ->assignments()
                ->where('assignment_id', $this->content->id)
                ->first();
        }
        $this->assignmentUser = $this->assignmentUser->pivot;

        if ($this->content->option('validity_option') == 'until') {
            // Until Case
            $this->assignmentStarted = true;
            $this->endTime = Carbon::parse($this->content->option('until'))->timestamp;
        } elseif (
            $this->content->option('validity_option') == 'for' &&
            $this->assignmentUser->end_time
        ) {
            // For Case
            $this->assignmentStarted = true;
            $this->endTime = $this->assignmentUser->end_time;
        } else {
            $this->endTime = $this->getEndTime();
        }
    }

    public function getEndTime()
    {
        //        return Carbon::now()->addMinute()->timestamp;
        if ($this->content->option('duration_type') == 'weeks') {
            $days = $this->content->option('duration') * 7;
            return Carbon::now()->addDays($days)->timestamp;
        }
        if ($this->content->option('duration_type') == 'days') {
            $days = $this->content->option('duration');
            return Carbon::now()->addDays($days)->timestamp;
        }
        if ($this->content->option('duration_type') == 'hrs') {
            $hrs = $this->content->option('duration');
            return Carbon::now()->addHours($hrs)->timestamp;
        }
    }

    public function startAssignment(): void
    {
        $this->endTime = $this->getEndTime();
        $this->assignmentUser->update(['end_time' => $this->endTime]);
        $this->redirect(
            route('course', [$this->content->course->slug, 'cid' => $this->content->content->id]),
        );
    }

    public function sendResponse(): void
    {
        $this->validate();
        $response = AssignmentUserResponse::create([
            'assignment_user_id' => $this->assignmentUser->id,
            'responseable_type' => User::class,
            'responseable_id' => $this->user->id,
            'notes' => $this->response['notes'],
        ]);

        if ($this->response['resources']) {
            foreach ($this->response['resources'] as $resource) {
                $response
                    ->addMedia($resource->getRealPath())
                    ->usingFileName($resource->getClientOriginalName())
                    ->toMediaCollection('resources');
            }
        }

        $this->assignmentUser->status = 'Pending';
        $this->assignmentUser->assignment_submission_date = now();
        $this->assignmentUser->save();
        $this->emitSelf('send-response');
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

    public function render()
    {
        //        dd($this->endTime);
        $this->status = $this->assignmentUser?->status;
        return view('livewire.student-assignment');
    }
}
