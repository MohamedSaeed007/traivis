<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards', function (Blueprint $table) {
            $table->id();
            $table->string('reward_name')->nullable();
            $table->string('reward_provider')->nullable();
            $table->date('reward_date');
            $table->string('reward_related_links')->nullable();
            $table->morphs('rewardable');
            $table->text('description')->nullable();
            $table->string('status')->default('0')->nullable();
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
        Schema::dropIfExists('rewards');
    }
}
