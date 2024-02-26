<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
   public function index()
   {
    $title = 'Search';
    return view('pages.search',compact('title'));
   }
}
