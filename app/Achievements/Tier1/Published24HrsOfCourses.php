<?php
declare(strict_types=1);

namespace App\Achievements\Tier1;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier1
 */
class Published24HrsOfCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 24 hours of courses';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 86400; //seconds
}
