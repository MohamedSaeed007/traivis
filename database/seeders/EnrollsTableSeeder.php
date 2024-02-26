<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EnrollsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('enrolls')->truncate();

        \DB::table('enrolls')->insert([
            0 => [
                'id' => 1,
                'course_id' => 1,
                'user_id' => 471,
                'purchased_by' => 468,
                'course_price' => '200.00',
                'payment_id' => 1,
                'status' => 'success',
                'created_at' => '2021-06-08 11:55:27'
            ],
            1 => [
                'id' => 2,
                'course_id' => 3,
                'user_id' => 478,
                'purchased_by' => null,
                'course_price' => null,
                'payment_id' => 0,
                'status' => 'success',
                'created_at' => '2021-06-09 15:49:33'
            ],
            2 => [
                'id' => 3,
                'course_id' => 3,
                'user_id' => 479,
                'purchased_by' => null,
                'course_price' => null,
                'payment_id' => 0,
                'status' => 'success',
                'created_at' => '2021-06-10 11:17:01'
            ],
            3 => [
                'id' => 4,
                'course_id' => 3,
                'user_id' => 1,
                'purchased_by' => null,
                'course_price' => null,
                'payment_id' => 0,
                'status' => 'success',
                'created_at' => '2021-06-15 15:40:17'
            ],
            4 => [
                'id' => 5,
                'course_id' => 3,
                'user_id' => 473,
                'purchased_by' => null,
                'course_price' => null,
                'payment_id' => 0,
                'status' => 'success',
                'created_at' => '2021-06-16 11:12:39'
            ],
            5 => [
                'id' => 8,
                'course_id' => 4,
                'user_id' => 509,
                'purchased_by' => null,
                'course_price' => null,
                'payment_id' => 0,
                'status' => 'success',
                'created_at' => '2021-06-17 11:13:23'
            ],
            6 => [
                'id' => 9,
                'course_id' => 6,
                'user_id' => 509,
                'purchased_by' => null,
                'course_price' => null,
                'payment_id' => 0,
                'status' => 'success',
                'created_at' => '2021-06-17 11:24:36'
            ],
            7 => [
                'id' => 10,
                'course_id' => 7,
                'user_id' => 1,
                'purchased_by' => null,
                'course_price' => null,
                'payment_id' => 0,
                'status' => 'success',
                'created_at' => '2021-06-18 10:03:26'
            ],
            8 => [
                'id' => 11,
                'course_id' => 8,
                'user_id' => 509,
                'purchased_by' => null,
                'course_price' => null,
                'payment_id' => 0,
                'status' => 'success',
                'created_at' => '2021-06-18 12:53:07'
            ],
            9 => [
                'id' => 12,
                'course_id' => 9,
                'user_id' => 474,
                'purchased_by' => null,
                'course_price' => null,
                'payment_id' => 0,
                'status' => 'success',
                'created_at' => '2021-06-18 13:59:47'
            ]
        ]);
    }
}
