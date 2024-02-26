<?php

namespace App\Models;

class AdminModule extends Model
{
    protected $table = 'admin_modules';

    public $timestamps = true;

    public function getSubmodule()
    {
        return $this->hasMany('App\Models\AdminModule', 'parent_id');
    }

    public function permissions()
    {
        return $this->hasMany('App\Models\Permission', 'module_id', 'id');
    }
}
