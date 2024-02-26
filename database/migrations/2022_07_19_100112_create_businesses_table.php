<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table
                ->string('business_name')
                ->index()
                ->nullable();
            $table
                ->string('business_number')
                ->index()
                ->nullable();
            $table->string('business_type')->default('instructor'); //trainer freelancer Eduction enterprise
            $table->string('business_email')->nullable();
            $table->string('business_phone_one')->nullable();
            $table->string('business_phone_two')->nullable();
            //start data added from userSpace
            $table->string('business_website')->nullable();
            $table->string('course_categories')->nullable();
            $table->string('course_industries')->nullable();
            $table->string('course_languages')->nullable();
            $table->string('contact_full_name')->nullable();
            //end data added from userSpace
            $table->integer('country_id')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->longText('description')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('cover_pic')->nullable();
            $table->tinyInteger('suspend')->default(0);
            $table->tinyInteger('approved')->default(0);
            $table->tinyInteger('waiting')->default(0);
            $table->boolean('is_verified')->default(0);
            $table->foreignId('created_by')->constrained('users'); // user who create the business
            // $table->foreignId('user_id')->constrained();
            $table->integer('subscription_id')->nullable();
            $table->foreignId('tier_id')->nullable()->constrained();
            $table->decimal('hold_balance', 16)->default(0);
            $table->decimal('balance', 16)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}