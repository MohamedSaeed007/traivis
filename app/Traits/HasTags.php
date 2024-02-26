<?php

namespace App\Traits;

use App\Models\Tag;

trait HasTags
{
    public function tags(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
