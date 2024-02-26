<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKarmaEarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karma_earnings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('karma_user_id');
            $table->unsignedBigInteger('student_user_id');
            $table->unsignedBigInteger('course_id');

            $table->decimal('earnings');
            $table->unsignedTinyInteger('earning_type')->default(1);
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
        Schema::dropIfExists('karma_earnings');
    }
}
