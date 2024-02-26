<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\Category;
use App\Models\Industry;
use App\Models\Language;
use Auth;
use Faker\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use LucasDotVin\Soulbscription\Models\Plan;

class ZZZZServerBusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Business::truncate();

        $faker = Factory::create();

        $pics = [
            'https://cdn.pixabay.com/photo/2018/09/12/12/14/man-3672010__340.jpg',
            'https://cdn.pixabay.com/photo/2018/01/15/07/51/woman-3083383__340.jpg',
        ];

        //        Schema::enableForeignKeyConstraints();
        //        $business_type = ['instructor', 'institute', 'enterprise'];
        //        dump($business_type);
        //        $random_business_type = array_shift($business_type);

        //        dd($random_business_type, $business_type);

        //        for ($i = 0; $i < 10; $i++) {

        Business::factory()
            ->count(10)
            ->sequence(
                // 'user_id' => $sequence->index + 1,
                // 'subscription_id' => $sequence->index + 1
                fn($sequence) => [
                    'business_name' => 'Business Name ' . $sequence->index,
                    'business_email' => 'business-' . $sequence->index . '@gmail.com',
                    'business_phone_one' => '123456789',
                    //                    'profile_pic' => $pics[array_rand($pics)],
                    'created_by' => $sequence->index + 1,
                    // 'user_id' => $sequence->index + 1,
                    'tier_id' => 1,
                    'is_verified' => 1,
                    // 'subscription_id' => $sequence->index + 1
                    'approved' => $sequence->index == 2 ? 1 : 0, //Make first enterprise business approved
                ],
            )
            ->sequence(
                ['business_type' => 'instructor'],
                //                ['business_type' => 'institute'],
                //                ['business_type' => 'enterprise']
            )
            ->create();

        $categoriesList = Category::where('status', 1)
            ->get('id')
            ->toArray();
        $industriesList = Industry::where('status', 1)
            ->get('id')
            ->toArray();
        $languagesList = Language::where('active', 1)
            ->get('id')
            ->toArray();

        $businesses = Business::all();
        $plan = Plan::find(1);
        foreach ($businesses as $business) {
            $business->categories()->attach(array_rand($categoriesList, 2));
            $business->industries()->attach([1, 2]);
            $business->languages()->attach(array_rand($languagesList, 1));
            $business->subscribeTo($plan);
            try {
                $business->addMediaFromUrl($pics[array_rand($pics)])->toMediaCollection();
            } catch (\Exception $e) {
            }
        }
    }
}
