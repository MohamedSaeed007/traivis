<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coupon_code', function(Blueprint $table)
		{
			$table->id();
			$table->string('title', 200)->nullable();
			$table->boolean('coupon_type')->default(0)->comment('0 - general,
1 - specific courses');
			$table->text('courses')->nullable();
			$table->string('coupon_code', 150)->nullable();
			$table->decimal('discount_amount', 10)->nullable();
			$table->date('valid_from')->nullable();
			$table->date('valid_to')->nullable();
			$table->text('description')->nullable();
			$table->boolean('used_status')->default(0);
			$table->boolean('active_status')->default(1);
			$table->integer('bidding_id')->nullable();
			$table->timestamps();
			$table->integer('user_id')->nullable();
			$table->integer('is_accept')->nullable()->comment('1=accept,2=reject');
			$table->integer('accepatnce_status')->nullable();
			$table->string('acceptance_price')->nullable();
			$table->text('message')->nullable();
			$table->string('document')->nullable();
			$table->integer('is_genarate_coupon')->nullable();
			$table->integer('is_company_aprove')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('coupon_code');
	}

}
