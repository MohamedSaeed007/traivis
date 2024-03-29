<?php

namespace App\Models;

class PackageFunctionality extends Model
{
    protected $table = 'package_functionalities';

    public $timestamps = true;

    public function functionality()
    {
        return $this->belongsTo('App\Models\Functionality', 'functionality_id', 'id');
        // $functionality = Functionality::leftjoin('package_functionalities','package_functionalities.functionality_id','functionalities.id')
        // ->where('package_id',$this->package_id)->get();
        // return $functionality;
    }
}
