<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequiredCourseWorkforcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('required_course_workforces', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('course_id')->nullable();
			$table->integer('department_id')->nullable();
			$table->integer('course_purchase_id')->nullable();
			$table->bigInteger('user_id')->nullable();
			$table->string('certificate', 500)->nullable();
			$table->date('issue_date')->nullable();
			$table->date('expiry_date')->nullable();
			$table->boolean('certificate_status')->nullable()->default(0)->comment('0-deleted,1-active/admin approved,2-inactive, 3-expired');
			$table->boolean('upload_status')->comment('1-uploaded, 0-not uploaded');
			$table->boolean('status')->nullable()->default(1);
			$table->date('start_date')->nullable();
			$table->date('end_date')->nullable();
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
		Schema::dropIfExists('required_course_workforces');
	}

}
