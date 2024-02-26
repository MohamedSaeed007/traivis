<?php

namespace App\Http\Livewire;

use App\Events\ChatMessageSent;
use App\Models\Business;
use App\Models\ChatConversation;
use App\Models\ChatMessage;
use App\Models\ChatParticipant;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Collection;
use Livewire\Component;

class ChatComponent extends Component
{
    public $smOpen = true;
    /**
     * @var string
     */
    public $mode = 'conversations'; //icon or conversations

    /**
     * @var bool
     */
    public $disableSubmit = true;

    /**
     * @var array
     */
    public $unsentMessages = [];

    /**
     * @var array
     */
    public $conversations;

    public $activeConversationUuid;

    public $yourParticipantId;
    /**
     * @var User|Business
     */
    public $currentParticipantModel;
    /**
     * @var \Illuminate\Support\Collection
     */
    public $chatMessages;
    /**
     * @var ChatConversation
     */
    public $activeConversation;
    public $activeConversationParticipants;
    public $participantIds;
    /**
     * @var int
     */
    public $unreadMessagesCount = 0;
    public ?collection $unreadMessages;
    public $newTo = null;
    /**
     * @var int null
     */
    public $newToId = null;
    /**
     * @var string null
     */
    public $newToType = null;
    public ?string $message = null;
    /**
     * @var null[]
     */
    protected $queryString = [
        'activeConversationUuid' => ['as' => 'convid', 'except' => ''],
        'newToId' => ['as' => 'id', 'except' => ''],
        'newToType' => ['as' => 'type', 'except' => ''],
    ];

    /**
     * @return void
     */
    public function mount()
    {
        $this->currentParticipantModel = session('business_id')
            ? Business::find(session('business_id'))
            : auth()->user();

        if ($this->mode != 'icon' && $this->newToId && $this->newToType) {
            $this->newTo = match ($this->newToType) {
                'p' => User::find($this->newToId),
                'b' => Business::find($this->newToId),
                default => abort(404),
            };
            abort_if(is_null($this->newTo), 404);
        }
    }

    public function render()
    {
        //        $this->conversations = $this->currentParticipantModel->chatConversations()->get();

        $this->activeConversation = ($this->currentParticipantModel->getConversationByUuid(request()->cid) ??
            $this->currentParticipantModel->chatConversations()->first()
        );
        $this->activeConversationUuid = $this->activeConversation->uuid;

        $this->unsentMessages[$this->activeConversationUuid] = '';

        $this->participantIds = $this->currentParticipantModel->chatParticipants->pluck('id');

        $this->yourParticipantId = $this->activeConversation->getParticipant(
            $this->currentParticipantModel,
        )->id;

        $this->chatMessages = $this->activeConversation
            ? $this->activeConversation
            ->chatMessages()
            ->get()
            ->toArray()
            : [];

        if ($this->newTo) {
            //            $this->smOpen = false;
            $this->activeConversationUuid = null;
            $this->chatMessages = [];
        }

        if ($this->activeConversation && $this->mode != 'icon') {
            $unreadCount = $this->activeConversation->unreadMessageCount(
                $this->activeConversation->getParticipant($this->currentParticipantModel),
            );

            if ($unreadCount) {
                $this->updatedActiveConversationUuid($this->activeConversation->uuid);
                $this->emit('refresh-unread-counter');
            }

            $this->activeConversationParticipants = $this->activeConversation->chatParticipants
                ->filter(function ($chatParticipantItem) {
                    /** @var ChatParticipant $chatParticipantItem */
                    $participant = $chatParticipantItem->chatParticipant;

                    return $participant->isNot($this->currentParticipantModel);
                })
                ->values();

            //            dd($this->activeConversationParticipants);
        }

        $this->unreadMessagesCount = 0;
        $this->unreadMessages = collect([]);
        $this->conversations = $this->currentParticipantModel
            ->chatConversations()
            ->with([
                'latestChatMessage.chatParticipant.chatParticipant' => function (MorphTo $morphTo) {
                    $morphTo->morphWith([
                        User::class => ['userPrivacy', 'media'],
                        Business::class => ['media'],
                    ]);
                },
                'chatParticipants.chatParticipant' => function (MorphTo $morphTo) {
                    $morphTo->morphWith([
                        User::class => ['userPrivacy', 'media'],
                        Business::class => ['media'],
                    ]);
                },
                'unreadMessages' => function ($q) {
                    /** @var $q Builder */
                    $q->whereDoesntHave('reads', function ($q) {
                        /** @var $q Builder */
                        $q->whereIn('chat_message_reads.chat_participant_id', $this->participantIds);
                    });
                    $q->with('chatConversation');
                    $q->with('chatParticipant.chatParticipant');
                },
            ])
            ->get()
            ->map(function ($chatConversationItem) {
                //                dd($chatConversationItem->unreadMessages);
                $unreadMessagesCount = count($chatConversationItem->unreadMessages);
                $this->unreadMessagesCount = $this->unreadMessagesCount + $unreadMessagesCount;
                $this->unreadMessages = $this->unreadMessages->merge(
                    $chatConversationItem->unreadMessages,
                );

                return [
                    'uuid' => $chatConversationItem->uuid,
                    'chat_participants' => $chatConversationItem->chatParticipants
                        ->filter(function ($chatParticipantItem) {
                            /** @var ChatParticipant $chatParticipantItem */
                            $participant = $chatParticipantItem->chatParticipant;

                            return $participant->isNot($this->currentParticipantModel);
                        })
                        ->values()
                        ->map(function ($chatParticipantItem) {
                            /** @var ChatParticipant $chatParticipantItem */
                            $participant = $chatParticipantItem->chatParticipant;

                            return [
                                'id' => $chatParticipantItem->id,
                                'name' =>
                                get_class($participant) == Business::class
                                    ? $participant->business_name
                                    : $participant->name,
                                'profile_pic' => $participant->avatar,
                            ];
                        })
                        ->toArray(),
                    'unreadMessagesCount' => $unreadMessagesCount,
                    'unsentMessage' => '',
                    'latestMessage' => [
                        'message' => $chatConversationItem->latestChatMessage
                            ? $chatConversationItem->latestChatMessage->message
                            : null,
                        'by' => $chatConversationItem->latestChatMessage
                            ? $chatConversationItem->latestChatMessage->chatParticipant->chatParticipant
                            ->name
                            : null,
                    ],
                ];
            });
        switch ($this->mode) {
            case 'icon':
                $this->activeConversationUuid = '';
                return view('livewire.chat-component-icon');
            case 'conversations':
                return view('livewire.chat-component');
        }
    }

    /**
     * @return void
     */
    public function updatedActiveConversationUuid($uuid)
    {
        $this->newTo = null;
        $this->newToId = null;
        $this->newToType = null;

        $conversation = $this->currentParticipantModel->getConversationByUuid($uuid);
        $conversationParticipantId = $conversation->getParticipant($this->currentParticipantModel)->id;

        $conversationUnreadMessages = $this->currentParticipantModel
            ->getConversationByUuid($uuid)
            ->unreadMessages()
            ->whereDoesntHave('reads', function ($q) use ($conversationParticipantId) {
                /** @var $q Builder */
                $q->where('chat_message_reads.chat_participant_id', $conversationParticipantId);
            })
            ->get();

        //        debug($conversationUnreadMessages);

        foreach ($conversationUnreadMessages as $conversationUnreadMessage) {
            $conversationUnreadMessage->readBy()->syncWithoutDetaching([$conversationParticipantId]);
        }
        $this->emit('refresh-unread-counter');
    }

    /**
     * @return void
     *
     * @throws \App\Exceptions\ParticipantNotInConversation
     */
    public function sendMessage()
    {
        if ($this->currentParticipantModel->is($this->newTo)) {
            return;
        }

        if ($this->newTo) {
            $conversation = ChatConversation::getWhatBetweenOrCreateOne(
                $this->currentParticipantModel,
                $this->newTo,
            );

            $conversation->refresh()->addChatMessage($this->message, $this->currentParticipantModel);
            $this->newToId = null;
            $this->newToType = null;
            $this->newTo = null;
            $this->reset('message');
        } else {
            if (empty($this->unsentMessages[$this->activeConversationUuid])) {
                return;
            }
            $chatMessage = $this->activeConversation->addChatMessage(
                $this->unsentMessages[$this->activeConversationUuid],
                $this->currentParticipantModel,
            );
        }

        $this->unsentMessages[$this->activeConversationUuid] = '';
        $this->reset('disableSubmit');
        $this->dispatchBrowserEvent('scrollDown');
    }

    /**
     * @return string[]
     */
    public function getListeners()
    {
        return [
            'chat-message-sent' => '$refresh',
            'refresh-unread-counter' => '$refresh',
            'private:' . $this->currentParticipantModel->broadcastChannel(),
        ];
    }
}
