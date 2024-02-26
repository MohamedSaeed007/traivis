<?php

namespace App\Http\Livewire;

use App\Mail\InfluencerRegister;
use App\Models\InfluencerCampaign;
use App\Models\InfluencerInformation;
use App\Models\InfluencerOffer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class InfluencerOffers extends Component
{
    public $offers = [];
    public $campaignsActive = [];
    public $campaignsAccepted = [];
    public $campaignsRejected = [];


    public function mount()
    {
        $this->offers = InfluencerOffer::with('user', 'course')->where('user_id', Auth::id())->get();
        $this->campaignsActive = InfluencerCampaign::where('status', InfluencerCampaign::STATUS['active'])->whereNotIn('id', $this->offers->pluck('influencer_campaign_id'))->where('offer_end_date', '>', Carbon::yesterday()->format('Y-m-d'))->get();
        $this->campaignsAccepted = InfluencerCampaign::where('status', InfluencerCampaign::STATUS['active'])->whereIn('id', $this->offers->where('status', InfluencerOffer::STATUS['accepted'])->pluck('influencer_campaign_id'))->get();
        $this->campaignsRejected = InfluencerCampaign::where('status', InfluencerCampaign::STATUS['active'])->whereIn('id', $this->offers->where('status', InfluencerOffer::STATUS['rejected'])->pluck('influencer_campaign_id'))->get();
    }

    private function updateList($offer, $campaign)
    {
        $this->offers->push($offer);
        $this->campaignsActive = $this->campaignsActive->reject(function ($element) use ($campaign) {
            return $campaign->id == $element->id;
        });
    }


    public function accept_offer($id)
    {
        $campaign = InfluencerCampaign::where('id', $id)->where('status', InfluencerCampaign::STATUS['active'])->where('offer_end_date', '>', Carbon::yesterday()->format('Y-m-d'))->first();
        if (!empty($campaign)) {
            $offer = InfluencerOffer::firstOrNew([
                'user_id' => Auth::id(),
                'influencer_campaign_id' => $campaign->id,
                'course_id' => $campaign->course_id
            ]);
            $offer->status = InfluencerOffer::STATUS['accepted'];
            $offer->save();
            $this->updateList($offer, $campaign);
            $this->campaignsAccepted->push($campaign);
        }
    }

    public function reject_offer($id): void
    {
        $campaign = InfluencerCampaign::where('id', $id)->where('status', InfluencerCampaign::STATUS['active'])->where('offer_end_date', '>', Carbon::yesterday()->format('Y-m-d'))->first();
        if (!empty($campaign)) {
            $offer = InfluencerOffer::firstOrNew([
                'user_id' => Auth::id(),
                'influencer_campaign_id' => $campaign->id,
                'course_id' => $campaign->course_id
            ]);
            $offer->status = InfluencerOffer::STATUS['rejected'];
            $offer->save();

            $this->updateList($offer, $campaign);
            $this->campaignsRejected->push($campaign);
        }
    }


    public function render()
    {
        return view('livewire.influencer_offers');
    }
}
