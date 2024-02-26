<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TeaserSocialMedia;
class CreateSocialApiResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_api_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(TeaserSocialMedia::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->string('id_str')->nullable();

            $table->longText('text')->nullable();

            //$table->string('id_str')->nullable();

            $table->string('user_id_str')->nullable();

            $table->string('platform')->nullable();

            $table->string('response_code')->nullable();

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
        Schema::dropIfExists('social_api_responses');
    }
}
