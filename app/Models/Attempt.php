<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;

class Attempt extends Model
{
    protected $fillable = [
        'course_id',
        'quiz_id',
        'user_id',
        'reviewer_id',
        'questions_limit',
        'total_answered',
        'total_scores',
        'earned_score',
        'earned_percentage',
        'passing_percent',
        'status',
        'quiz_gradable',
        'is_reviewed',
        'ended_at',
        'reviewed_at',
        'passed',
        'end_time',
        'questions_list',
    ];

    protected $casts = [
        'questions_list' => AsArrayObject::class
    ];

    protected static function booted()
    {
        static::saved(function (Attempt $attempt) {
            if($attempt->isDirty('passed')){
                $attempt->course->generateCertificate($attempt->user->id);
            }
        });
    }

    public function answers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Answer::class)->with('question');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function quiz(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Quiz::class, 'quiz_id');
    }

    public function course(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function getStatusHtmlAttribute(): string
    {
        $statusClass = '';
        $iclass = '';
        switch ($this->status) {
            case 'started':
                $statusClass .= 'dark';
                $iclass = 'clock-o';
                break;
            case 'in_review':
                $statusClass .= 'warning';
                $iclass = 'hourglass';
                break;
            case 'finished':
                $statusClass .= 'success';
                $iclass = 'check-circle';
                break;
        }

        $html = "<span class='badge payment-status-{$this->status} badge-{$statusClass}'> <i class='la la-{$iclass}'></i> {$this->status}</span>";

        return $html;
    }

    public function save_and_sync($data = []): static
    {
        if (is_array($data) && count($data)) {
            $this->update($data);
        } else {
            $this->save();
        }

        $q_score = $this->answers->sum('q_score');
        $r_score = $this->answers->sum('r_score');

        $earned_percent = 0;
        if ($r_score > 0) {
            $earned_percent = (100 * $r_score) / $q_score;
        }

        $passing_percent = (int)$this->quiz->option('passing_score');

        $passed = $earned_percent >= $passing_percent ? 1 : 0;

        $this->earned_scores = $r_score;
        $this->earned_percent = $earned_percent;
        $this->passed = $passed;
        $this->save();

        $content = Content::find($this->quiz_id);
        complete_content($content, $this->user);

        return $this;
    }
}
