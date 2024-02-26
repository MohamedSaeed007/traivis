<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserKarmaId extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('users', 'user_karma_share_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->unsignedBigInteger('user_karma_share_id')->default(0);
            });
        }
    }


    public function down()
    {
        if (Schema::hasColumn('users', 'user_karma_share_id')) {
            Schema::dropColumns('users','user_karma_share_id');
        }
    }
}
