<?php

namespace App\Models;

class Earning extends Model
{
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }
}
