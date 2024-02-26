<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingPlaceInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_place_information', function (Blueprint $table) {
            $table->id();
            $table->string('place_name')->nullable();
            $table->dateTime('from_date')->nullable();
            $table->dateTime('to_date')->nullable();
            $table->string('position_name')->nullable();
            $table->string('working_now')->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('working_place_information');
    }
}
