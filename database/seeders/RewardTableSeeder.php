<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Rewards;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RewardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::disableForeignKeyConstraints();
        Rewards::truncate();
//        Schema::enableForeignKeyConstraints();

        for ($i = 0; $i < 30; $i++) {
            Rewards::create([
                'reward_name' => 'reward name ' . $i,
                'reward_provider' => 'Provider name ' . $i,
                'reward_date' => '2020-12-19',
                'reward_related_links' => url('p/1' . $i),
                'rewardable_id' => $i + 1,
                'rewardable_type' => $i % 2 == 0 ? User::class : Business::class,
                'description' => 'Description' . $i
            ]);
        }
    }
}
