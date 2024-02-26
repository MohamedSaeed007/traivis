<?php
declare(strict_types=1);

namespace App\Achievements\Tier3;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier3
 */
class Got380UsdCoursesIncome extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Got 380 USD courses income';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 38000; // cents
}
