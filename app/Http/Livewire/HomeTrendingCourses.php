<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Carbon\Carbon;
use Livewire\Component;

class HomeTrendingCourses extends Component
{
    public $courses;
    public function mount()
    {
        $this->courses = Course::whereHas('courseViews', function ($q) {
            $q->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString());
        })->withCount('courseViews')->orderby('course_views_count', 'desc')->limit(5)->get();
    }
    public function render()
    {
        return view('livewire.home-trending-courses');
    }
}
