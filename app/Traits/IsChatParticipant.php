<?php

namespace App\Traits;

use App\Models\ChatConversation;
use App\Models\ChatParticipant;
use App\Models\Model;
use App\Models\User;

trait IsChatParticipant
{
    protected static function bootIsChatParticipant()
    {
        static::created(function ($participantTo) {
            /** @var Model $participantTo */
            if (! ($participantTo instanceof User && $participantTo->id == 1)) {
                $participantFrom = User::find(1);
                $conversation = ChatConversation::getWhatBetweenOrCreateOne(
                    $participantFrom,
                    $participantTo
                );
                $conversation->refresh()->addChatMessage('Welcome to the chat!', $participantFrom);
            }
        });
    }

    public function chatParticipants()
    {
        return $this->morphMany(ChatParticipant::class, 'chat_participant');
    }

    public function chatParticipant()
    {
        return $this->hasOne(ChatParticipant::class, 'chat_participant_id')->where(
            'chat_participant_type',
            get_class($this)
        );
    }

    public function chatConversations()
    {
        return $this->belongsToMany(
            ChatConversation::class,
            'chat_participants',
            'chat_participant_id',
            'chat_conversation_id'
        )
            ->orderByDesc('updated_at')
            ->orderByDesc('id')
            ->wherePivot('chat_participant_type', '=', get_class($this));
    }

    //    public function getConversations()
    //    {
    //        return $this->chatConversations()->withCount([
    //            'chatMessages as unreadMessageCount' => function ($query) {
    //                $query->whereDoesntHave('readBy', function ($query) {
    //                    $query->where('user_id', $this->id);
    //                });
    //            }
    //        ]);
    //    }

    private function getConversationsQuery()
    {
        return ChatConversation::with(['chatParticipants', 'latestChatMessage'])
            ->whereHas('chatParticipants', function ($query) {
                $query
                    ->where('chat_participant_id', $this->id)
                    ->where('chat_participant_type', get_class($this));
            })
            ->orderByDesc('updated_at')
            ->orderByDesc('id');
    }

    public function getConversationByUuid($uuid = null)
    {
        $return = $this->getConversationsQuery();

        return $uuid ? $return->where(['uuid' => $uuid])->first() : $return->first();
    }

    //    public function getConversations()
    //    {
    //        return $this->getConversationsQuery()->get();
    //    }

    //    public function getConversations()
    //    {
    //        return $this->hasManyThrough(
    //            ChatConversation::class,
    //            ChatParticipant::class,
    //            'chat_participant_id',
    //            'id',
    //            'id',
    //            'chat_conversation_id'
    //        )
    //            ->with(['chatParticipants', 'latestMessage'])
    //            ->latest('chat_messages.created_at');
    //    }
}
