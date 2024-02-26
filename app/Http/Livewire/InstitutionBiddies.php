<?php

namespace App\Http\Livewire;

use App\Models\Bidding;
use App\Models\BiddingOffer;
use Livewire\Component;

class InstitutionBiddies extends Component
{
    public function render()
    {
        $biddings=Bidding::with('business')->get();

        return view('livewire.institution-biddies', compact('biddings'));
    }
}
