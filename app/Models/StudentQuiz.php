<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentQuiz extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'grade',
        'quiz_submission_date',
        'quiz_due_date',
        'content_id',
        'status'
    ];

    public function quiz()
    {
        return $this->belongsTo(Content::class, 'content_id', 'id');
    }
}
