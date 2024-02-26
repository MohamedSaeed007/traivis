<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table
                ->string('email')
                ->unique()
                ->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            //start fields will be added in V2
            $table->string('username');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->tinyInteger('approved')->default(0);
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            // end  fields will be added in V2

            $table->string('gender', 20)->nullable();
            $table->string('company_name')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('address')->nullable();
            $table->string('address_2')->nullable();
            $table->string('city')->nullable(); // rename to city_id
            $table->string('zip_code', 50)->nullable();
            $table->string('postcode')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->text('about_me')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->integer('photo')->nullable(); // rename to image
            //            $table->string('profile_pic')->nullable();
            $table->string('cover_pic')->nullable();
            $table->string('job_title')->nullable();
            $table->text('options')->nullable();
            $table->string('user_type')->nullable(); //['user', 'admin', 'support', 'sub_admin']
            $table->integer('role')->nullable();
            $table->string('course_type');
            $table
                ->tinyInteger('active_status')
                ->default(null)
                ->nullable(); //active_status null:pending, 0:block , 1:active;
            /**
             * Social Login Fields
             */
            $table->string('provider_user_id')->nullable();
            $table->string('provider')->nullable();
            $table->string('reset_token', 100)->nullable();
            $table->integer('verification_status')->default(0);
            $table->integer('profile_completion_status')->default(0);

            $table->rememberToken();
            $table->string('timezone')->nullable();
            $table->integer('parent_company')->nullable();
            $table->string('country')->nullable();
            $table->text('token')->nullable();
            $table->text('coupon')->nullable();
            $table->text('otp')->nullable();
            $table->boolean('took_survey')->default(0);
            $table->string('delivery_mode')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
