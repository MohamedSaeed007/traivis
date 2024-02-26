<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('lecture_user', function (Blueprint $table) {
            $table->renameColumn('attendant_minutes', 'attending_minutes');
        });
    }
    //instructor_attending_minutes
    public function down(): void
    {
        Schema::table('lecture_user', function (Blueprint $table) {
            $table->renameColumn('attending_minutes', 'attendant_minutes');
        });
    }
};
