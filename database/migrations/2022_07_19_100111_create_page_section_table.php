<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('page_section', function(Blueprint $table)
		{
			$table->id();
			$table->integer('page_id')->nullable();
			$table->integer('section_id')->nullable();
			$table->text('content_en')->nullable();
			$table->text('content_ar')->nullable();
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
		Schema::dropIfExists('page_section');
	}

}
