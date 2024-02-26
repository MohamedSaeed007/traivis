<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttemptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attempts', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->nullable();
            $table->integer('quiz_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('reviewer_id')->nullable();
            $table->integer('questions_limit')->nullable();
            $table->integer('total_answered')->nullable();
            $table->decimal('total_scores', 5, 1)->nullable();
            $table->decimal('earned_score', 5, 1)->nullable();
            $table->integer('earned_percentage')->nullable();
            $table->integer('passing_percent')->nullable();
            $table->string('status')->nullable();
            $table->boolean('quiz_gradable')->default(0)->nullable();
            $table->boolean('is_reviewed')->default(0)->nullable();
            $table->dateTime('ended_at')->nullable();
            $table->dateTime('reviewed_at')->nullable();
            $table->boolean('passed')->nullable();
            $table->bigInteger('end_time')->nullable();
            $table->json('questions_list')->nullable();
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
        Schema::dropIfExists('attempts');
    }
}
