<?php

use App\Models\QuestionOption;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('answers', function (Blueprint $table) {
            if (Schema::hasColumn('answers', 'question_option_id')) {
                $table->dropConstrainedForeignId('question_option_id');
            }
        });
    }

    public function down(): void
    {
        Schema::table('answers', function (Blueprint $table) {
            if (!Schema::hasColumn('answers', 'question_option_id')) {
                $table
                    ->foreignIdFor(QuestionOption::class)
                    ->nullable()
                    ->constrained()
                    ->cascadeOnDelete();
            }
        });
    }
};
