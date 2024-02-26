<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chats', function(Blueprint $table)
		{
			$table->id();
			$table->integer('sender_id')->nullable();
			$table->integer('receiver_id')->nullable();
			$table->text('message')->nullable();
			$table->date('date')->nullable();
			$table->string('time')->nullable();
			$table->integer('is_read')->default(0)->comment('0=not read ,1 =read');
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
		Schema::dropIfExists('chats');
	}

}
