<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\interactsWithMedia;

class AssignmentUser extends Pivot
{
    protected $fillable = [
        'id',
        'user_id',
        'assignment_id',
        'grade',
        'end_time',
        'assignment_submission_date',
        'status'
    ];

    public function assignment(): BelongsTo
    {
        return $this->belongsTo(Assignment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function responses(): HasMany
    {
        return $this->hasMany(AssignmentUserResponse::class, 'assignment_user_id', 'id');
    }
}
