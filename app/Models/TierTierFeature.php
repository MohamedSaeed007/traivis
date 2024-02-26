<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TierTierFeature extends Pivot
{
    use HasFactory;

    protected $fillable = [
        // 'id',
        'tier_id',
        'tier_feature_id',
        'allowed',
    ];

    public function businesses()
    {
        return $this->belongsToMany(Business::class, 'business_tier_tier_feature', 'tier_tier_feature_id', 'business_id')
            ->withPivot(['consumed']);
    }
}
