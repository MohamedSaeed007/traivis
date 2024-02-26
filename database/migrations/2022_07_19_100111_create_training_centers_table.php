<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingCentersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('training_centers', function(Blueprint $table)
		{
			$table->id();
			$table->bigInteger('user_id')->nullable();
			$table->text('about_me')->nullable();
			$table->boolean('teaching_approach')->nullable();
			$table->text('address')->nullable();
			$table->integer('country_id')->nullable();
			$table->integer('current_occupation')->nullable();
			$table->boolean('receive_newsletter')->nullable();
			$table->boolean('bidding_notification')->default(0)->nullable();
			$table->string('point_of_contact', 500)->nullable();
			$table->string('name', 500)->nullable();
			$table->string('email', 250)->nullable();
			$table->string('position', 250)->nullable();
			$table->string('accr', 500)->nullable();
			$table->date('dob')->nullable();
			$table->boolean('gender')->nullable()->comment('1-Female, 2-Male ,3-Other , 4- I\'d rather not say');
			$table->string('website_url', 500)->nullable();
			$table->integer('job_industry')->nullable();
			$table->string('phone_number', 200)->nullable();
			$table->boolean('personal_info_privacy')->nullable()->comment('1-only me, 0-public');
			$table->string('twitter', 250)->nullable();
			$table->string('facebook', 250)->nullable();
			$table->string('linkedin', 250)->nullable();
			$table->string('instagram', 250)->nullable();
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
		Schema::dropIfExists('training_centers');
	}

}
