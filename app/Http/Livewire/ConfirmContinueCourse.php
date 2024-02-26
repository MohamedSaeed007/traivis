<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class ConfirmContinueCourse extends Component
{
    public $courseId;
    public $openModal = true;
    public $terms = false;
    public function rules()
    {
        return [
            'terms' => 'accepted',
        ];
    }
    public function mount($courseId)
    {
        $this->courseId = $courseId;
    }
    public function confirm()
    {
        $this->validate();
        Transaction::changeIsRefundable(auth()->user()->id, $this->courseId);
        $this->openModal = false;

    }
    public function back()
    {
        return redirect('courses');
    }
    public function render()
    {
        return view('livewire.confirm-continue-course');
    }
}