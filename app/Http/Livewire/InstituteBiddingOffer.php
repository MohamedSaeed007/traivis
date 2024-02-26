<?php

namespace App\Http\Livewire;

use App\Models\Bidding;
use App\Models\BiddingOffer;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
class InstituteBiddingOffer extends ModalComponent
{
    public $bidding,$current_form;
    public $description,$price;
    public $msg;

    public function mount($bidding_id)
    {
        $this->bidding=Bidding::find($bidding_id);
        $this->current_form='details';
    }

    public function showApplyForm()
    {
        $this->current_form='apply';
    }

    public function createOffer()
    {
        BiddingOffer::create([
            'description'=>$this->description,
            'price'=>$this->price,
            'bidding_id'=>$this->bidding->id,
            'status'=>'active',
            'institute_status'=>'applied',
            'business_id'=>session('business_id')
        ]);
        $this->msg="Your Offer was Created Successfully";

        $this->closeModal();
        return redirect(request()->header('Referer'));
    }

    public function closePopModal()
    {
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.institute-bidding-offer');
    }
}
