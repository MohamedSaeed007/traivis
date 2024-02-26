<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTaskCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_task_comments', function (Blueprint $table) {
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
            $table->dateTime('comment_date')->nullable();
            $table->longText('comment')->nullable();

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
        Schema::dropIfExists('course_task_comments');
    }
}
