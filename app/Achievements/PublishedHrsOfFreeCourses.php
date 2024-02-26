<?php
declare(strict_types=1);

namespace App\Achievements;

use App\Achievements\Tier0\Published3HrsOfFreeCourses;
use App\Achievements\Tier1\Published12HrsOfFreeCourses;
use App\Achievements\Tier2\Published22HrsOfFreeCourses;
use App\Achievements\Tier3\Published32HrsOfFreeCourses;
use App\Achievements\Tier4\Published41HrsOfFreeCourses;
use Assada\Achievements\AchievementChain;

/**
 * Class Registered
 *
 * @package App\Achievements
 */
class PublishedHrsOfFreeCourses extends AchievementChain
{
    /*
     * Returns a list of instances of Achievements
     */
    public function chain(): array
    {
        return [
            new Published3HrsOfFreeCourses,
            new Published12HrsOfFreeCourses,
            new Published22HrsOfFreeCourses,
            new Published32HrsOfFreeCourses,
            new Published41HrsOfFreeCourses,
        ];
    }
}
