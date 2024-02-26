<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BranchEnterpriseRequiredCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_enterprise_required_course', function(Blueprint $table)
		{
            $table->id();
            $table->unsignedBigInteger('branch_id');
            $table->foreign('branch_id', 'bran_id')
            ->references('id')->on('branches')->cascadeOnDelete();

            $table->unsignedBigInteger('enterprise_required_course_id');
            $table->foreign('enterprise_required_course_id', 'ercbr_id')
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
