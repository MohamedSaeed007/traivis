<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $fillable=[
      'name',
      'phone',
      'email',
      'photo',
      'address',
      'status',
      'business_id',
    ];

    public function courses()
    {
        return $this->hasMany(StudentCourse::class);
    }

    public function quizes()
    {
        return $this->hasMany(StudentQuiz::class);
    }

    public function assignments()
    {
        return $this->hasMany(StudentAssignment::class);
    }

    public function assignments_submissions()
    {
        return $this->morphMany(AssignmentSubmission::class,'assignmentable');
    }

    public function payments()
    {
        return $this->morphMany(Payment::class, 'paymentable');
    }

}
