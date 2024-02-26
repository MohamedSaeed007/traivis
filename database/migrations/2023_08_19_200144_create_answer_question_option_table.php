<?php

use App\Models\Answer;
use App\Models\QuestionOption;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('answer_question_option', function (Blueprint $table) {
            $table
                ->foreignIdFor(Answer::class)
                ->constrained()
                ->cascadeOnDelete();
            $table
                ->foreignIdFor(QuestionOption::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->primary(['answer_id', 'question_option_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('answer_question_option');
    }
};
