<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyPositionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_positions')->truncate();

        \DB::table('company_positions')->insert([
            0 => [
                'id' => 1,
                'company_id' => 2,
                'position_en' => 'Business Analyst',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-07 18:17:27',
                'updated_by' => null,
                'updated_at' => '2021-06-07 18:17:27',
                'deleted_at' => null
            ],
            1 => [
                'id' => 2,
                'company_id' => 2,
                'position_en' => 'Trainer',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-07 18:17:47',
                'updated_by' => null,
                'updated_at' => '2021-06-07 18:17:47',
                'deleted_at' => null
            ],
            2 => [
                'id' => 3,
                'company_id' => 2,
                'position_en' => 'Developer',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-07 18:19:47',
                'updated_by' => null,
                'updated_at' => '2021-06-07 18:19:47',
                'deleted_at' => null
            ],
            3 => [
                'id' => 4,
                'company_id' => 468,
                'position_en' => 'Lead developer',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-08 09:20:50',
                'updated_by' => null,
                'updated_at' => '2021-06-08 09:20:50',
                'deleted_at' => null
            ],
            4 => [
                'id' => 5,
                'company_id' => 468,
                'position_en' => 'Tester',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-08 09:20:59',
                'updated_by' => null,
                'updated_at' => '2021-06-08 09:20:59',
                'deleted_at' => null
            ],
            5 => [
                'id' => 6,
                'company_id' => 468,
                'position_en' => 'SEO analyst',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-08 09:21:10',
                'updated_by' => null,
                'updated_at' => '2021-06-17 16:46:38',
                'deleted_at' => '2021-06-17 16:46:38'
            ],
            6 => [
                'id' => 7,
                'company_id' => 481,
                'position_en' => 'position 1',
                'position_ar' => 'position 1_ar',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-10 14:32:44',
                'updated_by' => null,
                'updated_at' => '2021-06-10 14:32:44',
                'deleted_at' => null
            ],
            7 => [
                'id' => 8,
                'company_id' => 481,
                'position_en' => 'position 2',
                'position_ar' => 'position 2_ar',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-10 14:32:52',
                'updated_by' => null,
                'updated_at' => '2021-06-10 14:32:52',
                'deleted_at' => null
            ],
            8 => [
                'id' => 9,
                'company_id' => 468,
                'position_en' => 'New position',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 06:12:48',
                'updated_by' => null,
                'updated_at' => '2021-06-17 06:12:48',
                'deleted_at' => null
            ],
            9 => [
                'id' => 10,
                'company_id' => 467,
                'position_en' => 'Business Analyst',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 07:11:20',
                'updated_by' => null,
                'updated_at' => '2021-06-17 07:11:20',
                'deleted_at' => null
            ],
            10 => [
                'id' => 11,
                'company_id' => 467,
                'position_en' => 'BDA',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 07:11:33',
                'updated_by' => null,
                'updated_at' => '2021-06-17 07:11:33',
                'deleted_at' => null
            ],
            11 => [
                'id' => 12,
                'company_id' => 467,
                'position_en' => 'Marketing Manager',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 07:11:51',
                'updated_by' => null,
                'updated_at' => '2021-06-17 07:11:51',
                'deleted_at' => null
            ],
            12 => [
                'id' => 13,
                'company_id' => 516,
                'position_en' => 'pos',
                'position_ar' => 'pos',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 12:21:46',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:21:46',
                'deleted_at' => null
            ],
            13 => [
                'id' => 14,
                'company_id' => 516,
                'position_en' => 'pos 1',
                'position_ar' => 'pos 1',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 12:21:59',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:21:59',
                'deleted_at' => null
            ],
            14 => [
                'id' => 15,
                'company_id' => 516,
                'position_en' => 'pos 3',
                'position_ar' => 'pos 3',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 12:31:40',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:31:40',
                'deleted_at' => null
            ],
            15 => [
                'id' => 16,
                'company_id' => 516,
                'position_en' => 'pos 4',
                'position_ar' => 'pos 4',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 12:31:50',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:31:50',
                'deleted_at' => null
            ],
            16 => [
                'id' => 17,
                'company_id' => 522,
                'position_en' => 'Sales Head',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 17:55:17',
                'updated_by' => null,
                'updated_at' => '2021-06-18 17:55:17',
                'deleted_at' => null
            ],
            17 => [
                'id' => 18,
                'company_id' => 522,
                'position_en' => 'Technical expert',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 17:55:37',
                'updated_by' => null,
                'updated_at' => '2021-06-18 17:55:37',
                'deleted_at' => null
            ],
            18 => [
                'id' => 19,
                'company_id' => 522,
                'position_en' => 'Finance Manager',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 17:55:52',
                'updated_by' => null,
                'updated_at' => '2021-06-18 17:55:52',
                'deleted_at' => null
            ],
            19 => [
                'id' => 20,
                'company_id' => 528,
                'position_en' => 'position 1',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-20 18:37:50',
                'updated_by' => null,
                'updated_at' => '2021-06-20 18:37:50',
                'deleted_at' => null
            ],
            20 => [
                'id' => 21,
                'company_id' => 528,
                'position_en' => 'position 2',
                'position_ar' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-20 18:37:58',
                'updated_by' => null,
                'updated_at' => '2021-06-20 18:37:58',
                'deleted_at' => null
            ]
        ]);
    }
}
