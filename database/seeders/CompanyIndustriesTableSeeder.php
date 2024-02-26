<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyIndustriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_industries')->truncate();

        \DB::table('company_industries')->insert([
            0 => [
                'id' => 1,
                'company_id' => 1,
                'industry_id' => 3,
                'created_at' => '2021-06-08 07:16:49',
                'updated_at' => '2021-06-08 07:16:49'
            ],
            1 => [
                'id' => 2,
                'company_id' => 5,
                'industry_id' => 2,
                'created_at' => '2021-06-18 10:17:50',
                'updated_at' => '2021-06-18 10:17:50'
            ],
            2 => [
                'id' => 3,
                'company_id' => 7,
                'industry_id' => 4,
                'created_at' => '2021-06-20 16:11:12',
                'updated_at' => '2021-06-20 16:11:12'
            ],
            3 => [
                'id' => 4,
                'company_id' => 9,
                'industry_id' => 3,
                'created_at' => '2021-06-22 11:27:23',
                'updated_at' => '2021-06-22 11:27:23'
            ],
            4 => [
                'id' => 5,
                'company_id' => 10,
                'industry_id' => 2,
                'created_at' => '2021-06-22 12:01:30',
                'updated_at' => '2021-06-22 12:01:30'
            ]
        ]);
    }
}
