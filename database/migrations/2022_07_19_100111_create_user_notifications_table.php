<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNotificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_notifications', function(Blueprint $table)
		{
			$table->id();
			$table->integer('notifiable_user_id');
			$table->text('notification');
			$table->integer('is_read')->default(0)->comment('0-not read,1-read');
			$table->integer('model_id')->nullable();
			$table->string('model', 150);
			$table->integer('snooze_interval')->default(0);
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
		Schema::dropIfExists('user_notifications');
	}

}
