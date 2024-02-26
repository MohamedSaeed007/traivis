<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_work_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('employer_name')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('industry')->nullable();
            $table->string('position')->nullable();
            $table->string('experience')->nullable();
            $table->string('location')->nullable();
            $table->string('url')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
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
        Schema::dropIfExists('business_work_experiences');
    }
}
