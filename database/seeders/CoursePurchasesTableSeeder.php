<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursePurchasesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('course_purchases')->truncate();

        \DB::table('course_purchases')->insert([
            0 => [
                'id' => 1,
                'purchase_code' => '',
                'course_id' => 1,
                'purchased_course_id' => null,
                'purchased_by_id' => 468,
                'purchased_by_type' => 3,
                'unit_purchase_price' => null,
                'total_price' => 200.0,
                'quantity' => 1,
                'institute_notification' => 0,
                'created_at' => '2021-06-08 09:55:27',
                'updated_at' => '2021-06-08 09:55:27',
                'deleted_at' => null
            ]
        ]);
    }
}
