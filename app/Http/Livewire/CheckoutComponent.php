<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public $cart;
    public $plan;
    public $user;
    public function mount($plan)
    {
        $this->cart = Cache::get('user.' . auth()->user()->id . '.cart');
        $this->plan = $plan;
        $this->user = auth()->user();
    }
    public function render()
    {
        $intent = auth()
            ->user()
            ->createSetupIntent();
        return view('livewire.checkout-component', [
            'intent' => $intent,
        ]);
    }
}
