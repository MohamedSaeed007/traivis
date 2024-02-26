<?php

namespace App\Models;

use App;
use DB;

class Industry extends Model
{
//    protected $table = 'industry';

    public $timestamps = true;

    public function biddings()
    {
        return $this->belongsToMany('App\Models\biddings', 'bidding_industry', 'industry_id', 'bidding_id');
    }

    public function businesses()
    {
        return $this->belongsToMany(Business::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }


}
