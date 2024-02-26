<?php
declare(strict_types=1);

namespace App\Achievements\Tier4;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier4
 */
class Got99Students extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Got 99Students';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 99;
}
