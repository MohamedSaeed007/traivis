<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyProjectsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_projects')->truncate();

        \DB::table('company_projects')->insert([
            0 => [
                'id' => 1,
                'company_id' => 2,
                'en_project' => 'Alpha Project',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-07 16:22:41',
                'updated_by' => null,
                'updated_at' => '2021-06-07 16:22:41',
                'deleted_at' => null
            ],
            1 => [
                'id' => 2,
                'company_id' => 2,
                'en_project' => 'New Project',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-07 16:23:13',
                'updated_by' => null,
                'updated_at' => '2021-06-07 16:23:13',
                'deleted_at' => null
            ],
            2 => [
                'id' => 3,
                'company_id' => 2,
                'en_project' => 'Beta Project',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-07 16:23:52',
                'updated_by' => null,
                'updated_at' => '2021-06-07 16:23:52',
                'deleted_at' => null
            ],
            3 => [
                'id' => 4,
                'company_id' => 468,
                'en_project' => 'Traivis',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-08 07:22:10',
                'updated_by' => null,
                'updated_at' => '2021-06-08 07:22:10',
                'deleted_at' => null
            ],
            4 => [
                'id' => 5,
                'company_id' => 468,
                'en_project' => 'Train eaze',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-08 07:22:20',
                'updated_by' => null,
                'updated_at' => '2021-06-08 07:22:20',
                'deleted_at' => null
            ],
            5 => [
                'id' => 6,
                'company_id' => 481,
                'en_project' => 'project 1',
                'ar_project' => 'project 1_ar',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-10 12:35:10',
                'updated_by' => null,
                'updated_at' => '2021-06-10 12:35:10',
                'deleted_at' => null
            ],
            6 => [
                'id' => 7,
                'company_id' => 481,
                'en_project' => 'project 2',
                'ar_project' => 'project 2_ar',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-10 12:35:22',
                'updated_by' => null,
                'updated_at' => '2021-06-10 12:35:22',
                'deleted_at' => null
            ],
            7 => [
                'id' => 8,
                'company_id' => 481,
                'en_project' => 'project 3',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-12 23:49:34',
                'updated_by' => null,
                'updated_at' => '2021-06-12 23:49:34',
                'deleted_at' => null
            ],
            8 => [
                'id' => 9,
                'company_id' => 467,
                'en_project' => 'Project 2',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 05:13:52',
                'updated_by' => 467,
                'updated_at' => '2021-06-17 05:15:38',
                'deleted_at' => null
            ],
            9 => [
                'id' => 12,
                'company_id' => 467,
                'en_project' => 'Project 1',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 05:14:37',
                'updated_by' => 467,
                'updated_at' => '2021-06-17 05:15:17',
                'deleted_at' => null
            ],
            10 => [
                'id' => 13,
                'company_id' => 467,
                'en_project' => 'Project 3',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 05:15:02',
                'updated_by' => null,
                'updated_at' => '2021-06-17 05:15:02',
                'deleted_at' => null
            ],
            11 => [
                'id' => 15,
                'company_id' => 516,
                'en_project' => 'proje',
                'ar_project' => 'proje',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 10:23:04',
                'updated_by' => null,
                'updated_at' => '2021-06-18 10:23:04',
                'deleted_at' => null
            ],
            12 => [
                'id' => 16,
                'company_id' => 516,
                'en_project' => 'proj 1',
                'ar_project' => 'proj2',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 10:32:38',
                'updated_by' => null,
                'updated_at' => '2021-06-18 10:32:38',
                'deleted_at' => null
            ],
            13 => [
                'id' => 17,
                'company_id' => 516,
                'en_project' => 'proj 3',
                'ar_project' => 'proj 3',
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 10:32:54',
                'updated_by' => null,
                'updated_at' => '2021-06-18 10:32:54',
                'deleted_at' => null
            ],
            14 => [
                'id' => 18,
                'company_id' => 522,
                'en_project' => 'Traivis',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 15:57:23',
                'updated_by' => null,
                'updated_at' => '2021-06-18 15:57:23',
                'deleted_at' => null
            ],
            15 => [
                'id' => 19,
                'company_id' => 522,
                'en_project' => 'Eazy train',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 15:57:49',
                'updated_by' => null,
                'updated_at' => '2021-06-18 15:57:49',
                'deleted_at' => null
            ],
            16 => [
                'id' => 20,
                'company_id' => 528,
                'en_project' => 'project 1',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-20 16:38:33',
                'updated_by' => null,
                'updated_at' => '2021-06-20 16:38:33',
                'deleted_at' => null
            ],
            17 => [
                'id' => 21,
                'company_id' => 528,
                'en_project' => 'project 2',
                'ar_project' => null,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-20 16:38:42',
                'updated_by' => null,
                'updated_at' => '2021-06-20 16:38:42',
                'deleted_at' => null
            ]
        ]);
    }
}
