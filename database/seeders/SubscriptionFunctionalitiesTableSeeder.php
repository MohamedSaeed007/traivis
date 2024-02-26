<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriptionFunctionalitiesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subscription_functionalities')->truncate();

        \DB::table('subscription_functionalities')->insert([
            0 => [
                'id' => 1,
                'subscription_id' => 1,
                'functionality_id' => 1,
                'count' => 0,
                'created_at' => '2021-06-10 14:24:42',
                'updated_at' => '2021-06-10 14:24:42'
            ],
            1 => [
                'id' => 2,
                'subscription_id' => 1,
                'functionality_id' => 2,
                'count' => 0,
                'created_at' => '2021-06-10 14:24:42',
                'updated_at' => '2021-06-10 14:24:42'
            ],
            2 => [
                'id' => 3,
                'subscription_id' => 1,
                'functionality_id' => 3,
                'count' => 0,
                'created_at' => '2021-06-10 14:24:42',
                'updated_at' => '2021-06-10 14:24:42'
            ],
            3 => [
                'id' => 4,
                'subscription_id' => 2,
                'functionality_id' => 1,
                'count' => 0,
                'created_at' => '2021-06-20 17:09:08',
                'updated_at' => '2021-06-20 17:09:08'
            ],
            4 => [
                'id' => 5,
                'subscription_id' => 2,
                'functionality_id' => 2,
                'count' => 0,
                'created_at' => '2021-06-20 17:09:08',
                'updated_at' => '2021-06-20 17:09:08'
            ],
            5 => [
                'id' => 6,
                'subscription_id' => 2,
                'functionality_id' => 3,
                'count' => 0,
                'created_at' => '2021-06-20 17:09:08',
                'updated_at' => '2021-06-20 17:09:08'
            ]
        ]);
    }
}
