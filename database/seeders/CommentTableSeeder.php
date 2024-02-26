<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::disableForeignKeyConstraints();
        Comment::truncate();
//        Schema::enableForeignKeyConstraints();
        return;

        for ($i = 0; $i < 20; $i++) {
            Comment::create([
                'comment' => 'great comment ' . $i,
                'commentable_id' => $i + 2,
                'commentable_type' => 'App\Models\Post',
                'parent_id' => $i,
                'user_id' => $i + 1
            ]);

            Comment::create([
                'comment' => 'great comment ' . $i,
                'commentable_id' => $i + 2,
                'commentable_type' => 'App\Models\Reel',
                'parent_id' => $i + 1,
                'user_id' => $i + 1
            ]);
        }
    }
}
