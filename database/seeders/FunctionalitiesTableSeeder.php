<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FunctionalitiesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('functionalities')->truncate();

        \DB::table('functionalities')->insert([
            0 => [
                'id' => 1,
                'title' => 'Biddings',
                'slug' => 'bidding',
                'description' => 'bidding description',
                'created_at' => '2021-02-10 01:23:27',
                'updated_at' => '2021-04-02 08:44:55'
            ],
            1 => [
                'id' => 2,
                'title' => 'Workforce User',
                'slug' => 'workforce-user',
                'description' => 'workforce description test',
                'created_at' => '2021-02-10 01:24:14',
                'updated_at' => '2021-02-10 01:24:14'
            ],
            2 => [
                'id' => 3,
                'title' => 'contractor',
                'slug' => 'contractor',
                'description' => 'contractor description',
                'created_at' => '2021-02-18 03:36:21',
                'updated_at' => '2021-02-18 03:36:21'
            ]
        ]);
    }
}
