<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('packages', function(Blueprint $table)
		{
			$table->id();
			$table->text('title');
			$table->integer('month');
			$table->decimal('regular_price', 15);
			$table->decimal('sale_price', 15);
			$table->text('description');
			$table->integer('status')->default(0)->comment('1=active,0=inactive');
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
		Schema::dropIfExists('packages');
	}

}
