<?php

namespace App\Http\Livewire\SingleComponent;

use Livewire\Component;

class SingleBusiness extends Component
{
    public $business ;
    
    public function mount($business)
    {
        $this->business = $business ;
    }
    public function goToProfile($id)
    {
        return redirect(route('business-profile-social', $id));
    }
    public function goToDashboard($id)
    {
        session(['business_id' => $id]);
        return redirect(route('instructor-dashboard'));
    }
    public function render()
    {
        return view('livewire.single-component.single-business');
    }
}
