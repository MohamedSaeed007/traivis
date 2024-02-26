<?php

namespace App\Models;

class LiveSchedule extends Model
{
    protected $table = 'live_schedules';

    protected $timestamp = true;

    public function section()
    {
        return $this->belongsTo('App\Models\Section', 'section_id', 'id');
    }

    public function liveSectionUser()
    {
        return $this->hasMany(LiveScheduleUser::class);
    }
}
