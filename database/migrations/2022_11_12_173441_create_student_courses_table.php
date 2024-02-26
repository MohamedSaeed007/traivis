<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id', 'course_id_fk_522239347667658')->references('id')->on('courses');

            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id', 'student_id_fk_512239347667058')->references('id')->on('students');


            $table->integer('status')->default('1');

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
        Schema::dropIfExists('student_courses');
    }
}
