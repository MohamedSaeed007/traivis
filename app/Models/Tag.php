<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Get all models assigned to this tag
    //
    // $tag = App\Tag::with('taggables.taggable')->find(1);
    // foreach ($tag->taggables as $aTaggableModel) {}

    public function taggables(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Taggable::class);
    }
}
