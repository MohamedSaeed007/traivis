<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserKarmaShares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_karma_shares', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reached')->default(0);
            $table->unsignedBigInteger('register')->default(0);
            $table->unsignedBigInteger('enrolled')->default(0);
            $table->decimal('earnings')->default(0);

            $table->foreignId('course_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('user_karma_shares');
    }
}
