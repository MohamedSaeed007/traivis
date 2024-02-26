<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->index('title');
            $table->index('slug');
            $table->index('post_url');
            $table->index('type');
            $table->index('status');
            $table->index('blog_header');
            $table->index('blog_footer');
            $table->fullText(['overview']);
            $table->fullText(['post_content']);
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropIndex(['title']);
            $table->dropIndex(['slug']);
            $table->dropIndex(['post_url']);
            $table->dropIndex(['type']);
            $table->dropIndex(['status']);
            $table->dropIndex(['blog_header']);
            $table->dropIndex(['blog_footer']);
            $table->dropIndex(['overview']);
            $table->dropIndex(['post_content']);
        });
    }
};
