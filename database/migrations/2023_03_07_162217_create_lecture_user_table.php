<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectureUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_user', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignIdFor(\App\Models\Lecture::class)
                ->constrained()
                ->cascadeOnDelete();
            $table
                ->foreignIdFor(\App\Models\User::class)
                ->constrained()
                ->cascadeOnDelete();
            $table->boolean('muted_by_instructor')->default(false);
            $table->boolean('muted')->default(false);
            $table->boolean('disallowed')->default(false);
            $table->boolean('upraised')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecture_user');
    }
}
