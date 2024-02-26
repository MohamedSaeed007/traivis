<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('post_views', function (Blueprint $table) {
            $doctrineTable = Schema::getConnection()
                ->getDoctrineSchemaManager()
                ->introspectTable('post_views');
            foreach ($doctrineTable->getForeignKeys() as $fkId => $fk) {
                if ($fk->getForeignTableName() == 'posts') {
                    $table->dropForeign($fkId);
                }
            }

            $table
                ->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('post_views', function (Blueprint $table) {});
    }
};
