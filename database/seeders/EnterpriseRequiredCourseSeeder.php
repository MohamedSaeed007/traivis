<?php

namespace Database\Seeders;

use App\Models\EnterpriseRequiredCourse;
use Illuminate\Database\Seeder;

class EnterpriseRequiredCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        // dd(session('business_id'));
        $items = [
               [
                  'company_id'=>session('business_id'),
                  'en_course_name'=>'Python System',
                  'ar_course_name'=>' ',
                  'type'=>1,
                  'purchase_course_id'=>'',
                  'validity'=>6
               ],
               [
                'company_id'=> session('business_id'),
                'en_course_name'=>'Android Studio Pro',
                'ar_course_name'=>' ',
                'type'=>2,
                'purchase_course_id'=>'',
                'validity'=>4 
               ],
               [
                'company_id'=>session('business_id'),
                'en_course_name'=>'Marketing Strategies',
                'ar_course_name'=>' ',
                'type'=>1,
                'purchase_course_id'=>'',
                'validity'=>3 
               ]
               
        ];
        foreach($items as $item){
            EnterpriseRequiredCourse::create($item);

        }
    }
}
