<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractorEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractor_employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contractor_id')->constrained('users');
            $table->foreignId('employee_id')->constrained('users');
            $table->foreignId('business_id')->constrained('businesses');
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
        Schema::dropIfExists('contractor_employees');
    }
}
