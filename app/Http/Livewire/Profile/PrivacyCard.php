<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use App\Models\UserPrivacy;
use Livewire\Component;

class PrivacyCard extends Component
{
    public $privacy ;
    public $user ;


    public $rules =[
        'privacy.general_account_privacy'=>'boolean',
        'privacy.general_profile_picture_visibility'=>'boolean',
        'privacy.general_comments'=>'boolean',
        'privacy.general_mentions'=>'boolean',
        'privacy.general_enrolled_courses'=>'nullable|string',
        'privacy.general_analytics'=>'nullable|string',
        'privacy.general_business_env'=>'nullable|string',
        'privacy.general_rewards_deals'=>'nullable|string',
        'privacy.connections_visibility'=>'nullable|string',
        'privacy.connections_block'=>'nullable|string',
        'privacy.social_notes'=>'nullable|string',
        'privacy.social_hints'=>'nullable|string',
        'privacy.social_blogs'=>'nullable|string',
        'privacy.traiml_algorithms'=>'boolean',
        'privacy.user_id'=>'nullable|integer',
    ];
    public function mount($id)
    {
        $this->user = User::find($id);
        if($this->user->userPrivacy){

            $this->privacy = $this->user->userPrivacy  ;
        }else{
            $this->privacy = new UserPrivacy();
            $this->privacy->user_id =  (int)$id ;
            $this->privacy->general_account_privacy =  0 ;
            $this->privacy->general_profile_picture_visibility =  0 ;
            $this->privacy->general_comments =  0 ;
            $this->privacy->general_mentions =  0 ;
            $this->privacy->traiml_algorithms =  0 ;
        }
        
    }
    public function save()
    {
        $this->validate();
        $this->privacy->save();
    }
    public function render()
    {
        return view('livewire.profile.privacy-card');
    }
}
