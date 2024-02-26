<?php

use App\Models\Course;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Course::class)->constrained()->cascadeOnDelete();
            $table->string('title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('publish_status')->nullable(); //draft,published
            $table->text('description')->nullable();
            $table->text('benefits')->nullable();
            $table->text('requirements')->nullable();
            $table->text('cert_accr')->nullable();
            $table->decimal('price', 16)->nullable(); // remove in V2
            $table->decimal('sale_price', 16)->nullable();
            $table->string('course_level', 250)->nullable();
            $table->integer('seats')->default(0);
            $table->longText('review_feedback')->nullable();
            $table->integer('version')->default(1);
            $table->integer('parent_id')->nullable();
            $table->boolean('is_clone')->default(0);
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
        Schema::dropIfExists('course_details');
    }
}