<?php

namespace App\Models;

use App\Casts\DateTimeTZ;
use Assada\Tests\Model\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseTaskComment extends Model
{
    use HasFactory;
    protected $fillable = ['course_task_id', 'comment', 'comment_date'];

    protected $casts = ['comment_date' => DateTimeTZ::class];
    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function task(): BelongsTo
    {
        return $this->belongsTo(CourseTask::class);
    }
}
