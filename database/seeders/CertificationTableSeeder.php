<?php

namespace Database\Seeders;

use App\Models\Certification;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CertificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::disableForeignKeyConstraints();
        Certification::truncate();
//        Schema::enableForeignKeyConstraints();
        $details = 'This has reference to letter No. RRB/Bhopal/Panel/139 dated 26/8/2013 seeking clarification 
        whether as Ex-serviceman with 15 years active service in the Armed Force with matriculation will be considered 
        eligible to apply for the post for which the minimum qualification is 
        University Degree provided the relevant certificate issued by the Military authority is attached with the application';
        for ($i = 0; $i < 10; $i++) {
            Certification::create([
                'certificate_details' => $details,
                'created_by' => $i + 1,
                'course_id' => $i + 1,
                'student_id' => $i + 1,
                'business_id' => $i + 1
            ]);
        }
    }
}
