<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_connections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_user_id')->nullable();
            $table->foreign('from_user_id', 'from_user_fk_5772247667658')->references('id')->on('users');
            $table->unsignedBigInteger('to_user_id')->nullable();
            $table->foreign('to_user_id', 'to_user_fk_520039347667658')->references('id')->on('users');
            $table->integer('status')->default('0');
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
        Schema::dropIfExists('user_connections');
    }
}
