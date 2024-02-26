<?php

namespace App\Http\Livewire\SingleComponent;

use App\Models\Course;
use App\Models\Post;
use App\Models\Review;
use App\Models\UserConnection;
use Livewire\Component;

class ProfileStatus extends Component
{
    public $notes_count ;
    public $courses_count ;
    public $certificates_count ;
    public $connectios_count ;
    public $reviews_count ;
    public $followers_count ;
    public $students_count ;
    public function mount($user , $userType)
    {
        if($userType == 'user'){
            $this->notes_count = $this->getAmount( Post::where('user_id',$user->id)->where('type','note')->count()) ;
            $this->courses_count = $this->getAmount( $user->courses()->count() );
            $this->certificates_count =$this->getAmount( $user->certificates()->count() );
            $this->connectios_count =$this->getAmount( UserConnection::where('to_user_id',$user->id)->orWhere('from_user_id',$user->id)->count() );
            $courses_ids = $user->courses->pluck('id')->toArray();
            // $this->reviews_count =$this->getAmount( Review::whereIn('course_id',$courses_ids)->count() );
        }else{
            $this->notes_count = $this->getAmount( Post::where('business_id',$user->id)->where('type','note')->count()) ;
            $this->courses_count = $this->getAmount( $user->courses()->count() );
            $this->followers_count = $this->getAmount( $user->followers()->count() );
            $courses_ids = $user->courses->pluck('id')->toArray();
            $this->reviews_count =$this->getAmount( Review::whereIn('course_id',$courses_ids)->count() );
            $this->students_count = $this->getAmount( $user->students()->count() );
        }
        
    }
    public function getAmount($input)
    {
        $input = number_format($input);
        $input_count = substr_count($input, ',');
        if ($input_count != '0') {
            if ($input_count == '1') {
                return substr($input, 0, -4) . 'k';
            } else if ($input_count == '2') {
                return substr($input, 0, -8) . 'm';
            } else if ($input_count == '3') {
                return substr($input, 0, -12) . 'b';
            } else {
                return ;
            }
        } else {
            return $input;
        }
    }
    public function render()
    {
        return view('livewire.single-component.profile-status');
    }
}
