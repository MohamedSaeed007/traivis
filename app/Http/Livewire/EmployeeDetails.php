<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\Course;
use App\Models\CourseTask;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EmployeeDetails extends ModalComponent
{
    public $instructor,$joined_at,$type;
    public $courses,$allcourses;
    //Summaries
    public $courses_hours,$f2f_hours,$live_hours,$recorded_hours;
    public $courses_count,$courses_delivery_count,$courses_progress_count;
    public $tasks_count,$tasks_pending_count,$tasks_approved_count,$tasks_progress_count;
    public $taskTypes;
    public $assign_course,$assign_course_id;
    public $assign_task_name,$assign_task_desc,$assign_target_date;
    public $assignTasks;
    public $task_counter;
    public function mount($instructor)
    {
        $this->instructor=Business::find($instructor['instructor_id']);
        $this->joined_at=Carbon::parse($instructor['created_at'])->format('Y-m-d');
        $this->type=$instructor['worker_type'];
        $this->courses=Course::where('business_id',$this->instructor->id)->get();
        $this->allcourses=Course::select('id','title')->get();
        //Summaries
        $this->getSummaries();
        $this->taskTypes=[
            ['key'=>'create_video','value'=>'Create Video'],
            ['key'=>'create_lecture','value'=>'Create Lecture'],
            ['key'=>'create_section','value'=>'Create Section'],
            ['key'=>'create_quiz','value'=>'Create Quiz'],
            ['key'=>'create_assignment','value'=>'Create Assignment'],
            ['key'=>'create_details','value'=>'Create Course Details'],
        ];
        $this->assignTasks=[];
        $this->task_counter=1;
    }

    public function getSummaries()
    {
        $this->courses_hours=Course::where('business_id',$this->instructor->id)->sum('course_duration')*24;
        $this->f2f_hours=Course::where('business_id',$this->instructor->id)
                ->where('delivery_mode','fef')
                ->sum('course_duration')*24;

        $this->live_hours=Course::where('business_id',$this->instructor->id)
                ->where('delivery_mode','live')
                ->sum('course_duration')*24;

        $this->recorded_hours=Course::where('business_id',$this->instructor->id)
                ->where('delivery_mode','recorded')
                ->sum('course_duration')*24;
        $this->courses_count=Course::where('business_id',$this->instructor->id)->count();

        $this->tasks_count= CourseTask::where('instructor_id',$this->instructor->id)->count();
        $this->tasks_approved_count= CourseTask::where('instructor_id',$this->instructor->id)
            ->where('task_status','completed')->count();
        $this->tasks_progress_count= CourseTask::where('instructor_id',$this->instructor->id)
            ->where('task_status','progress')->count();
    }


    public function assignCourseTasks()
    {
        dd($this->assignTasks);
        if($this->assign_course['course_id']!="")
        {
            $this->assign_course_id=$this->assign_course['course_id'];
        }else{
            $id=Course::create($this->assign_course);
            $this->assign_course_id=$id;
        }
    }

    public function addMoreTask()
    {

        $this->assignTasks[$this->tasks_count]['assign_task_name']=$this->assign_task_name;
        $this->assignTasks[$this->tasks_count]['assign_task_desc']=$this->assign_task_desc;
        $this->assignTasks[$this->tasks_count]['assign_target_date']=$this->assign_target_date;

        $this->tasks_count+=1;
    }

    public function render()
    {
        return view('livewire.employee-details');
    }
}
