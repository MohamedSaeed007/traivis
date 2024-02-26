<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Business;
class CreateBusinessSocialKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_social_keys', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Business::class)->nullable();
            $table->string('social_type')->nullable();
            $table->longText('oauth_token')->nullable();
            $table->longText('oauth_token_secret')->nullable();
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
        Schema::dropIfExists('business_social_keys');
    }
}
