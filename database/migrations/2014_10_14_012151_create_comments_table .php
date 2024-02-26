<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            // $table->id();
            // $table->longText('comment')->nullable();
            // $table->integer('commentable_id')->nullable();
            // $table->string('commentable_type')->nullable();
            // $table->foreignId('parent_id')->nullable()->constrained('comments')->cascadeOnDelete();
            // $table->foreignId('user_id')->constrained(); // refer to user who create it
            // $table->timestamps();
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('parent_id')->nullable()->constrained('comments')->cascadeOnDelete();
            $table->longText('comment');
            $table->morphs('commentable');
            $table->softDeletes();
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
        Schema::dropIfExists('comments');
    }
}
