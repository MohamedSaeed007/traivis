<?php

namespace App\Http\Livewire;

use App\Models\BusinessAppSetting;
use App\Models\BusinessFollow;
use Livewire\Component;

class BusinessFollowers extends Component
{
    public $business;
    public $canSeeFollowers ;
    public function mount($business)
    {
        $this->business = $business;
        $this->canSeeFollowers = true;
        $canSeeType ='public' ;
        $getKey = BusinessAppSetting::where('business_id', $this->business->id)
            ->where('key', 'followers_visibility')
            ->first();
        if ($getKey){
            if ($getKey->value == 'followers') {
               
                if ( !BusinessFollow::where('business_id',  $this->business->id)->where('user_id', auth()->id())->exists()) {
                    $this->canSeeFollowers = false;
                };
                if(in_array(auth()->id(),  $this->business->users->pluck('id')->toArray()) )
                {
                    $this->canSeeFollowers = true ;
                }
                
            } elseif ($getKey->value == 'me') {
                if (!in_array(auth()->id(),  $this->business->users->pluck('id')->toArray()) ) {
                    $this->canSeeFollowers = false;
                };
                
            }
        }
    }
    public function render()
    {
        $followers = BusinessFollow::where('business_id',$this->business->id)->with('user')->paginate(25);
        return view('livewire.business-followers',compact('followers'));
    }
}
