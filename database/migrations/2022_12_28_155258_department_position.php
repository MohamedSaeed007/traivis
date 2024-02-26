<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DepartmentPosition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_position', function(Blueprint $table)
		{

			$table->bigInteger('id', true);
            $table->foreignId('department_id')->constrained()->cascadeOnDelete();
            $table->foreignId('position_id')->constrained()->cascadeOnDelete();
            
            //In department_position_project
            // $table->foreignId('position_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('department_id')->constrained()->cascadeOnDelete();
            // $table->foreignId('project_id')->constrained()->cascadeOnDelete();

            

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
