<?php

namespace Database\Seeders;

use App\Models\Tier;
use Illuminate\Database\Seeder;

class TierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tier::create([
            'name' => 'No Tier',
            'course_fee_commission' => 25,
            'freelancer_commission' => 25,
            'tender_commission' => 20,
            'pay_in_commission' => 5,
        ]);
        Tier::create([
            'name' => 'Talented',
            'course_fee_commission' => 20,
            'freelancer_commission' => 20,
            'tender_commission' => 15,
            'pay_in_commission' => 7.5,
        ]);
        Tier::create([
            'name' => 'Skilled',
            'course_fee_commission' => 15,
            'freelancer_commission' => 18,
            'tender_commission' => 13.5,
            'pay_in_commission' => 10,
        ]);
        Tier::create([
            'name' => 'Expert',
            'course_fee_commission' => 13,
            'freelancer_commission' => 15,
            'tender_commission' => 12,
            'pay_in_commission' => 13,
        ]);
        Tier::create([
            'name' => 'Master',
            'course_fee_commission' => 11,
            'freelancer_commission' => 13,
            'tender_commission' => 10,
            'pay_in_commission' => 16,
        ]);
        Tier::create([
            'name' => 'Partner',
            'course_fee_commission' => 10,
            'freelancer_commission' => 10,
            'tender_commission' => 8,
            'pay_in_commission' => 20,
        ]);
    }
}
