<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BranchProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_project', function(Blueprint $table)
		{

			$table->bigInteger('id', true);
            $table->foreignId('branch_id')->constrained();
            $table->foreignId('project_id')->constrained();
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
