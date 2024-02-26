<?php

namespace Database\Seeders;

use App\Models\Bidding;
use Illuminate\Database\Seeder;

class BiddingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('biddings')->truncate();

         \DB::table('biddings')->insert([
            0 => [
                'id' => 1,
                'business_id' => 3,
                'course_id' => 0,
                'category_id' => 3,
                'company_id' => 468,
                'number_of_employees' => 34,
                'bidding_price' => 100.0,
                'acceptance_price' => null,
                'status' => 1,
                'read_status' => 0,
                'accepatnce_status' => 0,
                'created_at' => '2021-06-18 11:42:57',
                'updated_at' => '2021-06-18 11:42:57',
                'created_by' => 468,
                'updated_by' => null,
                'deleted_at' => null,
                'employee_id' => null,
                'required_course_id' => null,
                'actual_price' => '0.000',
                'message' => null,
                'is_genarate_coupon' => 0,
                'deadline' => '0000-00-00',
                'document' => null,
                'p_m_request' => 0,
                'aditional_info' => null,
                'course_start_date' => null,
                'request_document' => null,
                'name' => 'Information Technology',
                
            ]
        ]);

        $bidding=Bidding::find(1);
        $bidding->categories()->attach(1);
        $bidding ->industries()->attach(1);
    }
}
