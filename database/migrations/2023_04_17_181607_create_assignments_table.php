<?php

use App\Models\Course;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('text')->nullable();
            $table
                ->foreignIdFor(Course::class)
                ->nullable()
                ->constrained()
                ->cascadeOnDelete();
            $table->text('options')->nullable();
            $table->string('assignment_file')->nullable();
            //            $table->unsignedBigInteger('section_id');
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
        Schema::dropIfExists('assignments');
    }
}
