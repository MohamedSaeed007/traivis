<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessProfessionalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_professional_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->constrained()->cascadeOnDelete();
            $table->boolean('is_freelancer')->default(0);
            $table->boolean('show_email')->default(1);
            $table->boolean('show_phone')->default(1);
            $table->string('industry')->nullable();
            $table->integer('teaching_years')->nullable();
            $table->string('preferred_languages')->nullable();
            $table->string('preferred_subjects')->nullable();
            $table->string('preferred_teaching_mode')->nullable();
            $table->string('teaching_hourly_rate')->nullable();
            $table->string('personal_website')->nullable();
            $table->string('asscoited_link')->nullable();
            $table->string('accerditions')->nullable();
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
        Schema::dropIfExists('business_professional_information');
    }
}
