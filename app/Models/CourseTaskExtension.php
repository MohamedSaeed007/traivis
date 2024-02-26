<?php

namespace App\Models;

use App\Casts\DateTimeTZ;
use Assada\Tests\Model\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseTaskExtension extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_task_id',
        'extension_request_date',
        'number_of_days',
        'note',
        'status', //progress,extended,rejected
    ];

    protected $casts = ['extension_request_date' => DateTimeTZ::class];
    public function task(): BelongsTo
    {
        return $this->belongsTo(CourseTask::class);
    }

    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
