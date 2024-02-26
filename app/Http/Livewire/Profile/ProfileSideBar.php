<?php

namespace App\Http\Livewire\Profile;

use App\Models\Certification;
use App\Models\Course;
use Livewire\Component;

class ProfileSideBar extends Component
{
    public $user ;
    public $certificates ;

    public function mount($user)
    {
        $this->user = $user;
        $this->certificates = Certification::whereIn('course_id',Course::where('user_id',auth()->id())->with('course')->get('id')->toArray())->get();
    }
    public function render()
    {
        return view('livewire.profile.profile-side-bar');
    }
}
