<?php
declare(strict_types=1);

namespace App\Achievements\Tier1;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier1
 */
class Published6FreeCourses extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 6 free courses';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 6;
}
