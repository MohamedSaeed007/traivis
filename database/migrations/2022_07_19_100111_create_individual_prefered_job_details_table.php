<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualPreferedJobDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('individual_prefered_job_details', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('user_id')->nullable();
			$table->string('location', 500)->nullable();
			$table->integer('industry_id')->nullable();
			$table->integer('occupation_id')->nullable();
			$table->integer('preferred_experience_id')->nullable();
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
		Schema::dropIfExists('individual_prefered_job_details');
	}

}
