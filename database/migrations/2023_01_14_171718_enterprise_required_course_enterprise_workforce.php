<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnterpriseRequiredCourseEnterpriseWorkforce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprise_required_course_enterprise_workforce', function(Blueprint $table)
		{

			$table->bigInteger('id', true);
            
            $table->unsignedBigInteger('enterprise_workforce_id');
            $table->foreign('enterprise_workforce_id', 'ef_id')
            ->references('id')->on('company_workforce');

            $table->unsignedBigInteger('enterprise_required_course_id');
            $table->foreign('enterprise_required_course_id', 'crc_id')
            ->references('id')->on('company_required_courses');

            // $table->foreignId('enterprise_workforce_id')->constrained('company_workforce');
            // $table->foreignId('company_required_course_id')->constrained();
            $table->date('issue_date')->nullable();
            $table->date('upcoming_date')->nullable();
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
        //
    }
}
