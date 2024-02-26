<?php

use App\Models\FaqPage;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('faq_sections', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignIdFor(FaqPage::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('question');
            $table->text('answer');
            $table
                ->tinyInteger('sort_order')
                ->default(0)
                ->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('faq_sections');
    }
};
