<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $imageUrl = $faker->imageUrl(640, 480, null, false);
        $imageFile = null;
        try {
            $imageFile = file_get_contents($imageUrl);
        } catch (\Exception $e) {
        }

        $types = ['note', 'hint', 'blog'];
        //        Schema::disableForeignKeyConstraints();
        Post::truncate();
        //        Schema::enableForeignKeyConstraints();
        for ($i = 0; $i < 10; $i++) {
            $post = Post::create([
                'title' => 'great title ' . $i,
                'slug' => 'how-make-image ' . $i,
                'post_content' =>
                    'A high-performance, Material Design style select box replacement that supports',
                'user_id' => $i + 1,
                'status' => 'Published',
                'type' => array_random($types),
            ]);
            //            $post->addMediaFromUrl($imageUrl)->toMediaCollection();
            if ($imageFile) {
                $post->addMediaFromString($imageFile)->toMediaCollection();
            }
        }
    }
}
