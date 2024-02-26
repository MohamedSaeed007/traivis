<?php
declare(strict_types=1);

namespace App\Achievements\Tier1;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier1
 */
class Published12HrsOfFreeCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 3 hours of free courses';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 43200; //seconds
}
