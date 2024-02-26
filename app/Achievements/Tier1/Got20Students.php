<?php
declare(strict_types=1);

namespace App\Achievements\Tier1;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier1
 */
class Got20Students extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Got 20 students';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 20;
}
