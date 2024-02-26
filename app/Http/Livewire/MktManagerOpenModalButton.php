<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MktManagerOpenModalButton extends Component
{
    public $course_id;
    public function render()
    {
        return view('livewire.mkt-manager-open-modal-button');
    }
}
