<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnterpriseRequiredCoursePosition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise_required_course_position', function(Blueprint $table)
		{
            $table->id();
          

            $table->unsignedBigInteger('position_id');
            $table->foreign('position_id', 'pos_id')
            ->references('id')->on('positions');

            $table->unsignedBigInteger('enterprise_required_course_id');
            $table->foreign('enterprise_required_course_id', 'ercp_id')
            ->references('id')->on('company_required_courses');
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
        //
    }
}
