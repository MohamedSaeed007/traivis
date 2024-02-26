<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVimeoVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vimeo_videos', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('title', 500)->nullable();
			$table->string('code', 500)->nullable();
			$table->boolean('status')->nullable()->default(1)->comment('0-deleted,1-publish,2-draft,3-blocked');
			$table->integer('created_by')->nullable();
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
		Schema::dropIfExists('vimeo_videos');
	}

}
