<?php

namespace Database\Seeders;

use App\Models\AchievementDetail;
use Illuminate\Database\Seeder;

class AchievementDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tierId = 1;
        $achievements = AchievementDetail::all();
        if (count($achievements)) {
            foreach ($achievements as $key => $a) {
                $a->update(['tier_id' => $tierId + 1]);
                $tierId++;
                if (
                    $key == 4 || $key == 9 || $key == 14 || $key == 19
                    || $key == 24 || $key == 29 || $key == 34 || $key == 39
                    || $key == 44 || $key == 49
                ) {
                    $tierId = 1;
                }
            }
        }
    }
}
