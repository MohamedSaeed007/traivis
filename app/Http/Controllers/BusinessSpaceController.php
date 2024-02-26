<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessSpaceController extends Controller
{
    public function choose()
    {
        $title = "Business Space";
        $business = auth()->user()->businesses->first();
        return view('homes.business_space.choose', compact(['title', 'business']));
    }
}