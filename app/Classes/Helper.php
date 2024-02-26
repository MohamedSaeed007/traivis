<?php

namespace App\Classes;

use Illuminate\Support\Facades\View;

class Helper
{
    public static function slugify($string = null, $separator = '-')
    {
        if (is_null($string)) {
            return '';
        }

        // Remove spaces from the beginning and from the end of the string
        $string = trim($string);

        // Lower case everything
        // using mb_strtolower() function is important for non-Latin UTF-8 string | more info: http://goo.gl/QL2tzK
        $string = mb_strtolower($string, 'UTF-8');

        // Make alphanumeric (removes all other characters)
        // this makes the string safe especially when used as a part of a URL
        // this keeps latin characters and arabic charactrs as well
        $string = preg_replace('/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/', '', $string);
        // Convert Slashes to the given separator
        $string = str_replace('/', $separator, $string);
        // Remove multiple dashes or whitespaces
        $string = preg_replace('/[\s-]+/', ' ', $string);
        // Convert whitespaces and underscore to the given separator
        return preg_replace('/[\s_]/', $separator, $string);
    }

    public static function formatFileSize($size)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $size > 1024 && $i < count($units) - 1; $i++) {
            $size /= 1024;
        }

        return round($size, 2) . ' ' . $units[$i];
    }

    public static function getDuration($duration)
    {
        if ($duration % 168 == 0) {
            // If the duration is in weeks
            $duration_type = 'week';
            $duration_value = $duration / 168;
        } elseif ($duration % 24 == 0) {
            // If the duration is in days
            $duration_type = 'day';
            $duration_value = $duration / 24;
        } else {
            // If the duration is in hours
            $duration_type = 'hour';
            $duration_value = $duration;
        }

        return [
            'value' => $duration_value,
            'type' => $duration_type . ($duration_value > 1 ? 's' : ''),
        ];
    }

    /**
     * @return \App\Models\User|\App\Models\Business|null
     */
    public static function getCurrentEntity($withMedia=0)
    {
        $entity = null;
        if (\auth()->check()) {
            $entity = \auth()
                ->user()
                ->isActingAsBusiness()
                ? \auth()
                    ->user()
                    ->actingAsBusiness($withMedia)
                : auth()->user();
        }
        return $entity;
    }
}