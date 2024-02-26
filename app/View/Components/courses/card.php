<?php

namespace App\View\Components\courses;

use App\Models\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    public $course;

    public function __construct($course)
    {
        $this->course = $course;
    }

    public function render(): View
    {
        return view('components.courses.card');
    }
}
