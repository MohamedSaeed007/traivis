<?php

namespace Database\Seeders;

use App\Models\Assignment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Schema;

class AssignmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Schema::disableForeignKeyConstraints();
        Assignment::truncate();
//        Schema::enableForeignKeyConstraints();
        $data =
            [
                ['title' => 'Islamic','course_id'=>11, 'text' => 'Learn religin step by step',
                    'options' => [
                        'validity_option' => 'for',
                        'duration' => 5,
                        'duration_type' => 'weeks',
                        'total_points' => '10',
                        'pass_points' => '5',
                    ],
                ],
                ['title' => 'Islamic','course_id'=>11, 'text' => 'Learn religin step by step',
                    'options' => [
                        'validity_option' => 'until',
                        'until' => Carbon::now()->addDays(5),
                        'total_points' => '10',
                        'pass_points' => '5',
                    ],
                ]
            ];
        foreach ($data as $a) {
            Assignment::create($a);
        }
    }
}
