<?php

namespace App\Models;

use App;
use DB;

class TrainingCenter extends Model
{
    protected $table = 'training_centers';

    public $timestamps = true;

    public function getdescriptionAttribute($value)
    {
        $locale = App::getLocale();
        $field = 'description_'.$locale;
        $data = isset($this->$field) ? $this->$field : $this->description_.$locale;

        return $data;
    }

    public function gettitleAttribute($value)
    {
        $locale = App::getLocale();
        $field = 'title_'.$locale;
        $data = isset($this->$field) ? $this->$field : $this->title_.$locale;

        return $data;
    }
}
