<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->truncate();

        \DB::table('permissions')->insert([
            0 => [
                'id' => 1,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 07:40:14',
                'updated_at' => '2021-01-19 07:40:14',
                'module_id' => 2
            ],
            1 => [
                'id' => 2,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 07:40:14',
                'updated_at' => '2021-01-19 07:40:14',
                'module_id' => 2
            ],
            2 => [
                'id' => 3,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 07:40:14',
                'updated_at' => '2021-01-19 07:40:14',
                'module_id' => 2
            ],
            3 => [
                'id' => 4,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 07:40:14',
                'updated_at' => '2021-01-19 07:40:14',
                'module_id' => 2
            ],
            4 => [
                'id' => 5,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 07:40:14',
                'updated_at' => '2021-01-19 07:40:14',
                'module_id' => 2
            ],
            5 => [
                'id' => 6,
                'key' => 'browse_module',
                'table_name' => 'module',
                'created_at' => '2021-01-19 07:40:24',
                'updated_at' => '2021-01-19 07:40:24',
                'module_id' => 3
            ],
            6 => [
                'id' => 7,
                'key' => 'read_module',
                'table_name' => 'module',
                'created_at' => '2021-01-19 07:40:24',
                'updated_at' => '2021-01-19 07:40:24',
                'module_id' => 3
            ],
            7 => [
                'id' => 8,
                'key' => 'edit_module',
                'table_name' => 'module',
                'created_at' => '2021-01-19 07:40:24',
                'updated_at' => '2021-01-19 07:40:24',
                'module_id' => 3
            ],
            8 => [
                'id' => 9,
                'key' => 'add_module',
                'table_name' => 'module',
                'created_at' => '2021-01-19 07:40:24',
                'updated_at' => '2021-01-19 07:40:24',
                'module_id' => 3
            ],
            9 => [
                'id' => 10,
                'key' => 'delete_module',
                'table_name' => 'module',
                'created_at' => '2021-01-19 07:40:25',
                'updated_at' => '2021-01-19 07:40:25',
                'module_id' => 3
            ],
            10 => [
                'id' => 11,
                'key' => 'browse_cms',
                'table_name' => 'cms',
                'created_at' => '2021-01-19 07:43:01',
                'updated_at' => '2021-01-19 07:43:01',
                'module_id' => 4
            ],
            11 => [
                'id' => 12,
                'key' => 'read_cms',
                'table_name' => 'cms',
                'created_at' => '2021-01-19 07:43:01',
                'updated_at' => '2021-01-19 07:43:01',
                'module_id' => 4
            ],
            12 => [
                'id' => 13,
                'key' => 'edit_cms',
                'table_name' => 'cms',
                'created_at' => '2021-01-19 07:43:01',
                'updated_at' => '2021-01-19 07:43:01',
                'module_id' => 4
            ],
            13 => [
                'id' => 14,
                'key' => 'add_cms',
                'table_name' => 'cms',
                'created_at' => '2021-01-19 07:43:01',
                'updated_at' => '2021-01-19 07:43:01',
                'module_id' => 4
            ],
            14 => [
                'id' => 15,
                'key' => 'delete_cms',
                'table_name' => 'cms',
                'created_at' => '2021-01-19 07:43:02',
                'updated_at' => '2021-01-19 07:43:02',
                'module_id' => 4
            ],
            15 => [
                'id' => 16,
                'key' => 'browse_course',
                'table_name' => 'course',
                'created_at' => '2021-01-19 07:43:10',
                'updated_at' => '2021-01-19 07:43:10',
                'module_id' => 5
            ],
            16 => [
                'id' => 17,
                'key' => 'read_course',
                'table_name' => 'course',
                'created_at' => '2021-01-19 07:43:10',
                'updated_at' => '2021-01-19 07:43:10',
                'module_id' => 5
            ],
            17 => [
                'id' => 18,
                'key' => 'edit_course',
                'table_name' => 'course',
                'created_at' => '2021-01-19 07:43:10',
                'updated_at' => '2021-01-19 07:43:10',
                'module_id' => 5
            ],
            18 => [
                'id' => 19,
                'key' => 'add_course',
                'table_name' => 'course',
                'created_at' => '2021-01-19 07:43:11',
                'updated_at' => '2021-01-19 07:43:11',
                'module_id' => 5
            ],
            19 => [
                'id' => 20,
                'key' => 'delete_course',
                'table_name' => 'course',
                'created_at' => '2021-01-19 07:43:11',
                'updated_at' => '2021-01-19 07:43:11',
                'module_id' => 5
            ],
            20 => [
                'id' => 26,
                'key' => 'browse_payments',
                'table_name' => 'payments',
                'created_at' => '2021-01-19 07:43:34',
                'updated_at' => '2021-01-19 07:43:34',
                'module_id' => 7
            ],
            21 => [
                'id' => 27,
                'key' => 'read_payments',
                'table_name' => 'payments',
                'created_at' => '2021-01-19 07:43:34',
                'updated_at' => '2021-01-19 07:43:34',
                'module_id' => 7
            ],
            22 => [
                'id' => 28,
                'key' => 'edit_payments',
                'table_name' => 'payments',
                'created_at' => '2021-01-19 07:43:34',
                'updated_at' => '2021-01-19 07:43:34',
                'module_id' => 7
            ],
            23 => [
                'id' => 29,
                'key' => 'add_payments',
                'table_name' => 'payments',
                'created_at' => '2021-01-19 07:43:35',
                'updated_at' => '2021-01-19 07:43:35',
                'module_id' => 7
            ],
            24 => [
                'id' => 30,
                'key' => 'delete_payments',
                'table_name' => 'payments',
                'created_at' => '2021-01-19 07:43:35',
                'updated_at' => '2021-01-19 07:43:35',
                'module_id' => 7
            ],
            25 => [
                'id' => 31,
                'key' => 'browse_withdraws',
                'table_name' => 'withdraws',
                'created_at' => '2021-01-19 07:43:53',
                'updated_at' => '2021-01-19 07:43:53',
                'module_id' => 8
            ],
            26 => [
                'id' => 32,
                'key' => 'read_withdraws',
                'table_name' => 'withdraws',
                'created_at' => '2021-01-19 07:43:53',
                'updated_at' => '2021-01-19 07:43:53',
                'module_id' => 8
            ],
            27 => [
                'id' => 33,
                'key' => 'edit_withdraws',
                'table_name' => 'withdraws',
                'created_at' => '2021-01-19 07:43:53',
                'updated_at' => '2021-01-19 07:43:53',
                'module_id' => 8
            ],
            28 => [
                'id' => 34,
                'key' => 'add_withdraws',
                'table_name' => 'withdraws',
                'created_at' => '2021-01-19 07:43:53',
                'updated_at' => '2021-01-19 07:43:53',
                'module_id' => 8
            ],
            29 => [
                'id' => 35,
                'key' => 'delete_withdraws',
                'table_name' => 'withdraws',
                'created_at' => '2021-01-19 07:43:53',
                'updated_at' => '2021-01-19 07:43:53',
                'module_id' => 8
            ],
            30 => [
                'id' => 36,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 07:44:00',
                'updated_at' => '2021-01-19 07:44:00',
                'module_id' => 9
            ],
            31 => [
                'id' => 37,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 07:44:00',
                'updated_at' => '2021-01-19 07:44:00',
                'module_id' => 9
            ],
            32 => [
                'id' => 38,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 07:44:00',
                'updated_at' => '2021-01-19 07:44:00',
                'module_id' => 9
            ],
            33 => [
                'id' => 39,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 07:44:01',
                'updated_at' => '2021-01-19 07:44:01',
                'module_id' => 9
            ],
            34 => [
                'id' => 40,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 07:44:01',
                'updated_at' => '2021-01-19 07:44:01',
                'module_id' => 9
            ],
            35 => [
                'id' => 41,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-19 07:44:40',
                'updated_at' => '2021-01-19 07:44:40',
                'module_id' => 10
            ],
            36 => [
                'id' => 42,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-19 07:44:41',
                'updated_at' => '2021-01-19 07:44:41',
                'module_id' => 10
            ],
            37 => [
                'id' => 43,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-19 07:44:41',
                'updated_at' => '2021-01-19 07:44:41',
                'module_id' => 10
            ],
            38 => [
                'id' => 44,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-19 07:44:41',
                'updated_at' => '2021-01-19 07:44:41',
                'module_id' => 10
            ],
            39 => [
                'id' => 45,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-19 07:44:41',
                'updated_at' => '2021-01-19 07:44:41',
                'module_id' => 10
            ],
            40 => [
                'id' => 46,
                'key' => 'browse_genaral_settings',
                'table_name' => 'genaral_settings',
                'created_at' => '2021-01-19 07:51:14',
                'updated_at' => '2021-01-19 07:51:14',
                'module_id' => 11
            ],
            41 => [
                'id' => 47,
                'key' => 'read_genaral_settings',
                'table_name' => 'genaral_settings',
                'created_at' => '2021-01-19 07:51:14',
                'updated_at' => '2021-01-19 07:51:14',
                'module_id' => 11
            ],
            42 => [
                'id' => 48,
                'key' => 'edit_genaral_settings',
                'table_name' => 'genaral_settings',
                'created_at' => '2021-01-19 07:51:15',
                'updated_at' => '2021-01-19 07:51:15',
                'module_id' => 11
            ],
            43 => [
                'id' => 49,
                'key' => 'add_genaral_settings',
                'table_name' => 'genaral_settings',
                'created_at' => '2021-01-19 07:51:15',
                'updated_at' => '2021-01-19 07:51:15',
                'module_id' => 11
            ],
            44 => [
                'id' => 50,
                'key' => 'delete_genaral_settings',
                'table_name' => 'genaral_settings',
                'created_at' => '2021-01-19 07:51:15',
                'updated_at' => '2021-01-19 07:51:15',
                'module_id' => 11
            ],
            45 => [
                'id' => 51,
                'key' => 'browse_lms_settings',
                'table_name' => 'lms_settings',
                'created_at' => '2021-01-19 07:51:26',
                'updated_at' => '2021-01-19 07:51:26',
                'module_id' => 12
            ],
            46 => [
                'id' => 52,
                'key' => 'read_lms_settings',
                'table_name' => 'lms_settings',
                'created_at' => '2021-01-19 07:51:26',
                'updated_at' => '2021-01-19 07:51:26',
                'module_id' => 12
            ],
            47 => [
                'id' => 53,
                'key' => 'edit_lms_settings',
                'table_name' => 'lms_settings',
                'created_at' => '2021-01-19 07:51:26',
                'updated_at' => '2021-01-19 07:51:26',
                'module_id' => 12
            ],
            48 => [
                'id' => 54,
                'key' => 'add_lms_settings',
                'table_name' => 'lms_settings',
                'created_at' => '2021-01-19 07:51:26',
                'updated_at' => '2021-01-19 07:51:26',
                'module_id' => 12
            ],
            49 => [
                'id' => 55,
                'key' => 'delete_lms_settings',
                'table_name' => 'lms_settings',
                'created_at' => '2021-01-19 07:51:27',
                'updated_at' => '2021-01-19 07:51:27',
                'module_id' => 12
            ],
            50 => [
                'id' => 56,
                'key' => 'browse_payment_gatway',
                'table_name' => 'payment_gatway',
                'created_at' => '2021-01-19 07:51:41',
                'updated_at' => '2021-01-19 07:51:41',
                'module_id' => 13
            ],
            51 => [
                'id' => 57,
                'key' => 'read_payment_gatway',
                'table_name' => 'payment_gatway',
                'created_at' => '2021-01-19 07:51:41',
                'updated_at' => '2021-01-19 07:51:41',
                'module_id' => 13
            ],
            52 => [
                'id' => 58,
                'key' => 'edit_payment_gatway',
                'table_name' => 'payment_gatway',
                'created_at' => '2021-01-19 07:51:41',
                'updated_at' => '2021-01-19 07:51:41',
                'module_id' => 13
            ],
            53 => [
                'id' => 59,
                'key' => 'add_payment_gatway',
                'table_name' => 'payment_gatway',
                'created_at' => '2021-01-19 07:51:42',
                'updated_at' => '2021-01-19 07:51:42',
                'module_id' => 13
            ],
            54 => [
                'id' => 60,
                'key' => 'delete_payment_gatway',
                'table_name' => 'payment_gatway',
                'created_at' => '2021-01-19 07:51:42',
                'updated_at' => '2021-01-19 07:51:42',
                'module_id' => 13
            ],
            55 => [
                'id' => 61,
                'key' => 'browse_withdraw_setting',
                'table_name' => 'withdraw_setting',
                'created_at' => '2021-01-19 07:52:21',
                'updated_at' => '2021-01-19 07:52:21',
                'module_id' => 14
            ],
            56 => [
                'id' => 62,
                'key' => 'read_withdraw_setting',
                'table_name' => 'withdraw_setting',
                'created_at' => '2021-01-19 07:52:21',
                'updated_at' => '2021-01-19 07:52:21',
                'module_id' => 14
            ],
            57 => [
                'id' => 63,
                'key' => 'edit_withdraw_setting',
                'table_name' => 'withdraw_setting',
                'created_at' => '2021-01-19 07:52:21',
                'updated_at' => '2021-01-19 07:52:21',
                'module_id' => 14
            ],
            58 => [
                'id' => 64,
                'key' => 'add_withdraw_setting',
                'table_name' => 'withdraw_setting',
                'created_at' => '2021-01-19 07:52:22',
                'updated_at' => '2021-01-19 07:52:22',
                'module_id' => 14
            ],
            59 => [
                'id' => 65,
                'key' => 'delete_withdraw_setting',
                'table_name' => 'withdraw_setting',
                'created_at' => '2021-01-19 07:52:22',
                'updated_at' => '2021-01-19 07:52:22',
                'module_id' => 14
            ],
            60 => [
                'id' => 66,
                'key' => 'browse_theme_settings',
                'table_name' => 'theame_settings',
                'created_at' => '2021-01-19 07:52:39',
                'updated_at' => '2021-01-19 07:52:39',
                'module_id' => 15
            ],
            61 => [
                'id' => 67,
                'key' => 'read_theme_settings',
                'table_name' => 'theame_settings',
                'created_at' => '2021-01-19 07:52:39',
                'updated_at' => '2021-01-19 07:52:39',
                'module_id' => 15
            ],
            62 => [
                'id' => 68,
                'key' => 'edit_theme_settings',
                'table_name' => 'theame_settings',
                'created_at' => '2021-01-19 07:52:39',
                'updated_at' => '2021-01-19 07:52:39',
                'module_id' => 15
            ],
            63 => [
                'id' => 69,
                'key' => 'add_theme_settings',
                'table_name' => 'theame_settings',
                'created_at' => '2021-01-19 07:52:39',
                'updated_at' => '2021-01-19 07:52:39',
                'module_id' => 15
            ],
            64 => [
                'id' => 70,
                'key' => 'delete_theme_settings',
                'table_name' => 'theame_settings',
                'created_at' => '2021-01-19 07:52:40',
                'updated_at' => '2021-01-19 07:52:40',
                'module_id' => 15
            ],
            65 => [
                'id' => 71,
                'key' => 'browse_storage_setting',
                'table_name' => 'storage_setting',
                'created_at' => '2021-01-19 07:53:59',
                'updated_at' => '2021-01-19 07:53:59',
                'module_id' => 16
            ],
            66 => [
                'id' => 72,
                'key' => 'read_storage_setting',
                'table_name' => 'storage_setting',
                'created_at' => '2021-01-19 07:53:59',
                'updated_at' => '2021-01-19 07:53:59',
                'module_id' => 16
            ],
            67 => [
                'id' => 73,
                'key' => 'edit_storage_setting',
                'table_name' => 'storage_setting',
                'created_at' => '2021-01-19 07:53:59',
                'updated_at' => '2021-01-19 07:53:59',
                'module_id' => 16
            ],
            68 => [
                'id' => 74,
                'key' => 'add_storage_setting',
                'table_name' => 'storage_setting',
                'created_at' => '2021-01-19 07:53:59',
                'updated_at' => '2021-01-19 07:53:59',
                'module_id' => 16
            ],
            69 => [
                'id' => 75,
                'key' => 'delete_storage_setting',
                'table_name' => 'storage_setting',
                'created_at' => '2021-01-19 07:53:59',
                'updated_at' => '2021-01-19 07:53:59',
                'module_id' => 16
            ],
            70 => [
                'id' => 76,
                'key' => 'browse_payment_settings',
                'table_name' => 'payment_settings',
                'created_at' => '2021-01-19 07:57:59',
                'updated_at' => '2021-01-19 07:57:59',
                'module_id' => 17
            ],
            71 => [
                'id' => 77,
                'key' => 'read_payment_settings',
                'table_name' => 'payment_settings',
                'created_at' => '2021-01-19 07:57:59',
                'updated_at' => '2021-01-19 07:57:59',
                'module_id' => 17
            ],
            72 => [
                'id' => 78,
                'key' => 'edit_payment_settings',
                'table_name' => 'payment_settings',
                'created_at' => '2021-01-19 07:57:59',
                'updated_at' => '2021-01-19 07:57:59',
                'module_id' => 17
            ],
            73 => [
                'id' => 79,
                'key' => 'add_payment_settings',
                'table_name' => 'payment_settings',
                'created_at' => '2021-01-19 07:57:59',
                'updated_at' => '2021-01-19 07:57:59',
                'module_id' => 17
            ],
            74 => [
                'id' => 80,
                'key' => 'delete_payment_settings',
                'table_name' => 'payment_settings',
                'created_at' => '2021-01-19 07:57:59',
                'updated_at' => '2021-01-19 07:57:59',
                'module_id' => 17
            ],
            75 => [
                'id' => 81,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 07:58:38',
                'updated_at' => '2021-01-19 07:58:38',
                'module_id' => 18
            ],
            76 => [
                'id' => 82,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 07:58:39',
                'updated_at' => '2021-01-19 07:58:39',
                'module_id' => 18
            ],
            77 => [
                'id' => 83,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 07:58:39',
                'updated_at' => '2021-01-19 07:58:39',
                'module_id' => 18
            ],
            78 => [
                'id' => 84,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 07:58:39',
                'updated_at' => '2021-01-19 07:58:39',
                'module_id' => 18
            ],
            79 => [
                'id' => 85,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 07:58:39',
                'updated_at' => '2021-01-19 07:58:39',
                'module_id' => 18
            ],
            80 => [
                'id' => 86,
                'key' => 'browse_sub_admin',
                'table_name' => 'sub_admin',
                'created_at' => '2021-01-19 08:12:12',
                'updated_at' => '2021-01-19 08:12:12',
                'module_id' => 19
            ],
            81 => [
                'id' => 87,
                'key' => 'read_sub_admin',
                'table_name' => 'sub_admin',
                'created_at' => '2021-01-19 08:12:13',
                'updated_at' => '2021-01-19 08:12:13',
                'module_id' => 19
            ],
            82 => [
                'id' => 88,
                'key' => 'edit_sub_admin',
                'table_name' => 'sub_admin',
                'created_at' => '2021-01-19 08:12:13',
                'updated_at' => '2021-01-19 08:12:13',
                'module_id' => 19
            ],
            83 => [
                'id' => 89,
                'key' => 'add_sub_admin',
                'table_name' => 'sub_admin',
                'created_at' => '2021-01-19 08:12:13',
                'updated_at' => '2021-01-19 08:12:13',
                'module_id' => 19
            ],
            84 => [
                'id' => 90,
                'key' => 'delete_sub_admin',
                'table_name' => 'sub_admin',
                'created_at' => '2021-01-19 08:12:13',
                'updated_at' => '2021-01-19 08:12:13',
                'module_id' => 19
            ],
            85 => [
                'id' => 91,
                'key' => 'browse_trainer_dashboard',
                'table_name' => 'trainer_dashboard',
                'created_at' => '2021-01-20 03:45:19',
                'updated_at' => '2021-01-20 03:45:19',
                'module_id' => 20
            ],
            86 => [
                'id' => 92,
                'key' => 'read_trainer_dashboard',
                'table_name' => 'trainer_dashboard',
                'created_at' => '2021-01-20 03:45:19',
                'updated_at' => '2021-01-20 03:45:19',
                'module_id' => 20
            ],
            87 => [
                'id' => 93,
                'key' => 'edit_trainer_dashboard',
                'table_name' => 'trainer_dashboard',
                'created_at' => '2021-01-20 03:45:19',
                'updated_at' => '2021-01-20 03:45:19',
                'module_id' => 20
            ],
            88 => [
                'id' => 94,
                'key' => 'add_trainer_dashboard',
                'table_name' => 'trainer_dashboard',
                'created_at' => '2021-01-20 03:45:19',
                'updated_at' => '2021-01-20 03:45:19',
                'module_id' => 20
            ],
            89 => [
                'id' => 95,
                'key' => 'delete_trainer_dashboard',
                'table_name' => 'trainer_dashboard',
                'created_at' => '2021-01-20 03:45:20',
                'updated_at' => '2021-01-20 03:45:20',
                'module_id' => 20
            ],
            90 => [
                'id' => 96,
                'key' => 'browse_live_schedule_details',
                'table_name' => 'live_schedule_details',
                'created_at' => '2021-01-27 15:01:19',
                'updated_at' => '2021-01-27 15:01:19',
                'module_id' => 21
            ],
            91 => [
                'id' => 97,
                'key' => 'read_live_schedule_details',
                'table_name' => 'live_schedule_details',
                'created_at' => '2021-01-27 15:01:19',
                'updated_at' => '2021-01-27 15:01:19',
                'module_id' => 21
            ],
            92 => [
                'id' => 98,
                'key' => 'edit_live_schedule_details',
                'table_name' => 'live_schedule_details',
                'created_at' => '2021-01-27 15:01:19',
                'updated_at' => '2021-01-27 15:01:19',
                'module_id' => 21
            ],
            93 => [
                'id' => 99,
                'key' => 'add_live_schedule_details',
                'table_name' => 'live_schedule_details',
                'created_at' => '2021-01-27 15:01:19',
                'updated_at' => '2021-01-27 15:01:19',
                'module_id' => 21
            ],
            94 => [
                'id' => 100,
                'key' => 'delete_live_schedule_details',
                'table_name' => 'live_schedule_details',
                'created_at' => '2021-01-27 15:01:19',
                'updated_at' => '2021-01-27 15:01:19',
                'module_id' => 21
            ],
            95 => [
                'id' => 101,
                'key' => 'browse_chats',
                'table_name' => 'chats',
                'created_at' => '2021-01-29 06:03:00',
                'updated_at' => '2021-01-29 06:03:00',
                'module_id' => 22
            ],
            96 => [
                'id' => 102,
                'key' => 'read_chats',
                'table_name' => 'chats',
                'created_at' => '2021-01-29 06:03:00',
                'updated_at' => '2021-01-29 06:03:00',
                'module_id' => 22
            ],
            97 => [
                'id' => 103,
                'key' => 'edit_chats',
                'table_name' => 'chats',
                'created_at' => '2021-01-29 06:03:00',
                'updated_at' => '2021-01-29 06:03:00',
                'module_id' => 22
            ],
            98 => [
                'id' => 104,
                'key' => 'add_chats',
                'table_name' => 'chats',
                'created_at' => '2021-01-29 06:03:00',
                'updated_at' => '2021-01-29 06:03:00',
                'module_id' => 22
            ],
            99 => [
                'id' => 105,
                'key' => 'delete_chats',
                'table_name' => 'chats',
                'created_at' => '2021-01-29 06:03:00',
                'updated_at' => '2021-01-29 06:03:00',
                'module_id' => 22
            ],
            100 => [
                'id' => 106,
                'key' => 'browse_translation',
                'table_name' => 'translation',
                'created_at' => '2021-02-05 10:44:40',
                'updated_at' => '2021-02-05 10:44:40',
                'module_id' => 23
            ],
            101 => [
                'id' => 107,
                'key' => 'read_translation',
                'table_name' => 'translation',
                'created_at' => '2021-02-05 10:44:40',
                'updated_at' => '2021-02-05 10:44:40',
                'module_id' => 23
            ],
            102 => [
                'id' => 108,
                'key' => 'edit_translation',
                'table_name' => 'translation',
                'created_at' => '2021-02-05 10:44:40',
                'updated_at' => '2021-02-05 10:44:40',
                'module_id' => 23
            ],
            103 => [
                'id' => 109,
                'key' => 'add_translation',
                'table_name' => 'translation',
                'created_at' => '2021-02-05 10:44:40',
                'updated_at' => '2021-02-05 10:44:40',
                'module_id' => 23
            ],
            104 => [
                'id' => 110,
                'key' => 'delete_translation',
                'table_name' => 'translation',
                'created_at' => '2021-02-05 10:44:40',
                'updated_at' => '2021-02-05 10:44:40',
                'module_id' => 23
            ],
            105 => [
                'id' => 111,
                'key' => 'browse_email_template',
                'table_name' => 'email_template',
                'created_at' => '2021-02-15 14:57:34',
                'updated_at' => '2021-02-15 14:57:34',
                'module_id' => 24
            ],
            106 => [
                'id' => 112,
                'key' => 'read_email_template',
                'table_name' => 'email_template',
                'created_at' => '2021-02-15 14:57:34',
                'updated_at' => '2021-02-15 14:57:34',
                'module_id' => 24
            ],
            107 => [
                'id' => 113,
                'key' => 'edit_email_template',
                'table_name' => 'email_template',
                'created_at' => '2021-02-15 14:57:34',
                'updated_at' => '2021-02-15 14:57:34',
                'module_id' => 24
            ],
            108 => [
                'id' => 114,
                'key' => 'add_email_template',
                'table_name' => 'email_template',
                'created_at' => '2021-02-15 14:57:34',
                'updated_at' => '2021-02-15 14:57:34',
                'module_id' => 24
            ],
            109 => [
                'id' => 115,
                'key' => 'delete_email_template',
                'table_name' => 'email_template',
                'created_at' => '2021-02-15 14:57:34',
                'updated_at' => '2021-02-15 14:57:34',
                'module_id' => 24
            ]
        ]);
    }
}
