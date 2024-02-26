<?php

namespace App\Models;

use App;
use DB;

class Language extends Model
{
    protected $table = 'languages';

    public $timestamps = true;

    public function bidding()
    {
        return $this->hasOne(Bidding::class, 'language_id', 'id');
    }
    public function businesses()
    {
        return $this->belongsToMany(Business::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
