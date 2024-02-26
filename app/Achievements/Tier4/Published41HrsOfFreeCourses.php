<?php
declare(strict_types=1);

namespace App\Achievements\Tier4;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier4
 */
class Published41HrsOfFreeCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 41 hours of free course';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 147600; //seconds
}
