<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseTask extends Model
{
    use HasFactory;
    protected $fillable = [
        'institute_id', //Make Task and assign it to instructor
        'instructor_id',
        'course_id',
        'task_name',
        'task_desc',
        'target_date',
        'number_of_days',
        'task_status' //progress,delayed if task time left
        //extension_request,extended,extension_rejected
        //complete_request,complete_rejected,completed,
    ];
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(CourseTaskComment::class, 'course_task_id');
    }

    public function completions(): HasMany
    {
        return $this->hasMany(CourseTaskCompletion::class, 'course_task_id');
    }

    public function extensions(): HasMany
    {
        return $this->hasMany(CourseTaskExtension::class, 'course_task_id');
    }
}
