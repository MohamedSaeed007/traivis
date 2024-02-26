<?php

namespace App\Models;

use App;
use DB;

class Testimonial extends Model
{
    protected $table = 'testimonials';

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

    public function getpositionAttribute($value)
    {
        $locale = App::getLocale();
        $field = 'position_'.$locale;
        $data = isset($this->$field) ? $this->$field : $this->position_.$locale;

        return $data;
    }
}
