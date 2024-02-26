<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use Livewire\Component;

class HomeAds extends Component
{
    public $ads;
    public function mount()
    {
        $this->ads =  Ad::whereActive(1)->where('start_date', '<', now())->where('end_date', '>', now())->get();
        // dd($this->ads);
    }
    public function render()
    {
        return view('livewire.home-ads');
    }
}
