<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserReferersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_referers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_referer')->constrained('users');
            $table->foreignId('user_id')->constrained('users');
            $table->integer('percentage');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('total_taken')->default(0);
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
        Schema::dropIfExists('user_referers');
    }
}
