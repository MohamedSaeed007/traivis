<?php
declare(strict_types=1);

namespace App\Achievements;

use App\Achievements\Tier0\Published9Blogs;
use App\Achievements\Tier1\Published19Blogs;
use App\Achievements\Tier2\Published29Blogs;
use App\Achievements\Tier3\Published39Blogs;
use App\Achievements\Tier4\Published69Blogs;
use Assada\Achievements\AchievementChain;

/**
 * Class Registered
 *
 * @package App\Achievements
 */
class PublishedBlogs extends AchievementChain
{
    /*
     * Returns a list of instances of Achievements
     */
    public function chain(): array
    {
        return [
            new Published9Blogs,
            new Published19Blogs,
            new Published29Blogs,
            new Published39Blogs,
            new Published69Blogs,
        ];
    }
}
