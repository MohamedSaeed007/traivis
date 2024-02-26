<?php

namespace Database\Seeders;

use App\Models\DefaultPercentage;
use Illuminate\Database\Seeder;

class DefaultPercentageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DefaultPercentage::create([
            'percentage'=>'3',
            'name'=>'karma'
        ]);
    }
}
