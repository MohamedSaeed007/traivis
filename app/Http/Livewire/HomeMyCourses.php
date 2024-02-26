<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class HomeMyCourses extends Component
{
    public $courses;
    public function mount()
    {
        $this->courses =auth()->user()->courses;
    }
    public function render()
    {
        return view('livewire.home-my-courses');
    }
}
