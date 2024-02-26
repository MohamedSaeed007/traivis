<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\BusinessAppSetting;
use App\Models\BusinessFollow;
use Livewire\Component;

class MessageButton extends Component
{
    public $business_id;
    public $status;
    public $userType;
    public $showButton = true ;

    public function render()
    {
        $business_id = $this->business_id;
        $userType = $this->userType;
        $business = null;
        
        if($userType != 'user'){
            $business  = Business::findOrfail($business_id);
            $getKey = BusinessAppSetting::where('business_id', $business_id)
            ->where('key', 'message_ability')
            ->first();
            if($getKey){
                if ($getKey->value == 'followers') {
                    if ( !BusinessFollow::where('business_id',  $business->id)->where('user_id', auth()->id())->exists()) {
                        $this->showButton = false;
                    };
                    if(in_array(auth()->id(),  $business->users->pluck('id')->toArray()))
                    {
                        $this->showButton = true ;
                    }
                    
                } elseif ($getKey->value == 'me') {
                    if (!in_array(auth()->id(),  $business->users->pluck('id')->toArray()) ) {
                        $this->showButton = false;
                    };
                    
                }
            }
        }
        return view('livewire.message-button', compact('business_id', 'userType','business'));
    }
}
