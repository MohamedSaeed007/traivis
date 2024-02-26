<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_profile_views', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->nullable();
            $table
                ->string('type')
                ->nullable()
                ->comment('pc - mobile');
            $table->string('device')->nullable();
            $table
                ->foreignIdFor(User::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table
                ->foreignId('profile_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_profile_views');
    }
};
