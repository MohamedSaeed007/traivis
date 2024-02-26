<?php

namespace App\Models;


class KarmaEarning extends Model
{
    public $fillable = [
        'karma_user_id',
        'student_user_id',
        'course_id',
        'earnings',
        'earning_type'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }


}
