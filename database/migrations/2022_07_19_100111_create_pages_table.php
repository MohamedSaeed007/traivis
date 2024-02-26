<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->id();
			$table->string('title_en', 50);
			$table->string('title_ar', 50)->nullable();
			$table->text('content_en');
			$table->text('content_ar')->nullable();
			$table->string('meta_title', 200)->nullable();
			$table->text('meta_key')->nullable();
			$table->text('meta_description')->nullable();
			$table->string('slug', 200)->nullable();
			$table->integer('show_on_menu')->default(0)->nullable();
			$table->integer('status')->default(0);
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
		Schema::dropIfExists('pages');
	}

}
