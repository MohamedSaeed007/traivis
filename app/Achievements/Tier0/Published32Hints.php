<?php
declare(strict_types=1);

namespace App\Achievements\Tier0;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements\Tier0
 */
class Published32Hints extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'Published 32 hints';

    /*
     * A small description for the achievement
     */
    public $description = '';
    public $points = 32;
}
