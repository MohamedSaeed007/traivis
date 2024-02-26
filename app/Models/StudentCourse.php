<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentCourse extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'course_id', 'status'];
    public function student()
    {
        return $this->belongsTo(User::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
