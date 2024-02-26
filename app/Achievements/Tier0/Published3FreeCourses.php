<?php
declare(strict_types=1);

namespace App\Achievements\Tier0;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier0
 */
class Published3FreeCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 3 free courses';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 3;
}
