<?php
declare(strict_types=1);

namespace App\Achievements\Tier3;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier3
 */
class Published32HrsOfFreeCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 32 hours of free courses';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 115200; //seconds
}
