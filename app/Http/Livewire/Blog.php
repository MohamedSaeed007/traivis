<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Blog extends Component
{
    public $blogs, $user;
    public function render()
    {
        return view('livewire.blog');
    }

    public function mount($user)
    {
        $this->user = $user;
    }
}
