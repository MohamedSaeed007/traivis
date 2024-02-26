<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_users')->truncate();

        \DB::table('company_users')->insert([
            0 => [
                'id' => 1,
                'user_id' => 468,
                'company_id' => 1,
                'user_role' => 2,
                'created_at' => '2021-06-08 07:16:49',
                'updated_at' => '2021-06-08 07:16:49',
                'deleted_at' => null
            ],
            1 => [
                'id' => 2,
                'user_id' => 481,
                'company_id' => 2,
                'user_role' => 2,
                'created_at' => '2021-06-10 12:29:14',
                'updated_at' => '2021-06-10 12:29:14',
                'deleted_at' => null
            ],
            2 => [
                'id' => 3,
                'user_id' => 467,
                'company_id' => 3,
                'user_role' => 2,
                'created_at' => '2021-06-17 04:57:03',
                'updated_at' => '2021-06-17 04:57:03',
                'deleted_at' => null
            ],
            3 => [
                'id' => 4,
                'user_id' => 511,
                'company_id' => 4,
                'user_role' => 2,
                'created_at' => '2021-06-18 10:13:29',
                'updated_at' => '2021-06-18 10:13:29',
                'deleted_at' => null
            ],
            4 => [
                'id' => 5,
                'user_id' => 516,
                'company_id' => 5,
                'user_role' => 2,
                'created_at' => '2021-06-18 10:17:50',
                'updated_at' => '2021-06-18 10:17:50',
                'deleted_at' => null
            ],
            5 => [
                'id' => 6,
                'user_id' => 522,
                'company_id' => 6,
                'user_role' => 2,
                'created_at' => '2021-06-18 15:39:39',
                'updated_at' => '2021-06-18 15:39:39',
                'deleted_at' => null
            ],
            6 => [
                'id' => 7,
                'user_id' => 529,
                'company_id' => 7,
                'user_role' => 2,
                'created_at' => '2021-06-20 16:11:12',
                'updated_at' => '2021-06-20 16:11:12',
                'deleted_at' => null
            ],
            7 => [
                'id' => 8,
                'user_id' => 528,
                'company_id' => 8,
                'user_role' => 2,
                'created_at' => '2021-06-20 16:36:22',
                'updated_at' => '2021-06-20 16:36:22',
                'deleted_at' => null
            ],
            8 => [
                'id' => 9,
                'user_id' => 534,
                'company_id' => 9,
                'user_role' => 2,
                'created_at' => '2021-06-22 11:27:23',
                'updated_at' => '2021-06-22 11:27:23',
                'deleted_at' => null
            ],
            9 => [
                'id' => 10,
                'user_id' => 536,
                'company_id' => 10,
                'user_role' => 2,
                'created_at' => '2021-06-22 12:01:30',
                'updated_at' => '2021-06-22 12:01:30',
                'deleted_at' => null
            ]
        ]);
    }
}
