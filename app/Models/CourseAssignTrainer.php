<?php

namespace App\Models;

class CourseAssignTrainer extends Model
{
    protected $table = 'course_assign_trainers';

    public $timestamps = true;

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
