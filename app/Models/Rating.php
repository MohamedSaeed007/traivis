<?php

namespace App\Models;

use App;
use DB;

class Rating extends Model
{
    protected $table = 'ratings';

    public $timestamps = true;

    public function getUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
