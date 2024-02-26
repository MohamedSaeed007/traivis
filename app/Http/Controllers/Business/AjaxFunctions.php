<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\BusinessCalenderEvent;
use Illuminate\Http\Request;

class AjaxFunctions extends Controller
{
    public function createBusinessCalenderEvent(Request $request)
    {
        $event_hour=$request->eventTime==""?"1":$request->eventTime;
        BusinessCalenderEvent::create(['event_type'=>$request->eventType,'name'=>$request->eventTitle,
            'description'=>$request->eventDesc,'event_date'=>$request->eventDate,'event_hour'=>$event_hour
            ,'business_id'=> session('business_id')]);
    }
}
