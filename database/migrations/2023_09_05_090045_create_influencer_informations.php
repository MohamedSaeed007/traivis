<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfluencerInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('influencer_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('snap_chat_url')->nullable();
            $table->string('tiktok_url')->nullable();

            $table->unsignedBigInteger('facebook_followers')->nullable();
            $table->unsignedBigInteger('instagram_followers')->nullable();
            $table->unsignedBigInteger('twitter_followers')->nullable();
            $table->unsignedBigInteger('youtube_followers')->nullable();
            $table->unsignedBigInteger('snap_chat_followers')->nullable();
            $table->unsignedBigInteger('tiktok_followers')->nullable();

            $table->longText('message');
            $table->unsignedTinyInteger('status')->default(0);

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
        Schema::dropIfExists('influencer_information');
    }

}
