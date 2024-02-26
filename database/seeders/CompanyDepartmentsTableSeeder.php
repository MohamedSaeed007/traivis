<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyDepartmentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_departments')->truncate();

        \DB::table('company_departments')->insert([
            0 => [
                'id' => 1,
                'company_id' => 2,
                'en_department' => 'Business',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-07 16:20:24',
                'updated_by' => null,
                'updated_at' => '2021-06-07 16:20:24',
                'deleted_at' => null
            ],
            1 => [
                'id' => 2,
                'company_id' => 2,
                'en_department' => 'Digital Marketing',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-07 16:20:42',
                'updated_by' => null,
                'updated_at' => '2021-06-07 16:20:42',
                'deleted_at' => null
            ],
            2 => [
                'id' => 3,
                'company_id' => 2,
                'en_department' => 'Developing',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-07 16:21:32',
                'updated_by' => null,
                'updated_at' => '2021-06-07 16:21:32',
                'deleted_at' => null
            ],
            3 => [
                'id' => 7,
                'company_id' => 481,
                'en_department' => 'dept 1',
                'ar_department' => 'dept 1_ar',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-10 12:33:07',
                'updated_by' => null,
                'updated_at' => '2021-06-10 12:33:07',
                'deleted_at' => null
            ],
            4 => [
                'id' => 8,
                'company_id' => 481,
                'en_department' => 'dept 2',
                'ar_department' => 'dept 2_ar',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-10 12:33:18',
                'updated_by' => 481,
                'updated_at' => '2021-06-10 12:34:44',
                'deleted_at' => null
            ],
            5 => [
                'id' => 10,
                'company_id' => 467,
                'en_department' => 'Business',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 05:12:14',
                'updated_by' => null,
                'updated_at' => '2021-06-17 05:12:14',
                'deleted_at' => null
            ],
            6 => [
                'id' => 11,
                'company_id' => 467,
                'en_department' => 'Digital Marketing',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 05:12:42',
                'updated_by' => null,
                'updated_at' => '2021-06-17 05:12:42',
                'deleted_at' => null
            ],
            7 => [
                'id' => 12,
                'company_id' => 467,
                'en_department' => 'Programming',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 05:13:18',
                'updated_by' => null,
                'updated_at' => '2021-06-17 05:13:18',
                'deleted_at' => null
            ],
            8 => [
                'id' => 13,
                'company_id' => 468,
                'en_department' => 'Development',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 07:25:20',
                'updated_by' => null,
                'updated_at' => '2021-06-18 07:25:20',
                'deleted_at' => null
            ],
            9 => [
                'id' => 14,
                'company_id' => 468,
                'en_department' => 'SEO',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 07:25:28',
                'updated_by' => null,
                'updated_at' => '2021-06-18 07:25:28',
                'deleted_at' => null
            ],
            10 => [
                'id' => 15,
                'company_id' => 468,
                'en_department' => 'Sales',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 07:25:35',
                'updated_by' => null,
                'updated_at' => '2021-06-18 07:25:35',
                'deleted_at' => null
            ],
            11 => [
                'id' => 16,
                'company_id' => 516,
                'en_department' => 'dep',
                'ar_department' => 'dep',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 10:22:13',
                'updated_by' => null,
                'updated_at' => '2021-06-18 10:22:13',
                'deleted_at' => null
            ],
            12 => [
                'id' => 17,
                'company_id' => 516,
                'en_department' => 'dep 1',
                'ar_department' => 'dep 2',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 10:22:29',
                'updated_by' => null,
                'updated_at' => '2021-06-18 10:22:29',
                'deleted_at' => null
            ],
            13 => [
                'id' => 18,
                'company_id' => 516,
                'en_department' => 'dep 2',
                'ar_department' => 'dep 2',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 10:32:11',
                'updated_by' => null,
                'updated_at' => '2021-06-18 10:32:11',
                'deleted_at' => null
            ],
            14 => [
                'id' => 19,
                'company_id' => 516,
                'en_department' => 'dep 3',
                'ar_department' => 'dep 3',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 10:32:19',
                'updated_by' => null,
                'updated_at' => '2021-06-18 10:32:19',
                'deleted_at' => null
            ],
            15 => [
                'id' => 20,
                'company_id' => 522,
                'en_department' => 'Stock analysis',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 15:56:25',
                'updated_by' => null,
                'updated_at' => '2021-06-18 15:56:25',
                'deleted_at' => null
            ],
            16 => [
                'id' => 21,
                'company_id' => 522,
                'en_department' => 'Business',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 15:56:51',
                'updated_by' => null,
                'updated_at' => '2021-06-18 15:56:51',
                'deleted_at' => null
            ],
            17 => [
                'id' => 22,
                'company_id' => 522,
                'en_department' => 'Telnet',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 15:57:08',
                'updated_by' => null,
                'updated_at' => '2021-06-18 15:57:08',
                'deleted_at' => null
            ],
            18 => [
                'id' => 23,
                'company_id' => 528,
                'en_department' => 'dept 1',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-20 16:38:08',
                'updated_by' => null,
                'updated_at' => '2021-06-20 16:38:08',
                'deleted_at' => null
            ],
            19 => [
                'id' => 24,
                'company_id' => 528,
                'en_department' => 'dept 2',
                'ar_department' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-20 16:38:15',
                'updated_by' => null,
                'updated_at' => '2021-06-20 16:38:15',
                'deleted_at' => null
            ]
        ]);
    }
}
