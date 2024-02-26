<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('issue_reports', function (Blueprint $table) {
            $table
                ->boolean('has_payload')
                ->after('debug_info')
                ->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('issue_reports', function (Blueprint $table) {
            $table->dropColumn('has_payload');
        });
    }
};
