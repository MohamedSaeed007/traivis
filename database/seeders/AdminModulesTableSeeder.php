<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminModulesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admin_modules')->truncate();

        \DB::table('admin_modules')->insert([
            0 => [
                'id' => 2,
                'parent_id' => 0,
                'name' => 'roles',
                'perifix' => 'roles',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:40:13',
                'updated_at' => '2021-01-19 07:40:13'
            ],
            1 => [
                'id' => 3,
                'parent_id' => 0,
                'name' => 'module',
                'perifix' => 'module',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:40:24',
                'updated_at' => '2021-01-19 07:40:24'
            ],
            2 => [
                'id' => 4,
                'parent_id' => 0,
                'name' => 'cms',
                'perifix' => 'cms',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:43:00',
                'updated_at' => '2021-01-19 07:43:00'
            ],
            3 => [
                'id' => 5,
                'parent_id' => 0,
                'name' => 'course',
                'perifix' => 'course',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:43:10',
                'updated_at' => '2021-01-19 07:43:10'
            ],
            4 => [
                'id' => 6,
                'parent_id' => 0,
                'name' => 'settings',
                'perifix' => 'settings',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:43:21',
                'updated_at' => '2021-01-19 07:43:21'
            ],
            5 => [
                'id' => 7,
                'parent_id' => 0,
                'name' => 'payments',
                'perifix' => 'payments',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:43:34',
                'updated_at' => '2021-01-19 07:43:34'
            ],
            6 => [
                'id' => 8,
                'parent_id' => 0,
                'name' => 'withdraws',
                'perifix' => 'withdraws',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:43:53',
                'updated_at' => '2021-01-19 07:43:53'
            ],
            7 => [
                'id' => 9,
                'parent_id' => 0,
                'name' => 'users',
                'perifix' => 'users',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:44:00',
                'updated_at' => '2021-01-19 07:44:00'
            ],
            8 => [
                'id' => 10,
                'parent_id' => 0,
                'name' => 'categories',
                'perifix' => 'categories',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:44:40',
                'updated_at' => '2021-01-19 07:44:40'
            ],
            9 => [
                'id' => 11,
                'parent_id' => 0,
                'name' => 'genaral_settings',
                'perifix' => 'genaral_settings',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:51:14',
                'updated_at' => '2021-01-19 07:51:14'
            ],
            10 => [
                'id' => 12,
                'parent_id' => 0,
                'name' => 'lms_settings',
                'perifix' => 'lms_settings',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:51:26',
                'updated_at' => '2021-01-19 07:51:26'
            ],
            11 => [
                'id' => 13,
                'parent_id' => 0,
                'name' => 'payment_gatway',
                'perifix' => 'payment_gatway',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:51:41',
                'updated_at' => '2021-01-19 07:51:41'
            ],
            12 => [
                'id' => 14,
                'parent_id' => 0,
                'name' => 'withdraw_setting',
                'perifix' => 'withdraw_setting',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:52:21',
                'updated_at' => '2021-01-19 07:52:21'
            ],
            13 => [
                'id' => 15,
                'parent_id' => 0,
                'name' => 'theme_settings',
                'perifix' => 'theame_settings',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:52:39',
                'updated_at' => '2021-01-19 07:52:39'
            ],
            14 => [
                'id' => 16,
                'parent_id' => 0,
                'name' => 'storage_setting',
                'perifix' => 'storage_setting',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:53:58',
                'updated_at' => '2021-01-19 07:53:58'
            ],
            15 => [
                'id' => 17,
                'parent_id' => 0,
                'name' => 'payment_settings',
                'perifix' => 'payment_settings',
                'type' => 'parent',
                'created_at' => '2021-01-19 07:57:58',
                'updated_at' => '2021-01-19 07:57:58'
            ],
            16 => [
                'id' => 19,
                'parent_id' => 0,
                'name' => 'sub_admin',
                'perifix' => 'sub_admin',
                'type' => 'parent',
                'created_at' => '2021-01-19 08:12:12',
                'updated_at' => '2021-01-19 08:12:12'
            ],
            17 => [
                'id' => 20,
                'parent_id' => 0,
                'name' => 'trainer_dashboard',
                'perifix' => 'trainer_dashboard',
                'type' => 'parent',
                'created_at' => '2021-01-20 03:45:19',
                'updated_at' => '2021-01-20 03:45:19'
            ],
            18 => [
                'id' => 21,
                'parent_id' => 0,
                'name' => 'live_schedule_details',
                'perifix' => 'live_schedule_details',
                'type' => 'parent',
                'created_at' => '2021-01-27 15:01:19',
                'updated_at' => '2021-01-27 15:01:19'
            ],
            19 => [
                'id' => 22,
                'parent_id' => 0,
                'name' => 'chats',
                'perifix' => 'chats',
                'type' => 'parent',
                'created_at' => '2021-01-29 06:03:00',
                'updated_at' => '2021-01-29 06:03:00'
            ],
            20 => [
                'id' => 23,
                'parent_id' => 0,
                'name' => 'translation',
                'perifix' => 'translation',
                'type' => 'parent',
                'created_at' => '2021-02-05 10:44:40',
                'updated_at' => '2021-02-05 10:44:40'
            ],
            21 => [
                'id' => 24,
                'parent_id' => 0,
                'name' => 'email_template',
                'perifix' => 'email_template',
                'type' => 'parent',
                'created_at' => '2021-02-15 14:57:34',
                'updated_at' => '2021-02-15 14:57:34'
            ]
        ]);
    }
}
