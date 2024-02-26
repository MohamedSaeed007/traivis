<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseType;
use Illuminate\Support\Facades\Schema;
class LectureCourseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
//        Schema::disableForeignKeyConstraints();
        CourseType::truncate();
//        Schema::enableForeignKeyConstraints();
        $data = [
            ['course_type_name'=>'online', 'course_type_description'=> 'Learn religin step by step online'],
            ['course_type_name'=>'offline', 'course_type_description'=> 'Learn Arabic step by step offline'],
            ['course_type_name'=>'team viewr', 'course_type_description'=> 'Learn math step by step team viewr'],
            ['course_type_name'=>'online', 'course_type_description'=> 'Learn computer step by step online'],
        ];
        CourseType::insert($data);
    }
}
