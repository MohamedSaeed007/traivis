<?php

namespace App\Http\Livewire;

use App\Models\UserConnection;
use Livewire\Component;

class Reward extends Component
{
    public $rewards, $user ,$viewToUser;
    public function render()
    {
        return view('livewire.reward');
    }

    public function mount($user)
    {
        $this->user = $user;
        $this->viewToUser = true;
        if ($user->userPrivacy && $user->userPrivacy->general_rewards_deals == 'connections') {
            $connected = UserConnection::where('from_user_id', auth()->id())->where('to_user_id', $user->id)->where('status', 1)->first();

            if ($user->id != auth()->id() && is_null($connected)) {
                $this->viewToUser = false;
            }
        }elseif($user->userPrivacy && $user->userPrivacy->general_rewards_deals == 'me'){
            if ($user->id != auth()->id()) {
                $this->viewToUser = false;
            }
        }
    }
}
