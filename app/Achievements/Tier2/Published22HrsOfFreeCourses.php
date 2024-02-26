<?php
declare(strict_types=1);

namespace App\Achievements\Tier2;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier2
 */
class Published22HrsOfFreeCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 22 hours of free courses';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 79200; //seconds
}
