<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialPostDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_post_dates', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('social_post_id')->nullable();
            $table->foreign('social_post_id', 'social_post_id_fk_590237787667058')->references('id')->on('teaser_social_media')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->dateTime('publish_date')->nullable();

            $table->string('status')->nullable()->default('in_progress');

            $table->string('response_code')->nullable();

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
        Schema::dropIfExists('social_post_dates');
    }
}
