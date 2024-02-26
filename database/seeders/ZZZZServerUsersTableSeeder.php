<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ZZZZServerUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        \DB::table('users')->truncate();
        User::truncate();

        $faker = Factory::create();

        $pics = [
            'https://cdn.pixabay.com/photo/2018/09/12/12/14/man-3672010__340.jpg',
            'https://cdn.pixabay.com/photo/2018/01/15/07/51/woman-3083383__340.jpg',
        ];

        foreach (range(0, 10) as $i) {
            $user = User::create([
                'name' => 'Traivis Admin ' . $i,
                'username' => 'mohamefadol ' . $i,
                'first_name' => 'mohamed ' . $i,
                'middle_name' => 'fadol ' . $i,
                'last_name' => 'elbary ' . $i,
                'approved' => 1,
                'state_id' => $i,
                'city_id' => $i,
                'email' => 'nanduldas' . $i . '@gmail.com',
                'email_verified_at' => now(),
                //                    'password' =>  '$2y$10$LqcAPWCz03wTinKPDv4gtuRM9sKYAZneEGP/Tf1xwAehkSEU/HxzG',
                'password' => bcrypt('123456'),
                'gender' => null,
                'company_name' => null,
                'country_id' => null,
                'address' => null,
                'address_2' => null,
                'city' => null,
                'zip_code' => null,
                'postcode' => null,
                'website' => null,
                'phone' => null,
                'about_me' => null,
                'date_of_birth' => null,
                'photo' => null,
                // 'profile_pic' => $faker->imageUrl(),
                //                'profile_pic' => $pics[array_rand($pics)],
                'job_title' => null,
                'options' =>
                    '{"enrolled_courses":[3,7],"completed_courses":{"1":{"percent":100,"content_ids":[2,3,1]},"23":{"percent":100,"content_ids":[26]},"68":{"percent":25,"content_ids":[94]},"70":{"percent":100,"content_ids":[101,99,100]},"3":{"percent":25,"content_ids":[1]}},"social":{"website":null,"twitter":null,"facebook":null,"linkedin":null,"instagram":null},"wishlists":[48]}',
                'user_type' => 'admin',
                'role' => 1,
                'course_type' => '',
                'active_status' => 1,
                'provider_user_id' => null,
                'provider' => null,
                'reset_token' => null,
                'verification_status' => 0,
                'profile_completion_status' => 0,
                'remember_token' => null,
                'timezone' => 'UTC',
                'parent_company' => null,
                'country' => null,
                'created_at' => '2020-12-19 07:15:44',
                'updated_at' => '2021-06-18 10:03:26',
                'deleted_at' => null,
                'token' => null,
            ]);
            try {
                $user->addMediaFromUrl($pics[array_rand($pics)])->toMediaCollection();
            } catch (\Exception $e) {
            }
        }
    }
}
