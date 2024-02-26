<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function tinyMCEUpload(Request $request)
    {
        if ($request->hasFile('file')) {
            $originName = $request->file('file')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('file')->move(public_path('tinyMCE'), $fileName);
            $url = asset('tinyMCE/' . $fileName);
            // dd($url);
            return response()->json(['location' => $url]);
        }
    }
}
