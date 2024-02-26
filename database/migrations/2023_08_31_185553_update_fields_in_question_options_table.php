<?php

use App\Models\Question;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('question_options', function (Blueprint $table) {
            $table->foreignIdFor(Question::class)->change();
        });
    }

    public function down(): void
    {
        Schema::table('question_options', function (Blueprint $table) {
            $table
                ->integer('question_id')
                ->nullable()
                ->change();
        });
    }
};
