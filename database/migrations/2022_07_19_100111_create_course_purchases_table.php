<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursePurchasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_purchases', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('purchase_code', 500)->nullable();
			$table->bigInteger('course_id')->nullable();
			$table->integer('purchased_course_id')->nullable();
			$table->bigInteger('purchased_by_id')->nullable();
			$table->boolean('purchased_by_type')->nullable()->comment('3-company,6-employee');
			$table->float('unit_purchase_price', 10, 0)->nullable();
			$table->float('total_price', 10, 0)->nullable();
			$table->integer('quantity')->nullable();
			$table->boolean('institute_notification')->default(0)->comment('0-unread. 1- read');
			$table->timestamps();
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
		Schema::dropIfExists('course_purchases');
	}

}
