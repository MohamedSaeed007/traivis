<?php

use App\Models\Business;
use App\Models\TierFeature;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTierFeaturePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tier_feature_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TierFeature::class)->constrained()->cascadeOnDelete();
            $table->string('content');
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
        Schema::dropIfExists('tier_feature_posts');
    }
}
