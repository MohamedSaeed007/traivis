<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('lecture_user', function (Blueprint $table) {
            $table
                ->unsignedBigInteger('attendant_minutes')
                ->default(0)
                ->after('user_id');
        });
    }

    public function down(): void
    {
        Schema::table('lecture_user', function (Blueprint $table) {
            $table->dropColumn('attendant_minutes');
        });
    }
};
