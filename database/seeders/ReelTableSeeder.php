<?php

namespace Database\Seeders;

use App\Models\Reel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ReelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::disableForeignKeyConstraints();
        Reel::truncate();
//        Schema::enableForeignKeyConstraints();

        for ($i=0; $i < 40; $i++) { 
            Reel::create( [
                    'reel_url'    => 'how make '.$i,
                    'slug'  => 'how-make-image '.$i,
                    'duration' => '2020-12-19',
                    'user_id'       => $i+1,
            ]);

        }
    }
}
