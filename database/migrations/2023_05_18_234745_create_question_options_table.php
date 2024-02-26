<?php

use App\Models\Question;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_options', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Question::class);
            $table->string('title')->nullable();
            //            $table->text('text')->nullable();
            $table->integer('image_id')->nullable();
            $table
                ->string('d_pref', 20)
                ->default('text')
                ->nullable(); //Display Preference
            $table
                ->boolean('is_correct')
                ->default(0)
                ->nullable();
            $table
                ->tinyInteger('sort_order')
                ->default(0)
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_options');
    }
}