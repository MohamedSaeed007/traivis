<?php

namespace App\Events;

use App\Models\Course;
use App\Models\TeaserOriginalDraft;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TeaserCampaignCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $campaign;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(TeaserOriginalDraft $campaign)
    {
        $this->campaign = $campaign;
    }
}
