<?php

namespace App\Listeners;

use App\Events\TeaserCampaignCreated;
use App\Models\BusinessCalenderEvent;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateCalendarCampaignEvent
{
    public function __construct()
    {
        //
    }

    public function handle(TeaserCampaignCreated $event)
    {
        // dd($event->campaign->id);
        foreach ($event->campaign->socialDates as $date) {
            BusinessCalenderEvent::updateOrCreate(
                [
                    'teaser_original_draft_id' => $event->campaign->id,
                ],
                [
                    'teaser_original_draft_id' => $event->campaign->id,
                    'event_type' => 'campaign',
                    'name' => $event->campaign->post_txt,
                    'description' => $event->campaign->post_txt,
                    'business_id' => $event->campaign->business_id,
                    'start_date' => $date->publish_date,
                    'event_hour' => Carbon::parse($date->publish_date)->hour,
                ],
            );
        }
    }
}
