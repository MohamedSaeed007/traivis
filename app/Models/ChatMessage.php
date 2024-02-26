<?php

namespace App\Models;

use App\Events\ChatMessageSent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatMessage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public static function booted()
    {
        static::created(function ($chatMessage) {
            event(new ChatMessageSent($chatMessage));
        });
    }

    public function chatConversation()
    {
        return $this->belongsTo(ChatConversation::class);
    }

    public function chatParticipant()
    {
        return $this->belongsTo(ChatParticipant::class);
    }

    public function readBy()
    {
        return $this->belongsToMany(
            ChatParticipant::class,
            'chat_message_reads',
            'chat_message_id',
            'chat_participant_id',
        )->withPivot('created_at');
    }

    public function reads()
    {
        return $this->hasMany(ChatMessageRead::class);
    }
}
