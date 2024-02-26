<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyRequiredCoursesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_required_courses')->truncate();

        \DB::table('company_required_courses')->insert([
            0 => [
                'id' => 8,
                'company_id' => 481,
                'en_course_name' => 'css',
                'ar_course_name' => null,
                'type' => 1,
                'purchase_course_id' => 0,
                'validity' => 1,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-10 17:35:54',
                'updated_by' => null,
                'updated_at' => '2021-06-10 17:35:54',
                'deleted_at' => null
            ],
            1 => [
                'id' => 10,
                'company_id' => 492,
                'en_course_name' => 'course3',
                'ar_course_name' => null,
                'type' => 1,
                'purchase_course_id' => 0,
                'validity' => 0,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-10 17:53:23',
                'updated_by' => null,
                'updated_at' => '2021-06-10 17:53:23',
                'deleted_at' => null
            ],
            2 => [
                'id' => 11,
                'company_id' => 467,
                'en_course_name' => 'ethical haking',
                'ar_course_name' => 'ethical hacking',
                'type' => 2,
                'purchase_course_id' => 0,
                'validity' => 4,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 07:55:04',
                'updated_by' => null,
                'updated_at' => '2021-06-17 07:55:04',
                'deleted_at' => null
            ],
            3 => [
                'id' => 12,
                'company_id' => 467,
                'en_course_name' => 'cyber security',
                'ar_course_name' => 'cyber security',
                'type' => 2,
                'purchase_course_id' => 0,
                'validity' => 7,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 07:58:02',
                'updated_by' => null,
                'updated_at' => '2021-06-17 07:58:02',
                'deleted_at' => null
            ],
            4 => [
                'id' => 13,
                'company_id' => 493,
                'en_course_name' => 'Lisandra Norris',
                'ar_course_name' => null,
                'type' => 1,
                'purchase_course_id' => 0,
                'validity' => 1,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-17 09:55:51',
                'updated_by' => null,
                'updated_at' => '2021-06-17 09:55:51',
                'deleted_at' => null
            ],
            5 => [
                'id' => 15,
                'company_id' => 468,
                'en_course_name' => 'Wordpress course',
                'ar_course_name' => null,
                'type' => 1,
                'purchase_course_id' => 0,
                'validity' => 6,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 07:30:59',
                'updated_by' => null,
                'updated_at' => '2021-06-18 07:30:59',
                'deleted_at' => null
            ],
            6 => [
                'id' => 16,
                'company_id' => 468,
                'en_course_name' => 'AWS certification',
                'ar_course_name' => null,
                'type' => 2,
                'purchase_course_id' => 0,
                'validity' => 12,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 07:31:37',
                'updated_by' => null,
                'updated_at' => '2021-06-18 07:31:37',
                'deleted_at' => null
            ],
            7 => [
                'id' => 17,
                'company_id' => 468,
                'en_course_name' => 'Train me',
                'ar_course_name' => null,
                'type' => 1,
                'purchase_course_id' => 0,
                'validity' => 9,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 07:32:17',
                'updated_by' => null,
                'updated_at' => '2021-06-18 07:32:17',
                'deleted_at' => null
            ],
            8 => [
                'id' => 20,
                'company_id' => 516,
                'en_course_name' => 'hacking',
                'ar_course_name' => 'hacking',
                'type' => 1,
                'purchase_course_id' => 0,
                'validity' => 6,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 10:37:44',
                'updated_by' => null,
                'updated_at' => '2021-06-18 10:37:44',
                'deleted_at' => null
            ],
            9 => [
                'id' => 21,
                'company_id' => 516,
                'en_course_name' => 'android development',
                'ar_course_name' => 'android development',
                'type' => 1,
                'purchase_course_id' => 0,
                'validity' => 12,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 10:38:29',
                'updated_by' => null,
                'updated_at' => '2021-06-18 10:38:29',
                'deleted_at' => null
            ],
            10 => [
                'id' => 22,
                'company_id' => 516,
                'en_course_name' => 'basic design',
                'ar_course_name' => 'basic design',
                'type' => 1,
                'purchase_course_id' => 0,
                'validity' => 4,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 10:57:30',
                'updated_by' => null,
                'updated_at' => '2021-06-18 10:57:30',
                'deleted_at' => null
            ],
            11 => [
                'id' => 25,
                'company_id' => 522,
                'en_course_name' => 'Wordpress deep',
                'ar_course_name' => null,
                'type' => 1,
                'purchase_course_id' => 0,
                'validity' => 6,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 16:00:07',
                'updated_by' => null,
                'updated_at' => '2021-06-18 16:00:07',
                'deleted_at' => null
            ],
            12 => [
                'id' => 27,
                'company_id' => 522,
                'en_course_name' => 'dev ops',
                'ar_course_name' => null,
                'type' => 1,
                'purchase_course_id' => 0,
                'validity' => 4,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-18 16:01:20',
                'updated_by' => null,
                'updated_at' => '2021-06-18 16:01:20',
                'deleted_at' => null
            ],
            13 => [
                'id' => 29,
                'company_id' => 528,
                'en_course_name' => 'cssu',
                'ar_course_name' => null,
                'type' => 2,
                'purchase_course_id' => 0,
                'validity' => 3,
                'status' => 1,
                'created_by' => null,
                'created_at' => '2021-06-20 16:44:38',
                'updated_by' => null,
                'updated_at' => '2021-06-20 16:44:38',
                'deleted_at' => null
            ]
        ]);
    }
}
