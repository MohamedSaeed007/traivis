<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\CourseTask;
use App\Models\CourseTaskComment;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
class AddNoteCourseTask extends ModalComponent
{
    public $task_id, $comment, $business;
    protected $rules = [
        'comment' => 'required'
    ];

    protected $validationAttributes = [
        'comment' => 'notes'
    ];

    public function mount($task_id)
    {
        $this->task_id = $task_id;
        $this->business = Business::find(session('business_id'));
    }
    public function addTaskComment()
    {
        //Add Notes
        $this->validate();
        $newComment = CourseTaskComment::make([
            'course_task_id' => $this->task_id,
            'comment' => $this->comment,
            'comment_date' => now()
        ]);

        $newComment->business()->associate($this->business);
        $newComment->user()->associate(auth()->user());
        $newComment->save();
        $this->emit('refreshTask');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.add-note-course-task');
    }
}
