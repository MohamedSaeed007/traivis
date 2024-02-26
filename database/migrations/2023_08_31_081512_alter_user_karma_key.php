<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class AlterUserKarmaKey extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('users', 'user_karma_key')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('user_karma_key')->nullable();
            });
        }

        User::whereNull('user_karma_key')
            ->get()
            ->each(function (User $user) {
                $user->user_karma_key = Str::random(32) . time();
                $user->save();
            });
    }

    public function down()
    {
        if (Schema::hasColumn('users', 'user_karma_key')) {
            Schema::dropColumns('users', 'user_karma_key');
        }
    }
}
