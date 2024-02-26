<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table
                ->foreignId('user_id')
                ->nullable()
                ->change();
            $table
                ->foreignId('business_id')
                ->nullable()
                ->change();
            $table
                ->foreignId('quiz_id')
                ->nullable()
                ->change();
        });
    }

    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table
                ->integer('user_id')
                ->nullable()
                ->change();
            $table
                ->integer('business_id')
                ->nullable()
                ->change();
            $table
                ->integer('quiz_id')
                ->nullable()
                ->change();
        });
    }
};