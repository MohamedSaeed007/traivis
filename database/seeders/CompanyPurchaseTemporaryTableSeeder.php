<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CompanyPurchaseTemporaryTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_purchase_temporary')->truncate();

        \DB::table('company_purchase_temporary')->insert([
            0 => [
                'id' => 1,
                'company_course_id' => 2,
                'purchase_course_id' => 1,
                'assigned_employees' => '471',
                'unit_price' => null,
                'course_quantity' => 1,
                'status' => 1
            ]
        ]);
    }
}
