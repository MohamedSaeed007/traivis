<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponCodeTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('coupon_code')->truncate();

        \DB::table('coupon_code')->insert([
            0 => [
                'id' => 1,
                'title' => 'COUPON',
                'coupon_type' => 0,
                'courses' => '7',
                'coupon_code' => 'GR1Z1G2X',
                'discount_amount' => '20.00',
                'valid_from' => '2021-06-18',
                'valid_to' => '2021-07-11',
                'description' => null,
                'used_status' => 0,
                'active_status' => 1,
                'bidding_id' => 1,
                'created_at' => '2021-06-18 11:44:01',
                'updated_at' => '2021-06-18 12:00:18',
                'user_id' => 1,
                'is_accept' => 1,
                'accepatnce_status' => 1,
                'acceptance_price' => '50',
                'message' => 'ok',
                'document' => null,
                'is_genarate_coupon' => 1,
                'is_company_aprove' => 1
            ],
            1 => [
                'id' => 2,
                'title' => 'second',
                'coupon_type' => 0,
                'courses' => '9',
                'coupon_code' => 'BQTD5H6E',
                'discount_amount' => '40.00',
                'valid_from' => '2021-06-17',
                'valid_to' => '2021-06-20',
                'description' => null,
                'used_status' => 0,
                'active_status' => 1,
                'bidding_id' => 1,
                'created_at' => '2021-06-18 11:57:03',
                'updated_at' => '2021-06-18 11:57:36',
                'user_id' => 474,
                'is_accept' => 1,
                'accepatnce_status' => 1,
                'acceptance_price' => '30',
                'message' => 'message',
                'document' => null,
                'is_genarate_coupon' => 1,
                'is_company_aprove' => null
            ]
        ]);
    }
}
