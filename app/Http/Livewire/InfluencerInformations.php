<?php

namespace App\Http\Livewire;

use App\Mail\InfluencerRegister;
use App\Models\InfluencerInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class InfluencerInformations extends Component
{
    public $canSubmit = false;
    public  $showInfluencerButton = true;

    public InfluencerInformation $influencerInfo;

    public function rules()
    {
        return [
            'influencerInfo.message' => 'required|string',
            'influencerInfo.facebook_url' => 'required|url',
            'influencerInfo.instagram_url' => 'required|url',

            'influencerInfo.twitter_url' => 'required|url',
            'influencerInfo.youtube_url' => 'required|url',
            'influencerInfo.snap_chat_url' => 'required|url',
            'influencerInfo.tiktok_url' => 'required|url',

            'influencerInfo.facebook_followers' => 'required',
            'influencerInfo.instagram_followers' => 'required',
            'influencerInfo.twitter_followers' => 'required',
            'influencerInfo.youtube_followers' => 'required',
            'influencerInfo.snap_chat_followers' => 'required',
            'influencerInfo.tiktok_followers' => 'required',

            'influencerInfo.status' => 'required',
        ];
    }

    protected $messages = [
        'influencerInfo.status' => 'Accept the terms of service and privacy policy.'
    ];

    public function mount()
    {
        if (empty($this->info)) {
            $this->influencerInfo = InfluencerInformation::firstOrNew([
                'user_id' => Auth::id()
            ]);
        }
        $this->canSubmit = $this->influencerInfo->status == 0;

        $influencerInfoCount = InfluencerInformation::where('user_id', Auth::id())->count();
        if($influencerInfoCount){
            $this->showInfluencerButton = false;
        }
    }

    public function updated($name)
    {
        $this->validateOnly($name, [
            'influencerInfo.facebook_url' => 'required|url'
        ]);
    }

    public function storeInfo()
    {
        $this->validate();
        $this->influencerInfo->user_id = Auth::id();
        $this->influencerInfo->status = 1;
        $this->influencerInfo->save();
        $this->canSubmit = false;
        $this->showInfluencerButton = false;
        Mail::to(Auth::user()->email)->send(new InfluencerRegister($this->influencerInfo));
    }

    public function render()
    {
        return view('livewire.influencer_information');
    }
}
