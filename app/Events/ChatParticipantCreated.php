<?php

namespace App\Events;

use App\Models\ChatParticipant;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatParticipantCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var ChatParticipant
     */
    public $catParticipant;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ChatParticipant $catParticipant)
    {
        $this->catParticipant = $catParticipant;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel($this->catParticipant->getModel());
    }
}
