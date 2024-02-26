<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PackageFunctionalitiesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('package_functionalities')->truncate();

        \DB::table('package_functionalities')->insert([
            0 => [
                'id' => 31,
                'package_id' => 2,
                'functionality_id' => 1,
                'count' => 1,
                'created_at' => '2021-02-19 03:43:29',
                'updated_at' => '2021-02-19 03:43:29'
            ],
            1 => [
                'id' => 32,
                'package_id' => 2,
                'functionality_id' => 2,
                'count' => 0,
                'created_at' => '2021-02-19 03:43:29',
                'updated_at' => '2021-02-19 03:43:29'
            ],
            2 => [
                'id' => 33,
                'package_id' => 2,
                'functionality_id' => 3,
                'count' => 0,
                'created_at' => '2021-02-19 03:43:30',
                'updated_at' => '2021-02-19 03:43:30'
            ],
            3 => [
                'id' => 34,
                'package_id' => 4,
                'functionality_id' => 1,
                'count' => 1,
                'created_at' => '2021-02-19 03:43:34',
                'updated_at' => '2021-02-19 03:43:34'
            ],
            4 => [
                'id' => 35,
                'package_id' => 4,
                'functionality_id' => 2,
                'count' => 10,
                'created_at' => '2021-02-19 03:43:34',
                'updated_at' => '2021-02-19 03:43:34'
            ],
            5 => [
                'id' => 36,
                'package_id' => 4,
                'functionality_id' => 3,
                'count' => 5,
                'created_at' => '2021-02-19 03:43:35',
                'updated_at' => '2021-02-19 03:43:35'
            ],
            6 => [
                'id' => 37,
                'package_id' => 3,
                'functionality_id' => 1,
                'count' => 0,
                'created_at' => '2021-02-19 03:43:38',
                'updated_at' => '2021-02-19 03:43:38'
            ],
            7 => [
                'id' => 38,
                'package_id' => 3,
                'functionality_id' => 2,
                'count' => 0,
                'created_at' => '2021-02-19 03:43:39',
                'updated_at' => '2021-02-19 03:43:39'
            ],
            8 => [
                'id' => 39,
                'package_id' => 3,
                'functionality_id' => 3,
                'count' => 0,
                'created_at' => '2021-02-19 03:43:39',
                'updated_at' => '2021-02-19 03:43:39'
            ],
            9 => [
                'id' => 40,
                'package_id' => 1,
                'functionality_id' => 1,
                'count' => 10,
                'created_at' => '2021-02-19 03:46:24',
                'updated_at' => '2021-02-19 03:46:24'
            ],
            10 => [
                'id' => 41,
                'package_id' => 1,
                'functionality_id' => 2,
                'count' => 1,
                'created_at' => '2021-02-19 03:46:24',
                'updated_at' => '2021-02-19 03:46:24'
            ],
            11 => [
                'id' => 42,
                'package_id' => 1,
                'functionality_id' => 3,
                'count' => 1,
                'created_at' => '2021-02-19 03:46:25',
                'updated_at' => '2021-02-19 03:46:25'
            ]
        ]);
    }
}
