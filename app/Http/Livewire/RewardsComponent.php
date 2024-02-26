<?php

namespace App\Http\Livewire;

use App\Models\Rewards;
use Livewire\Component;

class RewardsComponent extends Component
{
    public $business,$business_rewards,$status_update='',$status_update_id='';

    public function mount()
    {
        $this->business_rewards = $this->business->rewards;
    }

    public function claimReward($reward_id)
    {
        Rewards::find($reward_id)->update(['status'=>1]);
        $this->business_rewards = $this->business->rewards;
        $this->status_update='1';
        $this->status_update_id=$reward_id;
    }
    public function render()
    {
        return view('livewire.rewards-component');
    }

}
