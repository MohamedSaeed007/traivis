<?php

namespace App\Models;

class Code extends Model
{
    protected $table = 'codes';

    public $timestamps = true;
    protected $fillable = ['coupon', 'batch_timestamp', 'user_id'];
}
