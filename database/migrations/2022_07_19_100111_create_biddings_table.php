<?php

use App\Models\Business;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiddingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('biddings', function(Blueprint $table)
		{
            $table->id();
//			$table->foreignIdFor(Business::class)->constrained('business')->cascadeOnDelete();
            $table->foreignIdFor(Business::class);
            $table->integer('course_id')->nullable();
            $table->string('name'); //Not tender name
            $table->integer('category_id')->nullable();//will be deleted with v2
            $table->integer('company_id')->nullable();
            $table->string('language_code')->default('en');
            //$table->integer('trainees')->default(1);//use number_of_employees field
            $table->integer('number_of_employees')->nullable();// will be renamed to trainees
            $table->float('bidding_price', 10, 0)->nullable();
            $table->float('voucher', 10, 0)->nullable();
            $table->float('acceptance_price', 10, 0)->nullable();
            $table->boolean('status')->default(0);
            $table->string('privacy')->default('public');
            $table->boolean('read_status')->default(0);
            $table->boolean('accepatnce_status')->default(0);
            $table->timestamps();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            // $table->date('deleted_at')->nullable(); //will be deleted in v2
            $table->text('employee_id')->nullable();
            $table->integer('required_course_id')->nullable();
            $table->decimal('actual_price', 15, 3);
            $table->text('message')->nullable();
            $table->integer('is_genarate_coupon')->nullable()->default(0)->comment('1=>genarate ,0=>not genarate');
            $table->date('deadline')->nullable();
            $table->string('document')->nullable();
            $table->integer('p_m_request')->default(0)->comment('p_m_request');
            $table->text('aditional_info')->nullable();
            $table->string('course_start_date')->nullable();
            $table->date('bidding_start_date')->nullable();
            $table->date('bidding_end_date')->nullable();
            // $table->timestamp('biixvxd');
            $table->string('request_document')->nullable();
            //$table->foreignIdFor(Business::class, 'hired_business_id' )->constrained('business')->nullable();
            $table->unsignedBigInteger('hired_business_id')->nullable();
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
		Schema::dropIfExists('biddings');
	}

}
