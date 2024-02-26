<?php

namespace App\Models;

use App;
use const App\_skill;
use DB;

class Skill extends Model
{
    protected $table = 'skills';

    public $timestamps = true;

    public function getskillAttribute($value)
    {
        $locale = App::getLocale();
        $field = $locale.'_skill';
        $data = isset($this->$field) ? $this->$field : $this->$locale._skill;

        return $data;
    }
}
