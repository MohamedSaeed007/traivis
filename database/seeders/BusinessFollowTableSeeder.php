<?php

namespace Database\Seeders;

use App\Models\BusinessFollow;
use App\Models\Course;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class BusinessFollowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        Schema::disableForeignKeyConstraints();
        BusinessFollow::truncate();
        //        Schema::enableForeignKeyConstraints();

        $users = User::all();
        $courses = Course::all();
        $posts = Post::all();
        foreach ($users as $user) {
            $follower = BusinessFollow::create([
                'business_id' => 1,
                'user_id' => $user->id
            ]);
            foreach ($courses as $course) {
                for ($i = 0; $i < 2; $i++) {
                    $follower->courseViews()->create([
                        'course_id' => $course->id,
                    ]);
                }
            }
            foreach ($posts as $post) {
                for ($i = 0; $i < 2; $i++) {
                    $follower->postViews()->create([
                        'post_id' => $post->id,
                    ]);
                }
            }
        }
    }
}
