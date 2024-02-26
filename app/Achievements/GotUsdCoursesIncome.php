<?php
declare(strict_types=1);

namespace App\Achievements;

use App\Achievements\Tier0\Got50UsdCoursesIncome;
use App\Achievements\Tier1\Got125UsdCoursesIncome;
use App\Achievements\Tier2\Got190UsdCoursesIncome;
use App\Achievements\Tier3\Got380UsdCoursesIncome;
use App\Achievements\Tier4\Got499UsdCoursesIncome;
use Assada\Achievements\AchievementChain;

/**
 * Class Registered
 *
 * @package App\Achievements
 */
class GotUsdCoursesIncome extends AchievementChain
{
    /*
     * Returns a list of instances of Achievements
     */
    public function chain(): array
    {
        return [
            new Got50UsdCoursesIncome,
            new Got125UsdCoursesIncome,
            new Got190UsdCoursesIncome,
            new Got380UsdCoursesIncome,
            new Got499UsdCoursesIncome,
        ];
    }
}
