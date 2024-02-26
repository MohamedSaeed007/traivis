<?php

namespace App\Models;

use App\Casts\DateTimeTZ;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BusinessCalenderEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_type',
        //course,ad,meeting,campaign,blog,other
        'name',
        'description',
        'business_id',
        'course_id',
        'teaser_original_draft_id',
        'event_date',
        'event_hour',
        'start_date',
        'end_date',
    ];
    protected $casts = [
        'start_date' => DateTimeTZ::class,
        'end_date' => DateTimeTZ::class,
    ];

    public static function booted(): void
    {
        self::creating(function (BusinessCalenderEvent $business_calender_event) {
            if ($business_calender_event->start_date) {
                $business_calender_event->event_date = $business_calender_event->start_date;
                $business_calender_event->event_hour = $business_calender_event->start_date->hour;
            }
        });
        self::updating(function (BusinessCalenderEvent $business_calender_event) {
            if ($business_calender_event->start_date) {
                $business_calender_event->event_date = $business_calender_event->start_date;
                $business_calender_event->event_hour = $business_calender_event->start_date->hour;
            }
        });
    }

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id');
    }
}
