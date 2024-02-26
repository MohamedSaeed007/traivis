<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class TierFeature extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'label',
        'unit',
        'popup',
    ];

    public function tiers()
    {
        return $this->belongsToMany(Tier::class)
            ->using(TierTierFeature::class)
            ->withPivot(['id','allowed']);
    }
    public function posts()
    {
        return $this->hasMany(TierFeaturePost::class);
    }
}
