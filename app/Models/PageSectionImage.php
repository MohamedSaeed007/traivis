<?php

namespace App\Models;

use App;
use DB;

class PageSectionImage extends Model
{
    protected $table = 'page_section_images';

    public $timestamps = true;

    public function getContent()
    {
        return $this->hasMany('App\Models\PageSection', 'page_id', 'id');
    }

    public function bannerImgs()
    {
        return $this->hasMany('App\Models\Banner', 'cms_id', 'id');
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
