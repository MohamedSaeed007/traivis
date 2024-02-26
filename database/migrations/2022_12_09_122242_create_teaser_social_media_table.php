<?php

use App\Models\SocialMedia;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeaserSocialMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaser_social_media', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('post_id')->nullable();
            $table->foreign('post_id', 'post_id_fk_500237787667058')->references('id')->on('teaser_original_drafts')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreignIdFor(SocialMedia::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->string('page_id')->nullable();
            $table->longText('facebook_page_access_token')->nullable();
            $table->string('board_id')->nullable();
            $table->string('board_section_id')->nullable();
            //            $table->unsignedBigInteger('social_media_id')->nullable();
            //            $table->foreign('social_media_id', 'social_media_id_fk_512237787667058')->references('id')->on('social_media')
            //                ->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('teaser_social_media');
    }
}
