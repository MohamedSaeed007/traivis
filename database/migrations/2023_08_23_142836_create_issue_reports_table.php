<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('issue_reports', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('title');
            $table->text('description');
            $table->string('severity');
            $table->string('status');
            $table
                ->foreignIdFor(User::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('issue_reports');
    }
};
