<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Answer extends Model
{
    public $fillable = [
        'question_id',
        'quiz_id',
        'user_id',
        'attempt_id',
        'answer',
        'q_type',
        'q_score',
        'r_score',
        'is_correct',
        'comment',
    ];

    protected $casts = ['is_correct' => 'boolean'];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

    public function questionOptions(): BelongsToMany
    {
        return $this->belongsToMany(QuestionOption::class);
    }

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function attempt(): BelongsTo
    {
        return $this->belongsTo(Attempt::class);
    }
}
