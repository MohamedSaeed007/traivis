<?php
declare(strict_types=1);

namespace App\Achievements\Tier2;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier2
 */
class Published99Notes extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 99 notes';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 99;
}
