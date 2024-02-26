<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('group_title')->nullable(); // online TeamViewer etc
            $table->string('group_description')->nullable();
            $table->string('group_logo')->nullable();
            $table->string('group_background_image')->nullable();
            $table->string('group_type')->default('general'); // or special
            $table->tinyInteger('approved')->default(0);
            $table->string('public_id'); 
            $table->integer('created_by'); // refer to user who create it
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
        Schema::dropIfExists('groups');
    }
}
