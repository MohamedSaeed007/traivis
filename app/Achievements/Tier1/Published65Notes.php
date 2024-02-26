<?php
declare(strict_types=1);

namespace App\Achievements\Tier1;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier1
 */
class Published65Notes extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 65 notes';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 65;
}
