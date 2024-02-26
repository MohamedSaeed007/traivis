<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTaskCompletionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_task_completions', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignIdFor(\App\Models\CourseTask::class)
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table
                ->foreignIdFor(\App\Models\Business::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table
                ->foreignIdFor(\App\Models\User::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->dateTime('complete_request_date')->nullable();
            $table->longText('note')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('course_task_completions');
    }
}
