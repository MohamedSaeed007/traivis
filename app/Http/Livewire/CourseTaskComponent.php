<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\CourseTask;
use Livewire\Component;

class CourseTaskComponent extends Component
{
    public CourseTask $task;
    public $comments, $extensions, $completions, $business;

    protected $listeners = [
        'refreshTask' => '$refresh'
    ];

    public function mount()
    {
        $this->business = Business::find(session('business_id'));
    }
    public function rejectCompleted($complete_id)
    {
        $this->task
            ->completions()
            ->findOrFail($complete_id)
            ->update(['status' => 'rejected']);
        //update task status
        $this->task->update(['task_status' => 'complete_rejected']);
        //$this->emit('refreshTask');
        $this->emit('refreshSections');
    }
    public function acceptCompleted($complete_id)
    {
        $this->task
            ->completions()
            ->findOrFail($complete_id)
            ->update(['status' => 'completed']);
        //update task status
        $this->task->update(['task_status' => 'completed']);
        $this->emit('refreshSections');
    }

    public function rejectExtension($extend_id)
    {
        $this->task
            ->extensions()
            ->findOrFail($extend_id)
            ->update(['status' => 'rejected']);
        //update task status
        $this->task->update(['task_status' => 'extension_rejected']);
        $this->emit('refreshSections');
    }
    public function acceptExtension($extend_id)
    {
        $this->task
            ->extensions()
            ->findOrFail($extend_id)
            ->update(['status' => 'extended']);
        //update task status
        $this->task->update(['task_status' => 'extended']);
        $this->emit('refreshSections');
    }
    public function render()
    {
        $this->comments = $this->task
            ->comments()
            ->orderByDesc('created_at')
            ->get();
        $this->extensions = $this->task
            ->extensions()
            ->orderByDesc('created_at')
            ->get();
        $this->completions = $this->task
            ->completions()
            ->orderByDesc('created_at')
            ->get();

        return view('livewire.course-task-component');
    }
}
