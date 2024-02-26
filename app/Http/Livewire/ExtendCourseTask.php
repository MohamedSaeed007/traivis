<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\CourseTask;
use App\Models\CourseTaskComment;
use App\Models\CourseTaskExtension;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
class ExtendCourseTask extends ModalComponent
{
    public CourseTask $task;
    public $extension_request_date, $number_of_days, $comment;
    public Business $business;

    protected $rules = [
        'comment' => 'required',
        'number_of_days' => 'required|numeric|min:1'
    ];

    protected $validationAttributes = [
        'comment' => 'notes'
    ];

    public function mount()
    {
        $this->business = Business::find(session('business_id'));
    }
    public function extendTask()
    {
        $this->validate();
        //Add CourseTaskExtension
        $e = CourseTaskExtension::make([
            'course_task_id' => $this->task->id,
            'extension_request_date' => now(),
            'number_of_days' => $this->number_of_days,
            'note' => $this->comment,
            'status' => 'progress'
        ]);
        $e->business()->associate($this->business);
        $e->user()->associate(auth()->user());
        $e->save();

        $this->task->update(['task_status' => 'extension_request']);
        $this->emit('refreshTask');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.extend-course-task');
    }
}
