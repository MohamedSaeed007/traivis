<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
			$table->integer('enterprise_id')->nullable(); // business type enterprise id
			$table->integer('educate_id')->nullable();  // business type education id 
            $table->integer('course_id')->nullable(); // course for implement
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->boolean('accept')->default(0); // accepted true 1 or  not accepted false 0
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenders');
    }
}
