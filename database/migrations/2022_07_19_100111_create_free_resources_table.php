<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeResourcesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('free_resources', function(Blueprint $table)
		{
			$table->id();
			$table->string('title_en', 200)->nullable();
			$table->string('title_ar', 200)->nullable();
			$table->text('short_desc_en')->nullable();
			$table->text('short_desc_ar')->nullable();
			$table->text('description_en')->nullable();
			$table->text('description_ar')->nullable();
			$table->integer('parent_category_id')->nullable();
			$table->integer('second_category_id')->nullable();
			$table->string('img', 200)->nullable();
			$table->string('document', 200)->nullable();
			$table->string('doc_type', 100)->nullable();
			$table->integer('posted_by')->nullable();
			$table->boolean('status')->default(2);
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
		Schema::dropIfExists('free_resources');
	}

}
