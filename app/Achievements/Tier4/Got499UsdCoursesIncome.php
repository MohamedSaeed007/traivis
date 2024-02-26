<?php
declare(strict_types=1);

namespace App\Achievements\Tier4;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier4
 */
class Got499UsdCoursesIncome extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Got 499 USD courses income';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 49900; // cents
}
