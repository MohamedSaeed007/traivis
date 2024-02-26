<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\CourseTask;
use App\Models\CourseTaskComment;
use App\Models\CourseTaskCompletion;
use App\Models\CourseTaskExtension;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
class DeliverCourseTask extends ModalComponent
{
    public CourseTask $task;
    public $comment;
    public $business;

    protected $rules = [
        'comment' => 'required'
    ];

    protected $validationAttributes = [
        'comment' => 'notes'
    ];

    public function mount()
    {
        $this->business = Business::find(session('business_id'));
    }
    public function deliverTask()
    {
        $this->validate();
        //Add CourseTaskCompletion Request
        $c = $this->task->completions()->make([
            'complete_request_date' => now(),
            'note' => $this->comment,
            'status' => 'progress'
        ]);
        $c->business()->associate($this->business);
        $c->user()->associate(auth()->user());
        $c->save();

        $this->task->update([
            'task_status' => 'complete_request'
        ]);
        $this->emit('refreshTask');

        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.deliver-course-task');
    }
}
