<?php
declare(strict_types=1);

namespace App\Achievements\Tier4;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier4
 */
class Got999Followers extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Got 999 followers';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 999;
}
