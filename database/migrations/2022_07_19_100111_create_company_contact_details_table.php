<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyContactDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_contact_details', function(Blueprint $table)
		{
			$table->id();
			$table->integer('company_id')->nullable();
			$table->string('contact_first_name')->nullable();
			$table->string('contact_last_name')->nullable();
			$table->string('position', 200)->nullable();
			$table->boolean('gender')->nullable()->comment('1-Female, 2-Male ,3-Other , 4- I\'d rather not say');
			$table->date('dob')->nullable();
			$table->string('email_id', 250)->nullable();
			$table->string('phone', 30)->nullable();
			$table->boolean('visibility_status')->nullable()->comment('public 1
private 0');
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
		Schema::dropIfExists('company_contact_details');
	}

}
