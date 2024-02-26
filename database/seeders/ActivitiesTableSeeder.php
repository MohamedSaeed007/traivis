<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('activities')->truncate();

        \DB::table('activities')->insert([
            0 => [
                'id' => 1,
                'user_id' => 478,
                'activity' => 'student mohamed purchased the course php',
                'ip' => '102.189.154.46',
                'type' => 'purchase',
                'course_id' => 3,
                'status' => 0,
                'created_at' => '2021-06-09 13:49:33',
                'updated_at' => '2021-06-09 13:49:33'
            ],
            1 => [
                'id' => 2,
                'user_id' => 476,
                'activity' => 'student mohamed purchased the course php',
                'ip' => '102.189.154.46',
                'type' => 'purchase',
                'course_id' => 3,
                'status' => 0,
                'created_at' => '2021-06-09 13:49:33',
                'updated_at' => '2021-06-09 13:49:33'
            ],
            2 => [
                'id' => 3,
                'user_id' => 479,
                'activity' => 'mo.salah purchased the course php',
                'ip' => '102.189.154.46',
                'type' => 'purchase',
                'course_id' => 3,
                'status' => 0,
                'created_at' => '2021-06-10 09:17:01',
                'updated_at' => '2021-06-10 09:17:01'
            ],
            3 => [
                'id' => 4,
                'user_id' => 476,
                'activity' => 'mo.salah purchased the course php',
                'ip' => '102.189.154.46',
                'type' => 'purchase',
                'course_id' => 3,
                'status' => 0,
                'created_at' => '2021-06-10 09:17:01',
                'updated_at' => '2021-06-10 09:17:01'
            ],
            4 => [
                'id' => 5,
                'user_id' => 1,
                'activity' => 'Traivis Admin purchased the course php',
                'ip' => '43.229.89.205',
                'type' => 'purchase',
                'course_id' => 3,
                'status' => 0,
                'created_at' => '2021-06-15 13:40:17',
                'updated_at' => '2021-06-15 13:40:17'
            ],
            5 => [
                'id' => 6,
                'user_id' => 476,
                'activity' => 'Traivis Admin purchased the course php',
                'ip' => '43.229.89.205',
                'type' => 'purchase',
                'course_id' => 3,
                'status' => 0,
                'created_at' => '2021-06-15 13:40:17',
                'updated_at' => '2021-06-15 13:40:17'
            ],
            6 => [
                'id' => 7,
                'user_id' => 473,
                'activity' => 'Binny project manager purchased the course php',
                'ip' => '43.229.89.205',
                'type' => 'purchase',
                'course_id' => 3,
                'status' => 0,
                'created_at' => '2021-06-16 09:12:39',
                'updated_at' => '2021-06-16 09:12:39'
            ],
            7 => [
                'id' => 8,
                'user_id' => 476,
                'activity' => 'Binny project manager purchased the course php',
                'ip' => '43.229.89.205',
                'type' => 'purchase',
                'course_id' => 3,
                'status' => 0,
                'created_at' => '2021-06-16 09:12:39',
                'updated_at' => '2021-06-16 09:12:39'
            ],
            8 => [
                'id' => 9,
                'user_id' => 509,
                'activity' => 'student mohamed purchased the course test',
                'ip' => '102.189.183.163',
                'type' => 'purchase',
                'course_id' => 4,
                'status' => 0,
                'created_at' => '2021-06-17 09:13:23',
                'updated_at' => '2021-06-17 09:13:23'
            ],
            9 => [
                'id' => 10,
                'user_id' => 476,
                'activity' => 'student mohamed purchased the course test',
                'ip' => '102.189.183.163',
                'type' => 'purchase',
                'course_id' => 4,
                'status' => 0,
                'created_at' => '2021-06-17 09:13:23',
                'updated_at' => '2021-06-17 09:13:23'
            ],
            10 => [
                'id' => 11,
                'user_id' => 509,
                'activity' => 'student mohamed purchased the course new course',
                'ip' => '102.189.183.163',
                'type' => 'purchase',
                'course_id' => 6,
                'status' => 0,
                'created_at' => '2021-06-17 09:24:36',
                'updated_at' => '2021-06-17 09:24:36'
            ],
            11 => [
                'id' => 12,
                'user_id' => 476,
                'activity' => 'student mohamed purchased the course new course',
                'ip' => '102.189.183.163',
                'type' => 'purchase',
                'course_id' => 6,
                'status' => 0,
                'created_at' => '2021-06-17 09:24:36',
                'updated_at' => '2021-06-17 09:24:36'
            ],
            12 => [
                'id' => 13,
                'user_id' => 1,
                'activity' => 'Traivis Admin purchased the course Wordpress course',
                'ip' => '157.46.209.241',
                'type' => 'purchase',
                'course_id' => 7,
                'status' => 0,
                'created_at' => '2021-06-18 08:03:26',
                'updated_at' => '2021-06-18 08:03:26'
            ],
            13 => [
                'id' => 14,
                'user_id' => 1,
                'activity' => 'Traivis Admin purchased the course Wordpress course',
                'ip' => '157.46.209.241',
                'type' => 'purchase',
                'course_id' => 7,
                'status' => 0,
                'created_at' => '2021-06-18 08:03:26',
                'updated_at' => '2021-06-18 08:03:26'
            ],
            14 => [
                'id' => 15,
                'user_id' => 509,
                'activity' => 'student mohamed purchased the course java',
                'ip' => '102.189.246.37',
                'type' => 'purchase',
                'course_id' => 8,
                'status' => 0,
                'created_at' => '2021-06-18 10:53:07',
                'updated_at' => '2021-06-18 10:53:07'
            ],
            15 => [
                'id' => 16,
                'user_id' => 476,
                'activity' => 'student mohamed purchased the course java',
                'ip' => '102.189.246.37',
                'type' => 'purchase',
                'course_id' => 8,
                'status' => 0,
                'created_at' => '2021-06-18 10:53:07',
                'updated_at' => '2021-06-18 10:53:07'
            ],
            16 => [
                'id' => 17,
                'user_id' => 474,
                'activity' => 'Prasoon purchased the course new word press',
                'ip' => '103.99.205.60',
                'type' => 'purchase',
                'course_id' => 9,
                'status' => 0,
                'created_at' => '2021-06-18 11:59:47',
                'updated_at' => '2021-06-18 11:59:47'
            ],
            17 => [
                'id' => 18,
                'user_id' => 474,
                'activity' => 'Prasoon purchased the course new word press',
                'ip' => '103.99.205.60',
                'type' => 'purchase',
                'course_id' => 9,
                'status' => 0,
                'created_at' => '2021-06-18 11:59:47',
                'updated_at' => '2021-06-18 11:59:47'
            ]
        ]);
    }
}
