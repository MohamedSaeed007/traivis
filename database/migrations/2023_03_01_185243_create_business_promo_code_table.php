<?php

use App\Models\Business;
use App\Models\PromoCode;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessPromoCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_promo_code', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Business::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(PromoCode::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('business_promo_code');
    }
}