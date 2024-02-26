<?php
declare(strict_types=1);

namespace App\Achievements\Tier0;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier0
 */
class Published6HrsOfCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 6 hours of course';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 21600; //seconds
}
