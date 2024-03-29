<?php

use App\Models\Content;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->longText('text')->nullable();
            $table->text('video_src')->nullable();
            $table->integer('video_time')->nullable();
            $table->string('item_type', 30)->nullable();
            $table
                ->boolean('is_preview')
                ->default(0)
                ->nullable();
            $table
                ->tinyInteger('status')
                ->default(0)
                ->nullable();
            $table
                ->tinyInteger('sort_order')
                ->default(0)
                ->nullable();
            $table->text('options')->nullable();
            $table->boolean('quiz_gradable')->nullable();
            $table->timestamp('unlock_date')->nullable();
            $table->tinyInteger('unlock_days')->nullable();
            $table->string('assignment_file')->nullable();
            $table->string('quiz_file')->nullable();
            $table->morphs('contentable');
            $table->string('publish_status')->default('Draft')->comment('Draft - Ready to publish - Published');
            
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
        Schema::dropIfExists('contents');
    }
}
