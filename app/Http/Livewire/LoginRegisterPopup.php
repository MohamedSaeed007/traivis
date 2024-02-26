<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginRegisterPopup extends Component
{
    public $opened = false;

    protected $listeners = ['loginRegisterPopup'];

    public function loginRegisterPopup()
    {
        $this->opened = true;
    }

    public function render()
    {
        return view('livewire.login-register-popup');
    }
}
