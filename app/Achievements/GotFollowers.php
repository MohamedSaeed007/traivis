<?php
declare(strict_types=1);

namespace App\Achievements;

use App\Achievements\Tier0\Got99Followers;
use App\Achievements\Tier1\Got299Followers;
use App\Achievements\Tier2\Got499Followers;
use App\Achievements\Tier3\Got699Followers;
use App\Achievements\Tier4\Got999Followers;
use Assada\Achievements\AchievementChain;

/**
 * Class Registered
 *
 * @package App\Achievements
 */
class GotFollowers extends AchievementChain
{
    /*
     * Returns a list of instances of Achievements
     */
    public function chain(): array
    {
        return [
            new Got99Followers,
            new Got299Followers,
            new Got499Followers,
            new Got699Followers,
            new Got999Followers,
        ];
    }
}
