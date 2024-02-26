<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_projects', function(Blueprint $table)
		{

			//todo:this table will be deleted in v2
			//$table->bigInteger('id', true);
			$table->id();
			$table->integer('company_id');
			$table->string('en_project', 500)->nullable();
			$table->string('ar_project', 500)->nullable();
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
		Schema::dropIfExists('company_projects');
	}

}
