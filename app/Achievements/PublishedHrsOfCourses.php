<?php
declare(strict_types=1);

namespace App\Achievements;

use App\Achievements\Tier0\Published6HrsOfCourses;
use App\Achievements\Tier1\Published24HrsOfCourses;
use App\Achievements\Tier2\Published59HrsOfCourses;
use App\Achievements\Tier3\Published89HrsOfCourses;
use App\Achievements\Tier4\Published100HrsOfCourses;
use Assada\Achievements\AchievementChain;

/**
 * Class Registered
 *
 * @package App\Achievements
 */
class PublishedHrsOfCourses extends AchievementChain
{
    /*
     * Returns a list of instances of Achievements
     */
    public function chain(): array
    {
        return [
            new Published6HrsOfCourses,
            new Published24HrsOfCourses,
            new Published59HrsOfCourses,
            new Published89HrsOfCourses,
            new Published100HrsOfCourses,
        ];
    }
}
