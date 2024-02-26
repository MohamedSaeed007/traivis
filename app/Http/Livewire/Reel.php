<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reel extends Component
{
    public $reels, $user;
    public function render()
    {
        return view('livewire.reel');
    }

    public function mount($user)
    {
        $this->user = $user;
    }
}
