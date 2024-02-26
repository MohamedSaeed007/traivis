<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('individuals', function(Blueprint $table)
		{
			$table->id();
			$table->bigInteger('user_id')->nullable();
			$table->boolean('highest_degree_id')->nullable();
			$table->string('university', 200)->nullable();
			$table->integer('major_id')->nullable();
			$table->boolean('employment_status')->nullable();
			$table->boolean('new_job_preference')->nullable()->default(0)->comment('0-not looking for 
new job, 1-yes');
			$table->string('career_goal', 1000)->nullable();
			$table->boolean('goal_privacy')->nullable()->default(0)->comment('1-only me, 0-public');
			$table->string('self_intro', 1000)->nullable();
			$table->string('living_location', 500)->nullable();
			$table->date('dob')->nullable();
			$table->boolean('gender')->nullable()->comment('1-Female, 2-Male ,3-Other , 4- I\'d rather not say');
			$table->string('website_url', 500)->nullable();
			$table->string('phone_number', 200)->nullable();
			$table->boolean('personal_info_privacy')->nullable()->comment('1-only me, 0-public');
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
		Schema::dropIfExists('individuals');
	}

}
