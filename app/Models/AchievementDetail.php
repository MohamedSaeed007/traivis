<?php

namespace App\Models;

use Assada\Achievements\Model\AchievementDetails;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AchievementDetail extends AchievementDetails
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        $this->mergeFillable(['tier_id']);
        parent::__construct($attributes);
    }

    public function tier()
    {
        return $this->belongsTo(Tier::class);
    }
}
