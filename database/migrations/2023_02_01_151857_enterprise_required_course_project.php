<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnterpriseRequiredCourseProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise_required_course_project', function(Blueprint $table)
		{
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id', 'proj_id')
            ->references('id')->on('projects')->cascadeOnDelete();

            $table->unsignedBigInteger('enterprise_required_course_id');
            $table->foreign('enterprise_required_course_id', 'ercpp_id')
            ->references('id')->on('company_required_courses')->cascadeOnDelete();
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
