<?php

namespace App\Http\Livewire;

use App\Models\UserConnection;
use Livewire\Component;

class HomeMyConnections extends Component
{
    public $connections;
    public function mount()
    {
        $this->connections = auth()->user()->connections->load('media','userPrivacy');
    }
    public function render()
    {
        return view('livewire.home-my-connections');
    }
}
