<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesOldTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->truncate();

        for ($i = 0; $i < 30; $i++) {
            \DB::table('categories')->insert([
                $i => [
                    'id' => $i + 1,
                    'user_id' => $i + 1,
                    'category_name' => 'Category ' . $i,
                    'slug' => 'wordpress-development ' . $i,
                    'category_id' => 0, // will rename parent_id in V2
                    'thumbnail_id' => null,
                    'icon_class' => 'la-ad',
                    'step' => 0,
                    'status' => 1,
                ],
            ]);
        }
    }
}
