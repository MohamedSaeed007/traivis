<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Quiz::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Question::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\QuestionOption::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Attempt::class)->nullable()->constrained()->cascadeOnDelete();
            $table->text('answer')->nullable();
            $table->string('q_type', 20)->nullable();     //Question Type
            $table->decimal('q_score', 5, 1)->nullable(); //Question Score
            $table->decimal('r_score', 5, 1)->nullable(); //Received Score
            $table->boolean('is_correct')->default(0)->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('answers');
    }
}
