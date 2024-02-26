<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/* @mixin \Eloquent */
class CouponCode extends Authenticatable
{
    use Notifiable;

    protected $table = 'coupon_code';

    public $timestamps = true;

    public function couponCourse()
    {
        return $this->belongsTo(Course::class, 'courses');
    }

    public function instructorName()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
