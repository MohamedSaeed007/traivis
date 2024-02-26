<?php

namespace App\Http\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image ;

class UserCoverPic extends Component
{
    use WithFileUploads;

    public $user;
    public $cover_pic;
    public $rules =[
        'cover_pic'=>'nullable|image',
    ];
    
    public function mount($user)
    {
        $this->user = $user;
    }
    public function updatedCoverPic()
    {
        if ($this->cover_pic)
        {
            $imageName = uniqid();
            $this->user->cover_pic = '/users/images/'.$imageName.'.'.$this->cover_pic->extension();
            $this->user->save();
            $img =Image::make($this->cover_pic);
            $img->save('users/images/'.$imageName.'.'.$this->cover_pic->extension());
        }
    }
    public function render()
    {
        return view('livewire.profile.user-cover-pic');
    }
}
