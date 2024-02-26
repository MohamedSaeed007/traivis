<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorTrainersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instructor_trainers', function(Blueprint $table)
		{
			$table->id();
			$table->integer('instructor_user_id');
			$table->integer('trainer_user_id');
			$table->integer('request_status')->default(1)->comment('0=requested , 1=accept ,2=rejected	');
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
		Schema::dropIfExists('instructor_trainers');
	}

}
