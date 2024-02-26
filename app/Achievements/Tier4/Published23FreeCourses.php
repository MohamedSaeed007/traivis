<?php
declare(strict_types=1);

namespace App\Achievements\Tier4;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier4
 */
class Published23FreeCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 23 free courses';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 23;
}
