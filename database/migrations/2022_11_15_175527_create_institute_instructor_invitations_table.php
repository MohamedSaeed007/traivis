<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstituteInstructorInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_instructor_invitations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id', 'course_id_fk_512239887667058')->references('id')->on('courses');

            $table->unsignedBigInteger('institute_id')->nullable();
            $table->foreign('institute_id', 'institute_id_fk_512237787667058')->references('id')->on('businesses');

            $table->unsignedBigInteger('instructor_id')->nullable();
            $table->foreign('instructor_id', 'instructor_id_fk_512232287667058')->references('id')->on('businesses');

            $table->dateTime('started_at')->nullable();

            $table->dateTime('sent_on')->nullable();

            $table->string('instructor_response')->nullable();

            $table->string('institute_response')->nullable();

            $table->string('status')->nullable();

            $table->string('hours')->nullable();

            $table->string('delivery_mode')->nullable();

            $table->string('agreed_price')->nullable();

            $table->string('agreed_price_currency')->nullable();

            $table->string('institute_price')->nullable();

            $table->string('institute_price_currency')->nullable();

            $table->string('instructor_price')->nullable();

            $table->string('instructor_price_currency')->nullable();

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
        Schema::dropIfExists('institute_instructor_invitations');
    }
}
