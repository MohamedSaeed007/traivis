<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndustriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('industries', function(Blueprint $table)
		{
			$table->id();
			$table->string('en_name', 250)->nullable();
			$table->string('ar_name', 200)->nullable();
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
		Schema::dropIfExists('industries');
	}

}
