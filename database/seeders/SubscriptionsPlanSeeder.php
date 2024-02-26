<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use LucasDotVin\Soulbscription\Enums\PeriodicityType;
use LucasDotVin\Soulbscription\Models\Feature;
use LucasDotVin\Soulbscription\Models\Plan;

class SubscriptionsPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Plans
        $freePlan = Plan::create([
            'name' => 'Free Space',
            'periodicity_type' => PeriodicityType::Year,
            'periodicity' => 1,
            'grace_days' => 7,
            'price' => 0,
        ]);

        $smallPlan = Plan::create([
            'name' => 'Small Enterprise',
            'periodicity_type' => PeriodicityType::Year,
            'periodicity' => 1,
            'grace_days' => 7,
            'price' => 19.99,
        ]);

        $mediumPlan = Plan::create([
            'name' => 'Medium Enterprise',
            'periodicity_type' => PeriodicityType::Year,
            'periodicity' => 1,
            'grace_days' => 7,
            'price' => 39.99,
        ]);

        $largePlan = Plan::create([
            'name' => 'Large Enterprise',
            'periodicity_type' => PeriodicityType::Year,
            'periodicity' => 1,
            'grace_days' => 7,
            'price' => 69.99,
        ]);
        //Features
        $f1 = Feature::create(['name' => 'Employees', 'consumable' => true]);
        $f2 = Feature::create(['name' => 'Manage Courses', 'consumable' => false]);
        $f3 = Feature::create(['name' => 'Training Matrix Building', 'consumable' => false]);
        $f4 = Feature::create(['name' => 'Annually Tenders', 'consumable' => true]);
        $f5 = Feature::create(['name' => 'Manager Accounts', 'consumable' => true]);
        $f6 = Feature::create(['name' => 'Contractors Accounts', 'consumable' => true]);
        $f7 = Feature::create(['name' => 'Employees Reports', 'consumable' => false]);
        $f8 = Feature::create(['name' => 'Certificate SMS Notifications', 'consumable' => false]);

        //Assign Features 1
        $freePlan->features()->attach($f1, ['charges' => 5]);
        $smallPlan->features()->attach($f1, ['charges' => 49]);
        $mediumPlan->features()->attach($f1, ['charges' => 249]);
        $largePlan->features()->attach($f1, ['charges' => 999999]);
        //Assign Features 2
        $freePlan->features()->attach($f2);
        $smallPlan->features()->attach($f2);
        $mediumPlan->features()->attach($f2);
        $largePlan->features()->attach($f2);
        //Assign Features 3
        $freePlan->features()->attach($f3);
        $smallPlan->features()->attach($f3);
        $mediumPlan->features()->attach($f3);
        $largePlan->features()->attach($f3);
        //Assign Features 4
        $freePlan->features()->attach($f4, ['charges' => 2]);
        $smallPlan->features()->attach($f4, ['charges' => 3]);
        $mediumPlan->features()->attach($f4, ['charges' => 6]);
        $largePlan->features()->attach($f4, ['charges' => 999999]);
        //Assign Features 5
        $freePlan->features()->attach($f5, ['charges' => 1]);
        $smallPlan->features()->attach($f5, ['charges' => 1]);
        $mediumPlan->features()->attach($f5, ['charges' => 3]);
        $largePlan->features()->attach($f5, ['charges' => 999999]);
        //Assign Features 6
        $mediumPlan->features()->attach($f6, ['charges' => 2]);
        $largePlan->features()->attach($f6, ['charges' => 999999]);
        //Assign Features 7
        $mediumPlan->features()->attach($f7);
        $largePlan->features()->attach($f7);
        //Assign Features 8
        $mediumPlan->features()->attach($f8);
        $largePlan->features()->attach($f8);
    }
}