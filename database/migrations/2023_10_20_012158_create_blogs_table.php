<?php

use App\Models\Business;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title')->nullable();
            $table->longText('blog_content')->nullable();
            $table->string('featured_image_url')->nullable();
            $table->string('blog_url')->nullable(); // may be video
            $table->string('blog_header')->nullable();
            $table->string('blog_footer')->nullable();
            $table->string('status')->default('draft');
            $table->string('slug');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // refer to user who create it
            $table->foreignIdFor(Business::class)->nullable()->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('blogs');
    }
}
