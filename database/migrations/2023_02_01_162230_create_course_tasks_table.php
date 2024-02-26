<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task_name')->nullable();
            $table->string('task_desc')->nullable();
            $table->dateTime('target_date')->nullable();
            $table->integer('number_of_days')->nullable();
            $table->string('task_status')->nullable();
            $table->integer('institute_id')->nullable();
            $table->integer('instructor_id')->nullable();
            $table->foreignIdFor(\App\Models\Course::class)->constrained()->cascadeOnDelete()
                ->cascadeOnUpdate();
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
        Schema::dropIfExists('course_tasks');
    }
}
