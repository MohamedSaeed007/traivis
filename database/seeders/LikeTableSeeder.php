<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::disableForeignKeyConstraints();
        Like::truncate();
//        Schema::enableForeignKeyConstraints();

        for ($i = 0; $i < 30; $i++) {
            Like::create([
                'likeable_id' => $i + 1,
                'likeable_type' => 'App\Models\Post',
                'liked' => 0,
                'user_id' => $i + 1
            ]);

            Like::create([
                'likeable_id' => $i + 1,
                'likeable_type' => 'App\Models\Reel',
                'liked' => 0,
                'user_id' => $i + 1
            ]);

            Like::create([
                'likeable_id' => $i + 1,
                'likeable_type' => 'App\Models\Comment',
                'liked' => 0,
                'user_id' => $i + 1
            ]);
        }
    }
}
