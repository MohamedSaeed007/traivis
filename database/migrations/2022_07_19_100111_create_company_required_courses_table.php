<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyRequiredCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_required_courses', function(Blueprint $table)
		{
			$table->id();
			$table->integer('company_id')->nullable();
			$table->string('en_course_name')->nullable();
			$table->string('ar_course_name')->nullable();
			$table->boolean('type')->comment('1-internal,2-external');
			$table->bigInteger('purchase_course_id')->default(0)->nullable();
			$table->integer('validity')->nullable()->comment('in months');
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
		Schema::dropIfExists('company_required_courses');
	}

}
