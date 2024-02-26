<?php

namespace Database\Seeders;

use App\Models\EducationInformation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class EductionInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::disableForeignKeyConstraints();
        EducationInformation::truncate();
//        Schema::enableForeignKeyConstraints();
        $data = [
            [
                'name' => 'sudan school',
                'level' => 'sudan secondary school',
                'location' => 'sudan university',
                'major' => '',
                'user_id' => 1
            ],
            [
                'name' => 'egypt school',
                'level' => 'uk secondary school',
                'location' => 'egypt university',
                'major' => '',
                'user_id' => 2
            ],
            [
                'name' => 'france school',
                'level' => 'france secondary school',
                'location' => 'france university',
                'major' => '',
                'user_id' => 3
            ],
            [
                'name' => 'usa school',
                'level' => 'egypt secondary school',
                'location' => 'usa university',
                'major' => '',
                'user_id' => 1
            ]
        ];
        EducationInformation::insert($data);
    }
}
