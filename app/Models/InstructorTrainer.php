<?php

namespace App\Models;

class InstructorTrainer extends Model
{
    protected $table = 'instructor_trainers';

    public $timestamps = true;

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_user_id');
    }
}
