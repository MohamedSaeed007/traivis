<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowReviewFeedback extends Component
{
    public $feedback;
    public $openModal = false;
    protected $listeners = ['openModal'];

    public function openModal($feedback)
    {
        $this->feedback = $feedback;
        $this->openModal = true;
    }

    public function render()
    {
        return view('livewire.show-review-feedback');
    }
}