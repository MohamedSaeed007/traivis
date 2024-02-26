<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyPurchaseTemporaryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_purchase_temporary', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('company_course_id')->nullable();
			$table->integer('purchase_course_id')->nullable();
			$table->string('assigned_employees', 500)->nullable();
			$table->float('unit_price', 10, 0)->nullable();
			$table->integer('course_quantity')->nullable();
			$table->boolean('status')->nullable()->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('company_purchase_temporary');
	}

}
