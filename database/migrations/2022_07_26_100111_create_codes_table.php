<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodesTable extends Migration
{
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->string('coupon');
            $table->foreignIdFor(User::class)->nullable();
            $table->string('status')->default('private');
            $table->dateTime('batch_timestamp');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('codes');
    }
}
