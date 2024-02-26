<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BranchEnterpriseWorkforce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       

        Schema::create('branch_enterprise_workforce', function(Blueprint $table)
		{

			$table->bigInteger('id', true);
            $table->foreignId('enterprise_workforce_id')->constrained('company_workforce');
            $table->foreignId('branch_id')->constrained();
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
