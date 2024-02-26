<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\User;
use Livewire\Component;

class StudentCourseComponent extends Component
{
    public $course;
    public $studentId;

    public function mount($courseId, $studentId)
    {
        $this->studentId = $studentId;
        $this->course = Course::with([
            'attempts' => function ($q) use ($studentId) {
                $q->where('user_id', $studentId)
                    ->where('status', 'Passed');
            },
            'assignments' => function ($q) use ($studentId) {
                $q->whereRelation('users', 'user_id', $studentId);
            },
            'transactions' => function ($q) use ($studentId) {
                $q->where('payerable_id', $studentId)
                    ->where('payerable_type', User::class);
            },
        ])->find($courseId);
        // dd($this->course);
    }

    public function render()
    {
        return view('livewire.student-course-component');
    }
}
