<?php

use App\Models\Business;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('post_url')->nullable(); // may be video or image will add in V2
            $table->text('overview')->nullable();
            $table->longText('post_content')->nullable();
            $table->integer('feature_image')->nullable(); //deprecated
            $table->foreignId('user_id')->constrained();
            $table->foreignIdFor(Business::class)->nullable();
            $table->string('type', 20)->nullable();
            $table->string('status', 20)->nullable();
            $table->string('blog_header')->nullable();
            $table->string('blog_footer')->nullable();
            $table->foreignIdFor(\App\Models\Course::class)->nullable()->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('posts');
    }
}
