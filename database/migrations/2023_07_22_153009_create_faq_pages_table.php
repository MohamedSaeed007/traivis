<?php

use App\Models\FaqGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('faq_pages', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignIdFor(FaqGroup::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->string('title');
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
        Schema::dropIfExists('faq_pages');
    }
};
