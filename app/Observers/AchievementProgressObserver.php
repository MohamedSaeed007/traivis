<?php

namespace App\Observers;

use Assada\Achievements\Model\AchievementProgress;

class AchievementProgressObserver
{
    public function updated(AchievementProgress $achievementProgress): void
    {
        updateTierForBusiness($achievementProgress->achiever);
    }
}
