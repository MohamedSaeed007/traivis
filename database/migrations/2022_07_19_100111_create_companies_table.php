<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->id();
			$table->string('name', 200)->nullable();
			$table->string('en_company_name', 200)->nullable();
			$table->string('ar_company_name', 200)->nullable();
			$table->string('logo', 200)->nullable();
			$table->text('en_about_company')->nullable();
			$table->text('ar_about_company')->nullable();
			$table->string('website', 200)->nullable();
			$table->string('address', 500)->nullable();
			$table->integer('country_id')->nullable();
			$table->decimal('latitude', 12, 9)->nullable();
			$table->decimal('longitude', 12, 9)->nullable();
			$table->boolean('newsletter_status')->nullable()->comment('0-unsuscribe ,1 -subscribe');
			$table->boolean('status')->default(1);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('companies');
	}

}
