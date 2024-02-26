<?php

use App\Models\Business;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reward_posts', function (Blueprint $table) {
            $table->id();
            $table->string('reward_key')->nullable();
            $table->string('reward_post')->nullable();
            $table->string('reward_video')->nullable();
            $table->foreignIdFor(Business::class)->nullable();
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
        Schema::dropIfExists('reward_posts');
    }
}
