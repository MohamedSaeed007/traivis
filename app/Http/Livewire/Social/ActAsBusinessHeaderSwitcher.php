<?php

namespace App\Http\Livewire\Social;

use App\Models\User;
use Livewire\Component;

class ActAsBusinessHeaderSwitcher extends Component
{
    public $is_business;
    public User $user;
    public $currentUrl;
    public function mount()
    {
        $this->user = auth()->user();
        $this->is_business = $this->user->isActingAsBusiness();
        $this->currentUrl = url()->current();
    }
    public function SwitchAccount()
    {
        if ($this->is_business) {
            session(['business_id' => null]);
        } else {
            session(['business_id' => $this->user->businesses->first()->id]);
        }
        $this->redirect($this->currentUrl);
    }
    public function render()
    {
        return view('livewire.social.act-as-business-header-switcher');
    }
}
