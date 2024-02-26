<?php

use App\Models\Business;
use App\Models\TierTierFeature;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTierTierFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_tier_tier_feature', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Business::class)->constrained()->cascadeOnDelete();
            $table->foreignId('tier_tier_feature_id')->constrained('tier_tier_feature')->cascadeOnDelete();
            $table->decimal('consumed')->default(0);
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
        Schema::dropIfExists('business_tier_tier_feature');
    }
}
