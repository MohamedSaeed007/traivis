<?php

use App\Models\Tier;
use App\Models\TierFeature;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTierTierFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tier_tier_feature', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tier::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(TierFeature::class)->constrained()->cascadeOnDelete();
            $table->decimal('allowed');
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
        Schema::dropIfExists('tier_tier_feature');
    }
}
