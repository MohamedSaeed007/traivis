<?php

namespace App\Traits;

use App\Cache\CachedMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\MediaCollections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

trait HasCachedMedia
{
    public function getFirstMediaUrl(
        string $collectionName = 'default',
        string $conversionName = '',
    ): string {
        $media = $this->getFirstMedia($collectionName);

        if (!$media) {
            return $this->getFallbackMediaUrl($collectionName) ?: '';
        }

        if ($conversionName !== '' && !$media->hasGeneratedConversion($conversionName)) {
            return $media->getUrl();
        }

        return $media->getUrl($conversionName);
    }

    /*
     * Get the url of the image for the given conversionName
     * for first media for the given collectionName.
     * If no profile is given, return the source's url.
     */

    public function getFirstMedia(string $collectionName = 'default', $filters = []): ?Media
    {
        $media = $this->getMedia($collectionName, $filters);

        return $media->first();
    }

    /**
     * Get media collection by its collectionName.
     *
     * @param string $collectionName
     * @param array|callable $filters
     *
//     * @return MediaCollections\Models\Collections\MediaCollection
     */
    public function getMedia(string $collectionName = 'default', $filters = []): Collection
    {
        /** @var Model $this */
        return CachedMedia::get($this, $collectionName, $filters);
    }
}
