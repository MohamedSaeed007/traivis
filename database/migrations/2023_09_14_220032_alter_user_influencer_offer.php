<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserInfluencerOffer extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('users', 'influencer_offer_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('influencer_offer_id')->nullable();
            });
        }

    }

    public function down()
    {
        if (Schema::hasColumn('users', 'influencer_offer_id')) {
            Schema::dropColumns('users', 'influencer_offer_id');
        }
    }
}
