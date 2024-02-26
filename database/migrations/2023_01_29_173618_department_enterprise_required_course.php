<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DepartmentEnterpriseRequiredCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_enterprise_required_course', function(Blueprint $table)
		{
            $table->id();
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id', 'dept_id')
            ->references('id')->on('departments')->cascadeOnDelete();

            $table->unsignedBigInteger('enterprise_required_course_id');
            $table->foreign('enterprise_required_course_id', 'ercd_id')
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
