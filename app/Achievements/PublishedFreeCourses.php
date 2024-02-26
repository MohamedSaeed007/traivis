<?php

declare(strict_types=1);

namespace App\Achievements;

use App\Achievements\Tier0\Published3FreeCourses;
use App\Achievements\Tier1\Published6FreeCourses;
use App\Achievements\Tier2\Published11FreeCourses;
use App\Achievements\Tier3\Published16FreeCourses;
use App\Achievements\Tier4\Published23FreeCourses;
use Assada\Achievements\AchievementChain;

/**
 * Class Registered
 *
 * @package App\Achievements
 */
class PublishedFreeCourses extends AchievementChain
{
    /*
     * Returns a list of instances of Achievements
     */
    public function chain(): array
    {
        return [
            new Published3FreeCourses,
            new Published6FreeCourses,
            new Published11FreeCourses,
            new Published16FreeCourses,
            new Published23FreeCourses,
        ];
    }
}
