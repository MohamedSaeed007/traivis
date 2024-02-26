<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyIndividualRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_individual_requests', function(Blueprint $table)
		{
			$table->id();
			$table->integer('company_user_id');
			$table->integer('individual_user_id');
			$table->integer('request_status')->default(0)->comment('0=pending , 2=accepted,1=rejected');
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
		Schema::dropIfExists('company_individual_requests');
	}

}
