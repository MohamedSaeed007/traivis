<?php

namespace App\Models;

use App\Contracts\ChatParticipantModel;
use App\Exceptions\ParticipantNotInConversation;
use App\Traits\UuidKeyAdditional;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChatConversation extends Model
{
    use HasFactory;
    use SoftDeletes;
    use UuidKeyAdditional;

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chatParticipants()
    {
        return $this->hasMany(ChatParticipant::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chatMessages()
    {
        return $this->hasMany(ChatMessage::class)->orderBy('id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function latestChatMessage()
    {
        return $this->hasOne(ChatMessage::class)->latest('id');
    }

    //    public function addChatParticipant($participant)
    //    {
    //        return $this->chatParticipants()->create([
    //            'chat_participant_id' => $participant->id,
    //            'chat_participant_type' => get_class($participant)
    //        ]);
    //    }

    /**
     * @param  ChatParticipantModel  $participant
     * @return ChatParticipant|null
     */
    public function getParticipant(ChatParticipantModel $participant): ?ChatParticipant
    {
        return $this->chatParticipants
            ->where('chat_participant_id', $participant->id)
            ->where('chat_participant_type', get_class($participant))
            ->first();
    }

    /**
     * @param  ChatParticipantModel  $participant
     * @return ChatParticipant|Model
     */
    public function addParticipant(ChatParticipantModel $participant)
    {
        if ($existingParticipant = $this->getParticipant($participant)) {
            return $existingParticipant;
        } else {
            return $this->chatParticipants()->create([
                'chat_participant_id' => $participant->id,
                'chat_participant_type' => get_class($participant)
            ]);
        }
    }

    /**
     * @param  ChatParticipantModel  $participant
     * @return void
     */
    public function removeParticipant(ChatParticipantModel $participant)
    {
        $this->chatParticipants()
            ->where([
                ['chat_participant_id', '=', $participant->id],
                ['chat_participant_type', '=', get_class($participant)]
            ])
            ->delete();
    }

    /**
     * @param  $message
     * @param  ChatParticipantModel  $participant
     * @throws ParticipantNotInConversation
     */
    public function addChatMessage($message, ChatParticipantModel $participant)
    {
        // check if participant is part of the conversation
        if (!$this->refresh()->getParticipant($participant)) {
            throw new ParticipantNotInConversation();
        }

        $chatParticipant = $this->addParticipant($participant);

        $chatMessage = $this->chatMessages()->create([
            'chat_participant_id' => $chatParticipant->id,
            'message' => $message
        ]);

        $chatMessage->readBy()->syncWithoutDetaching([$chatParticipant->id]);

        $this->touch();

        return $chatMessage;
    }

    /**
     * @param $chatMessageId
     * @return void
     */
    public function deleteChatMessage($chatMessageId)
    {
        $this->chatMessages()
            ->find($chatMessageId)
            ->delete();
    }

    //    public function getBetween($participantOne, $participantTwo)
    //    {
    //        return $this->whereHas('chatParticipants', function ($query) use ($participantOne) {
    //            $query
    //                ->where('chat_participant_id', $participantOne->id)
    //                ->where('chat_participant_type', get_class($participantOne));
    //        })
    //            ->whereHas('chatParticipants', function ($query) use ($participantTwo) {
    //                $query
    //                    ->where('chat_participant_id', $participantTwo->id)
    //                    ->where('chat_participant_type', get_class($participantTwo));
    //            })
    //            ->get();
    //    }

    //    public function unreadMessages()
    //    {
    //        return $this->hasMany(ChatMessage::class)->whereDoesntHave('readBy', function ($query) {
    //            $query->where('chat_participant_type', Business::class)->where(
    //                'chat_participant_id',
    //                auth()
    //                    ->user()
    //                    ->chatParticipants()
    //                    ->first()->id
    //            );
    //        });
    //    }

    public function unreadMessages()
    {
        //        dump($model);
        return $this->hasMany(ChatMessage::class)->with('readBy');

        //        return $this->hasMany(ChatMessage::class)->whereDoesntHave('readBy', function ($query) {
        //            $query->where('chat_message_reads.chat_participant_id', 100);
        //        });
    }
    public function unreadFiveMessages()
    {
        //        dump($model);
        return $this->hasMany(ChatMessage::class)
            ->with('readBy')
            ->limit(5);

        //        return $this->hasMany(ChatMessage::class)->whereDoesntHave('readBy', function ($query) {
        //            $query->where('chat_message_reads.chat_participant_id', 100);
        //        });
    }

    /**
     * @param  ChatParticipant  $participant
     */
    //    public function unreadMessageCount()
    public function unreadMessageCount(ChatParticipant $participant)
    {
        //    public function unreadMessageCount()
        //        return $this->hasManyThrough('readBy', ChatMessage::class);
        return $this->chatMessages()
            ->whereDoesntHave('readBy', function ($query) use ($participant) {
                $query->where('chat_message_reads.chat_participant_id', $participant->id);
            })
            ->count();
    }

    /**
     * @param $participantOne
     * @param $participantTwo
     * @return ChatConversation|\Illuminate\Database\Eloquent\Builder|Model|object|null
     */
    public static function getBetween($participantOne, $participantTwo)
    {
        $conversation = static::whereHas('chatParticipants', function ($query) use ($participantOne) {
            $query
                ->where('chat_participant_id', $participantOne->id)
                ->where('chat_participant_type', get_class($participantOne));
        })->whereHas('chatParticipants', function ($query) use ($participantTwo) {
            $query
                ->where('chat_participant_id', $participantTwo->id)
                ->where('chat_participant_type', get_class($participantTwo));
        });

        return $conversation->first();
    }

    /**
     * @param $participantOne
     * @param $participantTwo
     * @return ChatConversation|\Illuminate\Database\Eloquent\Builder|Model|object
     */
    public static function getWhatBetweenOrCreateOne($participantOne, $participantTwo)
    {
        if ($conversation = ChatConversation::getBetween($participantOne, $participantTwo)) {
            return $conversation;
        }

        $conversation = ChatConversation::create();
        $conversation->addParticipant($participantOne);
        $conversation->addParticipant($participantTwo);

        return $conversation;
    }
}
