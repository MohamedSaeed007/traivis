<?php
declare(strict_types=1);

namespace App\Achievements\Tier2;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier2
 */
class Published59HrsOfCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 59 hours of courses';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 212400; //seconds
}
