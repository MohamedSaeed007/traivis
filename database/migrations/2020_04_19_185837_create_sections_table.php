<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id')->nullable();
            $table->string('section_name')->nullable();
            $table->integer('section_type')->nullable()->comment('1=>face_to_face,2=>recorded ,3=>live');
            $table->timestamp('unlock_date')->nullable();
            $table->tinyInteger('unlock_days')->nullable();
            $table->tinyInteger('sort_order')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
