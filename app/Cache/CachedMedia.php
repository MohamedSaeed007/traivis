<?php

namespace App\Cache;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\HasMedia;
class CachedMedia
{
    public static function get(HasMedia $modelInstance, $collection, array $filters)
    {
        $modelId = $modelInstance->getKey();
        $modelType = (new \ReflectionClass($modelInstance))->getName();
        $encodedFilters = sha1(json_encode($filters));

        //        return Cache::tags(['media', "media.$modelType.$modelId"])->get(

        return Cache::get("media.$modelType.$modelId.$collection.$encodedFilters", function () use (
            $modelInstance,
            $modelId,
            $modelType,
            $collection,
            $filters,
            $encodedFilters,
        ) {
            debug("Cached: media.$modelType.$modelId.$collection.$encodedFilters");
            $media = $modelInstance
                ->getMediaRepository()
                ->getCollection($modelInstance, $collection, $filters)
                ->collectionName($collection);
            //                Cache::tags(['media', "media.$modelType.$modelId"])->put(
            Cache::put(
                "media.$modelType.$modelId.$collection.$encodedFilters",
                $media,
                now()->addHours(12),
            );

            return $media;
        });
    }

    public static function forget($modelType, $modelId)
    {
        //        return Cache::tags(['media', "media.$modelType.$modelId"])->flush();
        return Cache::flush();
    }
}
