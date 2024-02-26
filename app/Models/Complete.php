<?php

namespace App\Models;

class Complete extends Model
{
    protected $fillable = [
        'completable_type',
        'completable_id',
        'user_id',
    ];

    protected $dates = ['completed_at'];

    public $timestamps = false;

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function completable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }
}
