<?php

namespace App\Models;

class InstituteTrainer extends Model
{
    protected $table = 'institute_trainers';

    public $timestamps = true;

    public function getUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
