<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('occupation', function(Blueprint $table)
		{
			$table->id();
			$table->string('en_occupation', 250)->nullable();
			$table->string('ar_occupation', 200)->nullable();
			$table->string('slug', 250)->nullable();
			$table->boolean('status')->default(0)->comment('0 - deactivated. 1 - Active');
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
		Schema::dropIfExists('occupation');
	}

}
