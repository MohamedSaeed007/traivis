<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class TransactionPopup extends Component
{
    public $transaction = null;
    public $courseType = null;
    public $course = null;
    public $holdPercentage = null;
    public $open = false;

    protected $listeners = [
        'open' => 'open',
    ];

    public function open(Transaction $transaction)
    {
        $this->transaction = $transaction;
        $this->course = $transaction->productable;
        if ($this->course->sections()->where('section_type', 3)->exists()) {
            $this->courseType = 'Live';
            $this->holdPercentage = 100;
        } elseif ($this->course->sections()->where('section_type', 1)->exists()) {
            $this->courseType = 'Face To Face';
            $this->holdPercentage = 50;
        } else {
            $this->courseType = 'Recorded';
            $this->holdPercentage = 0;
        }
        $this->open = true;
    }
    public function render()
    {
        return view('livewire.transaction-popup');
    }
}