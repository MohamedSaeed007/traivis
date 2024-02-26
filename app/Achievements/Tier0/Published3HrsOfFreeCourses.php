<?php
declare(strict_types=1);

namespace App\Achievements\Tier0;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier0
 */
class Published3HrsOfFreeCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 3 hours of free course';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 10800; //seconds
}
