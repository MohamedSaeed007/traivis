<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseAssignTrainersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_assign_trainers', function(Blueprint $table)
		{
			$table->id();
			$table->integer('course_id');
			$table->integer('status')->comment('1=rejected , 2=accept	');
			$table->integer('trainer_user_id');
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
		Schema::dropIfExists('course_assign_trainers');
	}

}
