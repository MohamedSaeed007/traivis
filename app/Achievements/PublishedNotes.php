<?php

declare(strict_types=1);

namespace App\Achievements;

use App\Achievements\Tier0\Published30Notes;
use App\Achievements\Tier1\Published65Notes;
use App\Achievements\Tier2\Published99Notes;
use App\Achievements\Tier3\Published139Notes;
use App\Achievements\Tier4\Published199Notes;
use Assada\Achievements\AchievementChain;

/**
 * Class Registered
 *
 * @package App\Achievements
 */
class PublishedNotes extends AchievementChain
{
    /*
     * Returns a list of instances of Achievements
     */
    public function chain(): array
    {
        return [
            new Published30Notes,
            new Published65Notes,
            new Published99Notes,
            new Published139Notes,
            new Published199Notes,
        ];
    }
}
