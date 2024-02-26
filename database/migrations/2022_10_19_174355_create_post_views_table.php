<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_views', function (Blueprint $table) {
            $table->id();
            $table->string('ip')->nullable();
            $table->string('type')->nullable()->comment('pc - mobile');
            $table->string('device')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_101020213')->references('id')->on('users');
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id', 'post_fk_4990205467')->references('id')->on('posts');
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
        Schema::dropIfExists('post_views');
    }
}
