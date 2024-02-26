<?php

namespace App\Http\Livewire\Profile;

use App\Models\Business;
use Livewire\Component;

class BusinessProfileCardForPublic extends Component
{
    public $business ;
    public $professionalInformation ;
    public $workExperiences ;
    public $educationInfos ;
    public function mount($id)
    {
        $this->business = Business::with(['industries','categories','professionalInformation','workExperiences','educationInfos'])->find($id);
        $this->professionalInformation = $this->business?->professionalInformation;
        $this->workExperiences = $this->business?->workExperiences;
        $this->educationInfos = $this->business?->educationInfos;
    }
    public function render()
    {
        return view('livewire.profile.business-profile-card-for-public');
    }
}
