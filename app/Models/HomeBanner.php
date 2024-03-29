<?php

namespace App\Models;

use App;
use DB;

class HomeBanner extends Model
{
    protected $table = 'home_banners';

    public $timestamps = true;

    public function getPage()
    {
        return $this->belongsTo('App\Models\HomePageSection', 'page_id', 'id');
    }

    public function getcontentAttribute($value)
    {
        $locale = App::getLocale();
        $field = 'content_'.$locale;
        $data = isset($this->$field) ? $this->$field : $this->content_.$locale;

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
