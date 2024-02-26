<?php

namespace App\Listeners;

use App\Events\CourseCreated;
use App\Models\BusinessCalenderEvent;
use Illuminate\Support\Carbon;

class CreateCalendarCourseEvent
{
    public function __construct()
    {
        //
    }

    public function handle(CourseCreated $event)
    {
        BusinessCalenderEvent::updateOrCreate(
            [
                'course_id' => $event->course->id,
            ],
            [
                'course_id' => $event->course->id,
                'event_type' => 'course',
                'name' => $event->course->title,
                'description' => $event->course->meta_description,
                'business_id' => $event->course->maker->id,
                'start_date' => $event->course->launch_at ?? $event->course->created_at,
                //            'event_date' => $event->course->launch_at ?? $event->course->created_at,
                //            'event_hour' => $event->course->launch_at ? Carbon::parse($event->course->launch_at)->hour : Carbon::parse($event->course->created_at)->hour,
            ],
        );
    }
}
