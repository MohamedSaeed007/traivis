<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Auth;
use Illuminate\Http\Request;

class LectureMeetingController extends Controller
{
    //
    public function __invoke(Lecture $lecture)
    {
        //        dd($lecture->toArray());
        $business_id = session('business_id');
        $is_instructor = !is_null($business_id) && $business_id == $lecture->course->business_id;
        //        $user = $lecture->users->find(Auth::user()->id);
        //        $is_allowed = !$user || $user->pivot->disallowed == 0;

        if (
            //            ($is_allowed && $lecture->course->users->where('id', Auth::user()->id)->first()) ||
            $lecture->course->users->where('id', Auth::user()->id)->first() ||
            $is_instructor
        ) {
            return view('homes.social.layouts.lecture-meeting', compact('lecture'));
        } else {
            abort(401);
        }
    }
}
