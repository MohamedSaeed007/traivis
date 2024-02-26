<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('residence')->nullable();
            $table->string('from_where')->nullable();
            $table->text('status')->nullable(); //single married
            $table->string('gender')->nullable(); //male female
            $table->text('facebook_account')->nullable();
            $table->string('instagram_account')->nullable();
            $table->string('github_account')->nullable();
            $table->string('twitter_account')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_information');
    }
}
