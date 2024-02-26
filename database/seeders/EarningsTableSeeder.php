<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EarningsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('earnings')->truncate();

        \DB::table('earnings')->insert([
            0 => [
                'id' => 1,
                'instructor_id' => 474,
                'course_id' => 1,
                'payment_id' => 1,
                'payment_status' => 'success',
                'amount' => '200.00',
                'instructor_amount' => '180.00',
                'admin_amount' => '20.00',
                'instructor_share' => '90.00',
                'admin_share' => '10.00',
                'created_at' => '2021-06-08 11:55:27',
                'updated_at' => '2021-06-08 11:55:27'
            ],
            1 => [
                'id' => 2,
                'instructor_id' => 474,
                'course_id' => 1,
                'payment_id' => 2,
                'payment_status' => 'success',
                'amount' => '100.00',
                'instructor_amount' => '90.00',
                'admin_amount' => '10.00',
                'instructor_share' => '90.00',
                'admin_share' => '10.00',
                'created_at' => '2021-06-17 10:08:25',
                'updated_at' => '2021-06-17 10:08:25'
            ],
            2 => [
                'id' => 3,
                'instructor_id' => 474,
                'course_id' => 1,
                'payment_id' => 3,
                'payment_status' => 'success',
                'amount' => '100.00',
                'instructor_amount' => '90.00',
                'admin_amount' => '10.00',
                'instructor_share' => '90.00',
                'admin_share' => '10.00',
                'created_at' => '2021-06-17 10:17:30',
                'updated_at' => '2021-06-17 10:17:30'
            ]
        ]);
    }
}
