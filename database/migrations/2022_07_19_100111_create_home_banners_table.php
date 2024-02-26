<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('home_banners', function(Blueprint $table)
		{
			$table->id();
			$table->integer('page_id')->nullable();
			$table->text('short_desc_en')->nullable();
			$table->text('short_desc_ar')->nullable();
			$table->string('title_en', 250)->nullable();
			$table->string('title_ar', 200)->nullable();
			$table->text('content_en')->nullable();
			$table->text('content_ar')->nullable();
			$table->string('slug', 250)->nullable();
			$table->string('logo', 250)->nullable();
			$table->boolean('status')->default(0)->comment('0-deactivated. 1- Activated');
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
		Schema::dropIfExists('home_banners');
	}

}
