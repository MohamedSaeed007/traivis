<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DepartmentProjectEnterpriseRequiredCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_project_enterprise_required_course', function(Blueprint $table)
		{
            $table->id();
            $table->unsignedBigInteger('department_project_id');
            $table->foreign('department_project_id', 'dp_id')
            ->references('id')->on('department_project')->cascadeOnDelete();

            $table->unsignedBigInteger('enterprise_required_course_id');
            $table->foreign('enterprise_required_course_id', 'ercdp_id')
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
