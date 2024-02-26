<?php

namespace App\Models;

class Enroll extends Model
{
    // Deprecated
    protected $table = 'enrolls';

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
