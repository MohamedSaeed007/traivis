<?php

use App\Models\Bidding;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiddingOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidding_offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bidding_id')->constrained()->cascadeOnDelete();
            $table->foreignId('business_id')->constrained()->cascadeOnDelete(); //sender id (insitute)
            $table->string('status');//active-not-active
            $table->string('price');
            $table->string('description');
            $table->string('institute_status')->default('pending')->nullable();//pending rejected applied
            $table->string('enterprise_status')->default('progress')->nullable();//progress shortlisted hired rejected
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
        Schema::dropIfExists('bidding_offers');
    }
}
