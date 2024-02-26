<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkforceProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('workforce_projects', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('user_id')->nullable();
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
		Schema::dropIfExists('workforce_projects');
	}

}
