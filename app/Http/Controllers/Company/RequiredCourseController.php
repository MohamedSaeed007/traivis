<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Session;

class RequiredCourseController extends Controller
{
    public function index()
    {
    }

    public function bulkAssignCourses()
    {
        return view('company.bulk-assign-courses');
    }
}
