<?php
declare(strict_types=1);

namespace App\Achievements\Tier3;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier3
 */
class Published89HrsOfCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 89 hours of courses';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 320400; //seconds
}
