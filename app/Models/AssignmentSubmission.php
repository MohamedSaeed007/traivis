<?php

namespace App\Models;

use App\Casts\DateTimeTZ;

class AssignmentSubmission extends Model
{
    protected $guarded = [];

    protected $casts = [
        'evaluated_at' => DateTimeTZ::class,
    ];

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    public function assignmentable()
    {
        return $this->morphTo();
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function assignment()
    {
        //        return $this->belongsTo(Content::class, 'assignment_id');
        return $this->belongsTo(StudentAssignment::class, 'assignment_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
}
