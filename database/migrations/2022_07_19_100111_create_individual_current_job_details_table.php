<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualCurrentJobDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('individual_current_job_details', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('user_id')->nullable();
			$table->integer('country_id')->nullable();
			$table->integer('industry_id')->nullable();
			$table->string('employer', 500)->nullable();
			$table->integer('employment_status')->nullable();
			$table->integer('occupation_id')->nullable();
			$table->integer('experience_level_id')->nullable();
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
		Schema::dropIfExists('individual_current_job_details');
	}

}
