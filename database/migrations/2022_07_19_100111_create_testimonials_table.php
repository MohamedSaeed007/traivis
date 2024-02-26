<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('testimonials', function(Blueprint $table)
		{
			$table->id();
			$table->string('title_en', 200)->nullable();
			$table->string('title_ar', 200)->nullable();
			$table->string('position_en', 200)->nullable();
			$table->string('position_ar', 200)->nullable();
			$table->string('img', 200);
			$table->text('description_en')->nullable();
			$table->text('description_ar')->nullable();
			$table->boolean('status')->default(1);
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
		Schema::dropIfExists('testimonials');
	}

}
