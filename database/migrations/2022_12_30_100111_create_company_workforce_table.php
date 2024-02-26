<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyWorkforceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_workforce', function(Blueprint $table)
		{
			
			$table->id();
			$table->integer('company_id')->nullable();
			$table->foreignId('user_id')->constrained()->nullable();
			$table->foreignId('position_id')->constrained()->nullable();
			$table->bigInteger('department_id')->nullable();
			$table->integer('project_id')->nullable();
			$table->string('traivis_id')->nullable();
			$table->string('work_id')->nullable();
			$table->boolean('status')->nullable()->comment('0-deleted,1-active,2-pending');
			$table->bigInteger('created_by')->nullable();
			$table->timestamps();
			$table->integer('updated_by')->nullable();
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
		Schema::dropIfExists('company_workforce');
	}

}
