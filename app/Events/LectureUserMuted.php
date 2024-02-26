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

class LectureUserMuted implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private Lecture $lecture;
    public  $userId;
    public bool $status;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Lecture $lecture, $userId, $status = true)
    {
        $this->lecture = $lecture;
        $this->userId = "user.$userId";
        $this->status = $status;
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
