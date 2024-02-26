<?php
declare(strict_types=1);

namespace App\Achievements\Tier0;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier0
 */
class Got50UsdCoursesIncome extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Got 50 USD courses income';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 5000; // cents
}
