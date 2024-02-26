<?php

namespace App\Events;

use App\Models\Lecture;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LectureUserJoined implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userName;
    public $userAvatar;
    public $userId;
    private Lecture $lecture;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Lecture $lecture, $userId, $userName, $userAvatar)
    {
        $this->lecture = $lecture;
        $this->userName = $userName;
        $this->userAvatar = $userAvatar;
        $this->userId = $userId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel($this->lecture->broadcastChannel());
    }
}
