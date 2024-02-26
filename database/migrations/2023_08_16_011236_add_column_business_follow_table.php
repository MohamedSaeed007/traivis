<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnBusinessFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('business_follow', 'is_blocked')) {
            Schema::table('business_follow', function (Blueprint $table) {
               $table->boolean('is_blocked')->default(0);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('business_follow', 'is_blocked')) {
         Schema::dropColumns('business_follow','is_blocked');
        }
    }
}
