<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class Notification extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'note_type',
        'note_time',
        'note_status',
        'user_id',
        'deleted_at',
        'notifiable_id',
        'notifiable_type',
        'notifierable_id',
        'notifierable_type',
        'url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function notifiable()
    {
        return $this->morphTo();
    }
    public function notifierable()
    {
        return $this->morphTo();
    }
}
