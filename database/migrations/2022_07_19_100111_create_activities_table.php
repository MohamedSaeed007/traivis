<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function(Blueprint $table)
		{
			$table->id();
			$table->integer('user_id')->unsigned()->index('activities_user_id_foreign');
			$table->text('activity');
			$table->string('ip', 30)->nullable();
			$table->string('type', 50)->nullable();
			$table->integer('course_id')->nullable()->comment('if type will be "purchase"');
			$table->boolean('status')->default(0);
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
		Schema::dropIfExists('activities');
	}

}
