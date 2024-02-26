<?php

namespace App\Services\MediaLibrary;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class CustomPathGenerator implements PathGenerator
{
    private function hashedPath($string)
    {
        $md5_id = md5($string);
        //        return substr($md5_id, 0, 2) . '/' . $md5_id;
        return $md5_id;
    }

    public function getPath(Media $media): string
    {
        return $this->hashedPath($media->id . config('app.key')) . '/';
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->hashedPath($media->id . config('app.key')) . '/conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->hashedPath($media->id . config('app.key')) . '/responsive-images/';
    }
}
