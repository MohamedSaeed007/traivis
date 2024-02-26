<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiringTrainerTable extends Migration
{
    public function up()
    {
        Schema::create('hiring_trainer', function (Blueprint $table) {
            $table->id();
			$table->integer('business_id')->nullable(); // business type education id 
			$table->integer('freelance_id')->nullable(); // user as freelancer
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hiringtraner');
    }
}
