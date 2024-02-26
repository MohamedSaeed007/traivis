<?php
declare(strict_types=1);

namespace App\Achievements;

use App\Achievements\Tier0\Got6Students;
use App\Achievements\Tier1\Got20Students;
use App\Achievements\Tier2\Got49Students;
use App\Achievements\Tier3\Got79Students;
use App\Achievements\Tier4\Got99Students;
use Assada\Achievements\AchievementChain;

/**
 * Class Registered
 *
 * @package App\Achievements
 */
class GotStudents extends AchievementChain
{
    /*
     * Returns a list of instances of Achievements
     */
    public function chain(): array
    {
        return [
            new Got6Students,
            new Got20Students,
            new Got49Students,
            new Got79Students,
            new Got99Students
        ];
    }
}
