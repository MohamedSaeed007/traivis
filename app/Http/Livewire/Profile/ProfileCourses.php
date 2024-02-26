<?php

namespace App\Http\Livewire\Profile;

use App\Models\Certification;
use App\Models\Course;
use App\Models\User;
use Livewire\Component;

class ProfileCourses extends Component
{
    public $user_id;
    public $filter ;
    public $filterType ;
    public $userType = 'user';

    protected $queryString = ['filter','filterType'];
    
    public function mount($id)
    {
        $this->user_id = $id;
    }
    public function render()
    {
        $user = User::with(['courses'=>
        function ($q)
        {
            return $q->when($this->filter,function($query){
            if($this->filter == 'entolled' && $this->filterType == ''){
               return $query->whereNotNull('transaction_id');
            }else{
                return $query;
            }

           })->when($this->filter && $this->filterType == 'quiz',function($query){
            return $query->whereHas('quizzes',function($q){
                $q->where('id',$this->filter);
            });
           })->when($this->filter && $this->filterType == 'cert',function($query){
            return $query->where('id',$this->filter);
           })
           ;
        },
        "courses.quizzes"
        ])->whereId($this->user_id)->first();
        return view('livewire.profile.profile-courses',compact('user'));
    }
}
