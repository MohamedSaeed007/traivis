<?php

namespace App\Models;

use App\Events\ChatParticipantCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatParticipant extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    // public $with = ['chatParticipant'];

    public static function booted()
    {
        static::created(function ($chatParticipants) {
            event(new ChatParticipantCreated($chatParticipants));
        });
    }

    public function chatConversation()
    {
        return $this->belongsTo(ChatConversation::class);
    }

    public function chatParticipant()
    {
        return $this->morphTo();
    }

    public function getParticipantModel()
    {
        return $this->participant;
    }
}
