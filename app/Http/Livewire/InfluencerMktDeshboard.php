<?php

namespace App\Http\Livewire;

use App\Mail\InfluencerRegister;
use App\Models\Course;
use App\Models\InfluencerCampaign;
use App\Models\InfluencerInformation;
use App\Models\InfluencerOffer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class InfluencerMktDeshboard extends Component
{
    public $influencerCompaign = [];
    public $influencerOffers = [];

    public function mount()
    {
        $courses = Course::where('business_id', session('business_id'))->get();
        $this->influencerCompaign = InfluencerCampaign::whereIn('course_id', $courses->pluck('id') )->count();
        $this->influencerOffers = InfluencerOffer::whereIn('course_id', $courses->pluck('id') )->get();
    }

    public function render()
    {
        return view('livewire.influencer-mkt-deshboard');
    }
}
