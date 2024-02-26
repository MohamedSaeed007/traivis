<?php
declare(strict_types=1);

namespace App\Achievements;

use App\Achievements\Tier0\Published6Courses;
use App\Achievements\Tier1\Published10Courses;
use App\Achievements\Tier2\Published29Courses;
use App\Achievements\Tier3\Published43Courses;
use App\Achievements\Tier4\Published60Courses;
use Assada\Achievements\AchievementChain;

/**
 * Class Registered
 *
 * @package App\Achievements
 */
class PublishedCourses extends AchievementChain
{
    /*
     * Returns a list of instances of Achievements
     */
    public function chain(): array
    {
        return [
            new Published6Courses,
            new Published10Courses,
            new Published29Courses,
            new Published43Courses,
            new Published60Courses,
        ];
    }
}
