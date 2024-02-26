<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\CourseTask;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddCourseTask extends ModalComponent
{
    public $task = [
        'instructor_id' => null,
        'task_name' => null,
        'task_desc' => null,
        'target_date' => null
    ];
    public $course_id, $freelancers;
    public $taskTypes = [
        ['key' => 'create_video', 'value' => 'Create Video'],
        ['key' => 'create_lecture', 'value' => 'Create Lecture'],
        ['key' => 'create_section', 'value' => 'Create Section'],
        ['key' => 'create_quiz', 'value' => 'Create Quiz'],
        ['key' => 'create_assignment', 'value' => 'Create Assignment'],
        ['key' => 'create_details', 'value' => 'Create Course Details']
    ];

    protected $rules = [
        'task.instructor_id' => 'required',
        'task.task_name' => 'required',
        'task.task_desc' => 'required',
        'task.target_date' => 'required|date|after:today'
    ];

    protected $messages = [
        //        'task.instructor_id.required' => 'Please choose assigned freelancer',
        //        'task.task_name.required' => 'Please enter the task name',
        //        'task.target_date.required' => 'Please enter the task target date',
        //        'task.target_date.date' => 'Please enter a valid date'
        //        'task.target_date.after' => 'Please enter a valid date'
    ];
    protected $validationAttributes = [
        'task.instructor_id' => 'instructor',
        'task.task_name' => 'name',
        'task.task_desc' => 'description',
        'task.target_date' => 'target date'
    ];

    public function mount($course_id)
    {
        $this->course_id = $course_id;
        $this->freelancers = Business::where('business_type', 'instructor')
            ->select(['id', 'business_name'])
            ->get();
    }

    public function updated($name, $value): void
    {
        $this->validateOnly($name);
    }

    public function AddTask()
    {
        $this->validate();
        $this->task['course_id'] = $this->course_id;
        $this->task['institute_id'] = session('business_id');
        $this->task['task_status'] = 'progress';

        CourseTask::create($this->task);
        $this->emit('refreshSections');

        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.add-course-task');
    }
}
