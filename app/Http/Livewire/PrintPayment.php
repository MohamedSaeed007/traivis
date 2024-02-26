<?php

namespace App\Http\Livewire;

use App\Models\Payment;
use App\Models\Transaction;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class PrintPayment extends ModalComponent
{
    public $payment, $payment_id;

    public function mount()
    {
        $this->payment = Transaction::find($this->payment_id);
    }
    public function render()
    {
        return view('livewire.print-payment');
    }
    public static function modalMaxWidth(): string
    {
        return 'xl';
    }
}