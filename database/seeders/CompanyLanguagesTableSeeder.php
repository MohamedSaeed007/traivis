<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyLanguagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_languages')->truncate();

        \DB::table('company_languages')->insert([
            0 => [
                'id' => 5,
                'company_id' => 18,
                'language_id' => 2,
                'created_at' => '2020-12-28 14:45:16',
                'updated_at' => '2020-12-28 14:45:16',
                'deleted_at' => null
            ],
            1 => [
                'id' => 6,
                'company_id' => 18,
                'language_id' => 3,
                'created_at' => '2020-12-28 14:45:16',
                'updated_at' => '2020-12-28 14:45:16',
                'deleted_at' => null
            ],
            2 => [
                'id' => 17,
                'company_id' => 16,
                'language_id' => 1,
                'created_at' => '2020-12-29 05:42:05',
                'updated_at' => '2020-12-29 05:42:05',
                'deleted_at' => null
            ],
            3 => [
                'id' => 18,
                'company_id' => 16,
                'language_id' => 2,
                'created_at' => '2020-12-29 05:42:05',
                'updated_at' => '2020-12-29 05:42:05',
                'deleted_at' => null
            ],
            4 => [
                'id' => 25,
                'company_id' => 17,
                'language_id' => 2,
                'created_at' => '2020-12-29 06:40:53',
                'updated_at' => '2020-12-29 06:40:53',
                'deleted_at' => null
            ],
            5 => [
                'id' => 26,
                'company_id' => 17,
                'language_id' => 3,
                'created_at' => '2020-12-29 06:40:53',
                'updated_at' => '2020-12-29 06:40:53',
                'deleted_at' => null
            ],
            6 => [
                'id' => 31,
                'company_id' => 19,
                'language_id' => 1,
                'created_at' => '2021-01-05 12:18:28',
                'updated_at' => '2021-01-05 12:18:28',
                'deleted_at' => null
            ],
            7 => [
                'id' => 32,
                'company_id' => 20,
                'language_id' => 2,
                'created_at' => '2021-01-06 06:48:37',
                'updated_at' => '2021-01-06 06:48:37',
                'deleted_at' => null
            ],
            8 => [
                'id' => 38,
                'company_id' => 21,
                'language_id' => 1,
                'created_at' => '2021-01-08 07:33:13',
                'updated_at' => '2021-01-08 07:33:13',
                'deleted_at' => null
            ],
            9 => [
                'id' => 40,
                'company_id' => 22,
                'language_id' => 1,
                'created_at' => '2021-01-08 09:45:33',
                'updated_at' => '2021-01-08 09:45:33',
                'deleted_at' => null
            ],
            10 => [
                'id' => 41,
                'company_id' => 23,
                'language_id' => 1,
                'created_at' => '2021-01-08 11:25:53',
                'updated_at' => '2021-01-08 11:25:53',
                'deleted_at' => null
            ],
            11 => [
                'id' => 42,
                'company_id' => 27,
                'language_id' => 1,
                'created_at' => '2021-01-08 11:48:20',
                'updated_at' => '2021-01-08 11:48:20',
                'deleted_at' => null
            ],
            12 => [
                'id' => 44,
                'company_id' => 57,
                'language_id' => 2,
                'created_at' => '2021-01-10 16:14:17',
                'updated_at' => '2021-01-10 16:14:17',
                'deleted_at' => null
            ],
            13 => [
                'id' => 46,
                'company_id' => 61,
                'language_id' => 1,
                'created_at' => '2021-01-14 06:28:18',
                'updated_at' => '2021-01-14 06:28:18',
                'deleted_at' => null
            ],
            14 => [
                'id' => 47,
                'company_id' => 69,
                'language_id' => 1,
                'created_at' => '2021-01-31 16:03:47',
                'updated_at' => '2021-01-31 16:03:47',
                'deleted_at' => null
            ],
            15 => [
                'id' => 48,
                'company_id' => 70,
                'language_id' => 2,
                'created_at' => '2021-01-31 19:59:20',
                'updated_at' => '2021-01-31 19:59:20',
                'deleted_at' => null
            ],
            16 => [
                'id' => 49,
                'company_id' => 71,
                'language_id' => 3,
                'created_at' => '2021-02-03 22:05:26',
                'updated_at' => '2021-02-03 22:05:26',
                'deleted_at' => null
            ],
            17 => [
                'id' => 50,
                'company_id' => 72,
                'language_id' => 3,
                'created_at' => '2021-02-03 22:05:34',
                'updated_at' => '2021-02-03 22:05:34',
                'deleted_at' => null
            ],
            18 => [
                'id' => 51,
                'company_id' => 74,
                'language_id' => 2,
                'created_at' => '2021-02-03 22:13:24',
                'updated_at' => '2021-02-03 22:13:24',
                'deleted_at' => null
            ],
            19 => [
                'id' => 52,
                'company_id' => 75,
                'language_id' => 2,
                'created_at' => '2021-02-03 22:13:30',
                'updated_at' => '2021-02-03 22:13:30',
                'deleted_at' => null
            ],
            20 => [
                'id' => 53,
                'company_id' => 76,
                'language_id' => 2,
                'created_at' => '2021-02-03 22:13:38',
                'updated_at' => '2021-02-03 22:13:38',
                'deleted_at' => null
            ],
            21 => [
                'id' => 54,
                'company_id' => 77,
                'language_id' => 2,
                'created_at' => '2021-02-03 22:13:40',
                'updated_at' => '2021-02-03 22:13:40',
                'deleted_at' => null
            ],
            22 => [
                'id' => 55,
                'company_id' => 78,
                'language_id' => 2,
                'created_at' => '2021-02-03 22:13:45',
                'updated_at' => '2021-02-03 22:13:45',
                'deleted_at' => null
            ],
            23 => [
                'id' => 56,
                'company_id' => 79,
                'language_id' => 2,
                'created_at' => '2021-02-03 22:14:09',
                'updated_at' => '2021-02-03 22:14:09',
                'deleted_at' => null
            ],
            24 => [
                'id' => 57,
                'company_id' => 80,
                'language_id' => 2,
                'created_at' => '2021-02-06 15:30:43',
                'updated_at' => '2021-02-06 15:30:43',
                'deleted_at' => null
            ],
            25 => [
                'id' => 58,
                'company_id' => 105,
                'language_id' => 2,
                'created_at' => '2021-02-08 09:01:49',
                'updated_at' => '2021-02-08 09:01:49',
                'deleted_at' => null
            ],
            26 => [
                'id' => 59,
                'company_id' => 110,
                'language_id' => 2,
                'created_at' => '2021-03-01 03:01:54',
                'updated_at' => '2021-03-01 03:01:54',
                'deleted_at' => null
            ],
            27 => [
                'id' => 64,
                'company_id' => 112,
                'language_id' => 3,
                'created_at' => '2021-03-24 08:40:51',
                'updated_at' => '2021-03-24 08:40:51',
                'deleted_at' => null
            ],
            28 => [
                'id' => 65,
                'company_id' => 112,
                'language_id' => 15,
                'created_at' => '2021-03-24 08:40:51',
                'updated_at' => '2021-03-24 08:40:51',
                'deleted_at' => null
            ],
            29 => [
                'id' => 66,
                'company_id' => 112,
                'language_id' => 18,
                'created_at' => '2021-03-24 08:40:51',
                'updated_at' => '2021-03-24 08:40:51',
                'deleted_at' => null
            ],
            30 => [
                'id' => 70,
                'company_id' => 114,
                'language_id' => 3,
                'created_at' => '2021-03-26 11:23:25',
                'updated_at' => '2021-03-26 11:23:25',
                'deleted_at' => null
            ],
            31 => [
                'id' => 79,
                'company_id' => 116,
                'language_id' => 3,
                'created_at' => '2021-04-27 14:07:33',
                'updated_at' => '2021-04-27 14:07:33',
                'deleted_at' => null
            ],
            32 => [
                'id' => 80,
                'company_id' => 116,
                'language_id' => 5,
                'created_at' => '2021-04-27 14:07:33',
                'updated_at' => '2021-04-27 14:07:33',
                'deleted_at' => null
            ],
            33 => [
                'id' => 83,
                'company_id' => 117,
                'language_id' => 3,
                'created_at' => '2021-04-27 17:59:03',
                'updated_at' => '2021-04-27 17:59:03',
                'deleted_at' => null
            ],
            34 => [
                'id' => 84,
                'company_id' => 117,
                'language_id' => 5,
                'created_at' => '2021-04-27 17:59:03',
                'updated_at' => '2021-04-27 17:59:03',
                'deleted_at' => null
            ],
            35 => [
                'id' => 87,
                'company_id' => 118,
                'language_id' => 3,
                'created_at' => '2021-04-28 18:05:50',
                'updated_at' => '2021-04-28 18:05:50',
                'deleted_at' => null
            ],
            36 => [
                'id' => 88,
                'company_id' => 118,
                'language_id' => 5,
                'created_at' => '2021-04-28 18:05:50',
                'updated_at' => '2021-04-28 18:05:50',
                'deleted_at' => null
            ],
            37 => [
                'id' => 89,
                'company_id' => 119,
                'language_id' => 3,
                'created_at' => '2021-04-30 18:44:14',
                'updated_at' => '2021-04-30 18:44:14',
                'deleted_at' => null
            ],
            38 => [
                'id' => 91,
                'company_id' => 120,
                'language_id' => 3,
                'created_at' => '2021-05-28 09:50:15',
                'updated_at' => '2021-05-28 09:50:15',
                'deleted_at' => null
            ],
            39 => [
                'id' => 93,
                'company_id' => 121,
                'language_id' => 3,
                'created_at' => '2021-05-28 09:59:07',
                'updated_at' => '2021-05-28 09:59:07',
                'deleted_at' => null
            ],
            40 => [
                'id' => 94,
                'company_id' => 111,
                'language_id' => 2,
                'created_at' => '2021-06-01 04:47:36',
                'updated_at' => '2021-06-01 04:47:36',
                'deleted_at' => null
            ],
            41 => [
                'id' => 96,
                'company_id' => 124,
                'language_id' => 3,
                'created_at' => '2021-06-03 13:53:59',
                'updated_at' => '2021-06-03 13:53:59',
                'deleted_at' => null
            ],
            42 => [
                'id' => 97,
                'company_id' => 123,
                'language_id' => 3,
                'created_at' => '2021-06-03 14:48:36',
                'updated_at' => '2021-06-03 14:48:36',
                'deleted_at' => null
            ],
            43 => [
                'id' => 98,
                'company_id' => 1,
                'language_id' => 3,
                'created_at' => '2021-06-08 07:16:49',
                'updated_at' => '2021-06-08 07:16:49',
                'deleted_at' => null
            ],
            44 => [
                'id' => 99,
                'company_id' => 5,
                'language_id' => 6,
                'created_at' => '2021-06-18 10:17:50',
                'updated_at' => '2021-06-18 10:17:50',
                'deleted_at' => null
            ],
            45 => [
                'id' => 100,
                'company_id' => 7,
                'language_id' => 3,
                'created_at' => '2021-06-20 16:11:12',
                'updated_at' => '2021-06-20 16:11:12',
                'deleted_at' => null
            ],
            46 => [
                'id' => 101,
                'company_id' => 9,
                'language_id' => 3,
                'created_at' => '2021-06-22 11:27:23',
                'updated_at' => '2021-06-22 11:27:23',
                'deleted_at' => null
            ],
            47 => [
                'id' => 102,
                'company_id' => 10,
                'language_id' => 4,
                'created_at' => '2021-06-22 12:01:30',
                'updated_at' => '2021-06-22 12:01:30',
                'deleted_at' => null
            ]
        ]);
    }
}
