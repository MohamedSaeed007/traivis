<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateUploadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('certificate_uploads', function(Blueprint $table)
		{
			$table->id();
			$table->integer('user_id')->nullable();
			$table->integer('course_id')->nullable();
			$table->string('certificate');
			$table->integer('status')->default(1);
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
		Schema::dropIfExists('certificate_uploads');
	}

}
