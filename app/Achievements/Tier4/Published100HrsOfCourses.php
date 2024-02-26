<?php
declare(strict_types=1);

namespace App\Achievements\Tier4;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier4
 */
class Published100HrsOfCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 100 hours of courses';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 360000; //seconds
}
