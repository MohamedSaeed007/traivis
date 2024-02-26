<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Str;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::disableForeignKeyConstraints();
        Blog::truncate();
//        Schema::enableForeignKeyConstraints();

        for ($i = 0; $i < 20; $i++) {
            Blog::create([
                'blog_title' => '50 blog headers guaranteed ' . $i,
                'blog_content' =>
                    '50 blog headers guaranteed to draw readers into any post 50 blog headers guaranteed to draw readers into any post ' .
                    $i,
                'blog_url' => 'mohamed ' . $i,
                'blog_header' => '50 blog headers guaranteed to draw readers into any post ' . $i,
                'blog_footer' => '50 blog headers guaranteed to draw readers into any post ' . $i,
                'status' => 'public',
                'slug' => Str::of('50 blog headers guaranteed ' . $i)->slug(),
                'user_id' => $i + 1
            ]);
            Blog::create([
                'blog_title' => '50 blog headers guaranteed ' . $i,
                'blog_content' =>
                    '50 blog headers guaranteed to draw readers into any post 50 blog headers guaranteed to draw readers into any post ' .
                    $i,
                'blog_url' => 'mohamed ' . $i,
                'blog_header' => '50 blog headers guaranteed to draw readers into any post ' . $i,
                'blog_footer' => '50 blog headers guaranteed to draw readers into any post ' . $i,
                'status' => 'public',
                'slug' => Str::of('50 blog headers guaranteed ' . $i)->slug(),
                'user_id' => $i + 1
            ]);
            Blog::create([
                'blog_title' => '50 blog headers guaranteed ' . $i,
                'blog_content' =>
                    '50 blog headers guaranteed to draw readers into any post 50 blog headers guaranteed to draw readers into any post ' .
                    $i,
                'blog_url' => 'mohamed ' . $i,
                'blog_header' => '50 blog headers guaranteed to draw readers into any post ' . $i,
                'blog_footer' => '50 blog headers guaranteed to draw readers into any post ' . $i,
                'status' => 'public',
                'slug' => Str::of('50 blog headers guaranteed ' . $i)->slug(),
                'user_id' => $i + 1
            ]);
        }
    }
}
