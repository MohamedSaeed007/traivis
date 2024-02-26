<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationsTable extends Migration
{
    /**
     * 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->text('certificate_details')->nullable();
            $table->tinyInteger('approved')->default(0); 
            $table->tinyInteger('waiting')->default(0);
            $table->integer('created_by'); // user who create a certification
            $table->integer('student_id'); // user who issue for 
            $table->integer('course_id');
            $table->integer('business_id');
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
        Schema::dropIfExists('certifications');
    }
}
