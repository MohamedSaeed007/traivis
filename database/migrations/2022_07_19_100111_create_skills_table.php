<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skills', function(Blueprint $table)
		{
			$table->id();
			$table->string('en_skill', 200)->nullable();
			$table->string('ar_skill', 200)->nullable();
			$table->boolean('status')->default(1)->comment('0 - deactivated. 1 - Active');
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
		Schema::dropIfExists('skills');
	}

}
