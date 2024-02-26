<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLiveSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('live_schedules', function(Blueprint $table)
		{
			$table->id();
			$table->integer('section_id')->nullable();
			$table->integer('created_by')->nullable();
			$table->integer('seat_available');
			$table->integer('max_num_of_participate');
			$table->text('zoom_link');
			$table->dateTime('event_date_time');
			$table->dateTime('expiry_date_time');
			$table->text('team_link')->nullable();
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
		Schema::dropIfExists('live_schedules');
	}

}
