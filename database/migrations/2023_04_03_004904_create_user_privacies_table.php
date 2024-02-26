<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPrivaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_privacies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->boolean('general_account_privacy')->default(0);
            $table->boolean('general_profile_picture_visibility')->default(0);
            $table->boolean('general_comments')->default(0);
            $table->boolean('general_mentions')->default(0);
            $table->string('general_enrolled_courses')->nullable();
            $table->string('general_analytics')->nullable();
            $table->string('general_business_env')->nullable();
            $table->string('general_rewards_deals')->nullable();
            $table->string('connections_visibility')->nullable();
            $table->string('connections_block')->nullable();
            $table->string('social_notes')->nullable();
            $table->string('social_hints')->nullable();
            $table->string('social_blogs')->nullable();
            $table->boolean('traiml_algorithms')->default(0);
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
        Schema::dropIfExists('user_privacies');
    }
}
