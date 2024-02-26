<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RequiredCourseProjectsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('required_course_projects')->truncate();

        \DB::table('required_course_projects')->insert([
            0 => [
                'id' => 1,
                'course_id' => 1,
                'project_id' => 4,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-08 09:27:54',
                'updated_by' => null,
                'updated_at' => '2021-06-08 09:27:54',
                'deleted_at' => null
            ],
            1 => [
                'id' => 4,
                'course_id' => 2,
                'project_id' => 5,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-08 09:29:54',
                'updated_by' => null,
                'updated_at' => '2021-06-08 09:29:54',
                'deleted_at' => null
            ],
            2 => [
                'id' => 5,
                'course_id' => 3,
                'project_id' => 4,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-08 09:32:29',
                'updated_by' => null,
                'updated_at' => '2021-06-08 09:32:29',
                'deleted_at' => null
            ],
            3 => [
                'id' => 6,
                'course_id' => 4,
                'project_id' => 5,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-08 09:33:13',
                'updated_by' => null,
                'updated_at' => '2021-06-08 09:33:13',
                'deleted_at' => null
            ],
            4 => [
                'id' => 7,
                'course_id' => 5,
                'project_id' => 4,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-08 09:33:56',
                'updated_by' => null,
                'updated_at' => '2021-06-08 09:33:56',
                'deleted_at' => null
            ],
            5 => [
                'id' => 8,
                'course_id' => 6,
                'project_id' => 5,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-08 09:35:43',
                'updated_by' => null,
                'updated_at' => '2021-06-08 09:35:43',
                'deleted_at' => null
            ],
            6 => [
                'id' => 9,
                'course_id' => 7,
                'project_id' => 6,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-10 19:35:53',
                'updated_by' => null,
                'updated_at' => '2021-06-10 19:35:53',
                'deleted_at' => null
            ],
            7 => [
                'id' => 10,
                'course_id' => 8,
                'project_id' => 6,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-10 19:35:54',
                'updated_by' => null,
                'updated_at' => '2021-06-10 19:35:54',
                'deleted_at' => null
            ],
            8 => [
                'id' => 11,
                'course_id' => 9,
                'project_id' => 6,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-10 19:36:45',
                'updated_by' => null,
                'updated_at' => '2021-06-10 19:36:45',
                'deleted_at' => null
            ],
            9 => [
                'id' => 12,
                'course_id' => 9,
                'project_id' => 7,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-10 19:36:45',
                'updated_by' => null,
                'updated_at' => '2021-06-10 19:36:45',
                'deleted_at' => null
            ],
            10 => [
                'id' => 13,
                'course_id' => 10,
                'project_id' => 6,
                'status' => 1,
                'created_by' => 492,
                'created_at' => '2021-06-10 19:53:23',
                'updated_by' => null,
                'updated_at' => '2021-06-10 19:53:23',
                'deleted_at' => null
            ],
            11 => [
                'id' => 14,
                'course_id' => 11,
                'project_id' => 13,
                'status' => 1,
                'created_by' => 467,
                'created_at' => '2021-06-17 09:55:04',
                'updated_by' => null,
                'updated_at' => '2021-06-17 09:55:04',
                'deleted_at' => null
            ],
            12 => [
                'id' => 15,
                'course_id' => 12,
                'project_id' => 13,
                'status' => 1,
                'created_by' => 467,
                'created_at' => '2021-06-17 09:58:02',
                'updated_by' => null,
                'updated_at' => '2021-06-17 09:58:02',
                'deleted_at' => null
            ],
            13 => [
                'id' => 16,
                'course_id' => 13,
                'project_id' => 7,
                'status' => 1,
                'created_by' => 493,
                'created_at' => '2021-06-17 11:55:51',
                'updated_by' => null,
                'updated_at' => '2021-06-17 11:55:51',
                'deleted_at' => null
            ],
            14 => [
                'id' => 17,
                'course_id' => 14,
                'project_id' => 5,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-18 09:20:29',
                'updated_by' => null,
                'updated_at' => '2021-06-18 09:20:29',
                'deleted_at' => null
            ],
            15 => [
                'id' => 18,
                'course_id' => 15,
                'project_id' => 4,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-18 09:30:59',
                'updated_by' => null,
                'updated_at' => '2021-06-18 09:30:59',
                'deleted_at' => null
            ],
            16 => [
                'id' => 19,
                'course_id' => 16,
                'project_id' => 5,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-18 09:31:37',
                'updated_by' => null,
                'updated_at' => '2021-06-18 09:31:37',
                'deleted_at' => null
            ],
            17 => [
                'id' => 20,
                'course_id' => 17,
                'project_id' => 4,
                'status' => 1,
                'created_by' => 468,
                'created_at' => '2021-06-18 09:32:17',
                'updated_by' => null,
                'updated_at' => '2021-06-18 09:32:17',
                'deleted_at' => null
            ],
            18 => [
                'id' => 21,
                'course_id' => 18,
                'project_id' => 14,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 12:24:55',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:24:55',
                'deleted_at' => null
            ],
            19 => [
                'id' => 22,
                'course_id' => 19,
                'project_id' => 16,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 12:37:00',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:37:00',
                'deleted_at' => null
            ],
            20 => [
                'id' => 23,
                'course_id' => 20,
                'project_id' => 16,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 12:37:44',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:37:44',
                'deleted_at' => null
            ],
            21 => [
                'id' => 24,
                'course_id' => 20,
                'project_id' => 17,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 12:37:44',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:37:44',
                'deleted_at' => null
            ],
            22 => [
                'id' => 25,
                'course_id' => 21,
                'project_id' => 15,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 12:38:29',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:38:29',
                'deleted_at' => null
            ],
            23 => [
                'id' => 26,
                'course_id' => 21,
                'project_id' => 16,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 12:38:29',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:38:29',
                'deleted_at' => null
            ],
            24 => [
                'id' => 27,
                'course_id' => 22,
                'project_id' => 16,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 12:57:30',
                'updated_by' => null,
                'updated_at' => '2021-06-18 12:57:30',
                'deleted_at' => null
            ],
            25 => [
                'id' => 28,
                'course_id' => 23,
                'project_id' => 16,
                'status' => 1,
                'created_by' => 516,
                'created_at' => '2021-06-18 13:03:47',
                'updated_by' => null,
                'updated_at' => '2021-06-18 13:03:47',
                'deleted_at' => null
            ],
            26 => [
                'id' => 29,
                'course_id' => 24,
                'project_id' => 6,
                'status' => 1,
                'created_by' => 481,
                'created_at' => '2021-06-18 13:18:18',
                'updated_by' => null,
                'updated_at' => '2021-06-18 13:18:18',
                'deleted_at' => null
            ],
            27 => [
                'id' => 30,
                'course_id' => 25,
                'project_id' => 18,
                'status' => 1,
                'created_by' => 522,
                'created_at' => '2021-06-18 18:00:07',
                'updated_by' => null,
                'updated_at' => '2021-06-18 18:00:07',
                'deleted_at' => null
            ],
            28 => [
                'id' => 31,
                'course_id' => 26,
                'project_id' => 19,
                'status' => 1,
                'created_by' => 522,
                'created_at' => '2021-06-18 18:00:49',
                'updated_by' => null,
                'updated_at' => '2021-06-18 18:00:49',
                'deleted_at' => null
            ],
            29 => [
                'id' => 32,
                'course_id' => 27,
                'project_id' => 18,
                'status' => 1,
                'created_by' => 522,
                'created_at' => '2021-06-18 18:01:20',
                'updated_by' => null,
                'updated_at' => '2021-06-18 18:01:20',
                'deleted_at' => null
            ],
            30 => [
                'id' => 33,
                'course_id' => 28,
                'project_id' => 21,
                'status' => 1,
                'created_by' => 528,
                'created_at' => '2021-06-20 18:39:39',
                'updated_by' => null,
                'updated_at' => '2021-06-20 18:39:39',
                'deleted_at' => null
            ],
            31 => [
                'id' => 34,
                'course_id' => 29,
                'project_id' => 20,
                'status' => 1,
                'created_by' => 528,
                'created_at' => '2021-06-20 18:44:38',
                'updated_by' => null,
                'updated_at' => '2021-06-20 18:44:38',
                'deleted_at' => null
            ],
            32 => [
                'id' => 35,
                'course_id' => 29,
                'project_id' => 21,
                'status' => 1,
                'created_by' => 528,
                'created_at' => '2021-06-20 18:44:38',
                'updated_by' => null,
                'updated_at' => '2021-06-20 18:44:38',
                'deleted_at' => null
            ]
        ]);
    }
}
