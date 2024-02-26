<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequiredCourseProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('required_course_projects', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('course_id')->nullable();
			$table->integer('project_id')->nullable();
			$table->boolean('status')->nullable()->default(1);
			$table->bigInteger('created_by')->nullable();
			$table->timestamps();
			$table->bigInteger('updated_by')->nullable();
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
		Schema::dropIfExists('required_course_projects');
	}

}
