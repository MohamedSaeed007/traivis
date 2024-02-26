<?php
declare(strict_types=1);

namespace App\Achievements;

use App\Achievements\Tier0\Published32Hints;
use App\Achievements\Tier1\Published89Hints;
use App\Achievements\Tier2\Published129Hints;
use App\Achievements\Tier3\Published189Hints;
use App\Achievements\Tier4\Published249Hints;
use Assada\Achievements\AchievementChain;

/**
 * Class Registered
 *
 * @package App\Achievements
 */
class PublishedHints extends AchievementChain
{
    /*
     * Returns a list of instances of Achievements
     */
    public function chain(): array
    {
        return [
            new Published32Hints,
            new Published89Hints,
            new Published129Hints,
            new Published189Hints,
            new Published249Hints,
        ];
    }
}
