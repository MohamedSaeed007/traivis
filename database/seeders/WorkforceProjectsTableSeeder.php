<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorkforceProjectsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('workforce_projects')->truncate();

        \DB::table('workforce_projects')->insert([
            0 => [
                'id' => 1,
                'user_id' => 469,
                'project_id' => 4,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-08 09:23:15',
                'updated_by' => null,
                'updated_at' => '2021-06-18 09:23:30',
                'deleted_at' => '2021-06-18 09:23:30'
            ],
            1 => [
                'id' => 2,
                'user_id' => 470,
                'project_id' => 5,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-08 09:23:42',
                'updated_by' => null,
                'updated_at' => '2021-06-17 16:36:21',
                'deleted_at' => '2021-06-17 16:36:21'
            ],
            2 => [
                'id' => 3,
                'user_id' => 471,
                'project_id' => 5,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-08 09:24:04',
                'updated_by' => null,
                'updated_at' => '2021-06-18 09:23:26',
                'deleted_at' => '2021-06-18 09:23:26'
            ],
            3 => [
                'id' => 4,
                'user_id' => 479,
                'project_id' => 6,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-10 14:36:38',
                'updated_by' => null,
                'updated_at' => '2021-06-10 14:36:54',
                'deleted_at' => '2021-06-10 14:36:54'
            ],
            4 => [
                'id' => 5,
                'user_id' => 478,
                'project_id' => 6,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-10 14:37:40',
                'updated_by' => null,
                'updated_at' => '2021-06-10 14:39:06',
                'deleted_at' => '2021-06-10 14:39:06'
            ],
            5 => [
                'id' => 6,
                'user_id' => 489,
                'project_id' => 6,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-10 14:45:21',
                'updated_by' => null,
                'updated_at' => '2021-06-10 14:45:21',
                'deleted_at' => null
            ],
            6 => [
                'id' => 7,
                'user_id' => 490,
                'project_id' => 7,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-10 14:46:06',
                'updated_by' => null,
                'updated_at' => '2021-06-10 14:46:29',
                'deleted_at' => '2021-06-10 14:46:29'
            ],
            7 => [
                'id' => 8,
                'user_id' => 490,
                'project_id' => 7,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-10 14:46:29',
                'updated_by' => null,
                'updated_at' => '2021-06-10 14:46:29',
                'deleted_at' => null
            ],
            8 => [
                'id' => 9,
                'user_id' => 491,
                'project_id' => 7,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-10 14:47:04',
                'updated_by' => null,
                'updated_at' => '2021-06-10 14:47:04',
                'deleted_at' => null
            ],
            9 => [
                'id' => 10,
                'user_id' => 494,
                'project_id' => 4,
                'status' => 1,
                'created_by' => 493,
                'created_at' => '2021-06-10 20:18:21',
                'updated_by' => null,
                'updated_at' => '2021-06-10 20:18:21',
                'deleted_at' => null
            ],
            10 => [
                'id' => 11,
                'user_id' => 499,
                'project_id' => 12,
                'status' => 1,
                'created_by' => 467,
                'created_at' => '2021-06-17 07:17:07',
                'updated_by' => null,
                'updated_at' => '2021-06-17 07:17:07',
                'deleted_at' => null
            ],
            11 => [
                'id' => 12,
                'user_id' => 500,
                'project_id' => 12,
                'status' => 1,
                'created_by' => 467,
                'created_at' => '2021-06-17 07:18:02',
                'updated_by' => null,
                'updated_at' => '2021-06-17 07:18:02',
                'deleted_at' => null
            ],
            12 => [
                'id' => 13,
                'user_id' => 510,
                'project_id' => 6,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-17 11:41:34',
                'updated_by' => null,
                'updated_at' => '2021-06-17 11:41:34',
                'deleted_at' => null
            ],
            13 => [
                'id' => 14,
                'user_id' => 513,
                'project_id' => 4,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-18 09:26:34',
                'updated_by' => null,
                'updated_at' => '2021-06-18 09:27:45',
                'deleted_at' => '2021-06-18 09:27:45'
            ],
            14 => [
                'id' => 15,
                'user_id' => 514,
                'project_id' => 5,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-18 09:27:16',
                'updated_by' => null,
                'updated_at' => '2021-06-18 13:14:41',
                'deleted_at' => '2021-06-18 13:14:41'
            ],
            15 => [
                'id' => 16,
                'user_id' => 515,
                'project_id' => 4,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-18 09:27:35',
                'updated_by' => null,
                'updated_at' => '2021-06-18 09:27:35',
                'deleted_at' => null
            ],
            16 => [
                'id' => 17,
                'user_id' => 513,
                'project_id' => 4,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-18 09:27:45',
                'updated_by' => null,
                'updated_at' => '2021-06-18 09:27:45',
                'deleted_at' => null
            ],
            17 => [
                'id' => 18,
                'user_id' => 517,
                'project_id' => 14,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 12:23:50',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:23:50',
                'deleted_at' => null
            ],
            18 => [
                'id' => 19,
                'user_id' => 518,
                'project_id' => 16,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 12:34:14',
                'updated_by' => null,
                'updated_at' => '2021-06-18 16:39:14',
                'deleted_at' => '2021-06-18 16:39:14'
            ],
            19 => [
                'id' => 20,
                'user_id' => 519,
                'project_id' => 16,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 12:34:59',
                'updated_by' => null,
                'updated_at' => '2021-06-18 16:29:53',
                'deleted_at' => '2021-06-18 16:29:53'
            ],
            20 => [
                'id' => 21,
                'user_id' => 520,
                'project_id' => 17,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 12:35:36',
                'updated_by' => null,
                'updated_at' => '2021-06-18 16:35:51',
                'deleted_at' => '2021-06-18 16:35:51'
            ],
            21 => [
                'id' => 22,
                'user_id' => 521,
                'project_id' => 14,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 16:15:47',
                'updated_by' => null,
                'updated_at' => '2021-06-18 16:15:55',
                'deleted_at' => '2021-06-18 16:15:55'
            ],
            22 => [
                'id' => 23,
                'user_id' => 523,
                'project_id' => 18,
                'status' => 1,
                'created_by' => 522,
                'created_at' => '2021-06-18 17:58:36',
                'updated_by' => null,
                'updated_at' => '2021-06-18 17:58:36',
                'deleted_at' => null
            ],
            23 => [
                'id' => 24,
                'user_id' => 524,
                'project_id' => 19,
                'status' => 1,
                'created_by' => 522,
                'created_at' => '2021-06-18 17:59:03',
                'updated_by' => null,
                'updated_at' => '2021-06-18 17:59:03',
                'deleted_at' => null
            ],
            24 => [
                'id' => 25,
                'user_id' => 525,
                'project_id' => 18,
                'status' => 1,
                'created_by' => 522,
                'created_at' => '2021-06-18 17:59:30',
                'updated_by' => null,
                'updated_at' => '2021-06-18 18:07:22',
                'deleted_at' => '2021-06-18 18:07:22'
            ],
            25 => [
                'id' => 26,
                'user_id' => 530,
                'project_id' => 20,
                'status' => 1,
                'created_by' => 528,
                'created_at' => '2021-06-20 18:39:07',
                'updated_by' => null,
                'updated_at' => '2021-06-20 18:39:07',
                'deleted_at' => null
            ],
            26 => [
                'id' => 27,
                'user_id' => 531,
                'project_id' => 20,
                'status' => 1,
                'created_by' => 528,
                'created_at' => '2021-06-20 18:42:31',
                'updated_by' => null,
                'updated_at' => '2021-06-20 18:42:31',
                'deleted_at' => null
            ],
            27 => [
                'id' => 28,
                'user_id' => 532,
                'project_id' => 20,
                'status' => 1,
                'created_by' => 528,
                'created_at' => '2021-06-20 19:49:38',
                'updated_by' => null,
                'updated_at' => '2021-06-20 19:49:38',
                'deleted_at' => null
            ]
        ]);
    }
}
