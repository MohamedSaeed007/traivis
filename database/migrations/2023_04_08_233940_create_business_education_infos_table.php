<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessEducationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_education_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('major')->nullable();
            $table->string('level')->nullable();
            $table->string('location')->nullable();
            $table->foreignId('business_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('business_education_infos');
    }
}
