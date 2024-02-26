<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class HomeFeedHint extends Component
{
    //Deprecated
    public $hints;
    public $display;
    protected $listeners = [
        'refresh' => '$refresh'
    ];
    public function mount($display)
    {
        $this->display = $display;
        $this->hints = Post::without('comments', 'business.followers', 'business.settings')->whereType('hint')->latest()->get();
    }
    public function render()
    {
        return view('livewire.home-feed-hint');
    }
}
