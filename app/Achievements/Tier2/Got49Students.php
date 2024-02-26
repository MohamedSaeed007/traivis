<?php
declare(strict_types=1);

namespace App\Achievements\Tier2;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier2
 */
class Got49Students extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Got 49 students';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 49;
}
