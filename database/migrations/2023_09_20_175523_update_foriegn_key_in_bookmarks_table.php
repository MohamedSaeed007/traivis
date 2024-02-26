<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('bookmarks', function (Blueprint $table) {
            $table->dropForeign('post_fk_8890205467');
            $table
                ->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('bookmarks', function (Blueprint $table) {
            $table->dropForeign('bookmarks_ibfk_1');
            $table->dropForeign('bookmarks_post_id_foreign');
        });
    }
};
