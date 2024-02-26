<?php

use App\Models\Course;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('content_lecture')->nullable();
            $table->string('url_lecture')->nullable();
            $table->tinyInteger('published')->default(0);
            $table->bigInteger('duration')->default(0);
            //            $table->foreignId('category_id')->constrained();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->integer('instructor_by'); // refer to user who create lecture
            $table->integer('drip_days')->nullable();
            $table->dateTime('drip_datetime')->nullable();
            $table->string('lecture_file')->nullable();
            //            $table->unsignedBigInteger('course_id')->nullable();
            //            $table->foreign('course_id', 'course_id_fk_512239347667058')->references('id')->on('courses');

            $table->foreignIdFor(Course::class);
            $table
                ->integer('delivery_mode')
                ->nullable()
                ->comment('1=>face_to_face,2=>recorded ,3=>live');

            $table->string('meeting_id')->nullable();
            $table->longText('meeting_response')->nullable();
            $table->boolean('mute_all_students')->default(false);

            $table->unsignedBigInteger('section_id');
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
        Schema::dropIfExists('lectures');
    }
}
