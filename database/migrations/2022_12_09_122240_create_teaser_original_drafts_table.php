<?php

use App\Models\Business;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeaserOriginalDraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaser_original_drafts', function (Blueprint $table) {
            $table->id();
            $table->string('post_txt')->nullable();
            $table->string('post_media')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id', 'course_id_fk_502337787667058')->references('id')->on('courses');
            $table->foreignIdFor(Business::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('teaser_original_drafts');
    }
}
