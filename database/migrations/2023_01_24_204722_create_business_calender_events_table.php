<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessCalenderEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_calender_events', function (Blueprint $table) {
            $table->id();
            $table->string('event_type')->nullable();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->dateTime('event_date')->nullable();
            $table->string('event_hour')->nullable();
            $table->foreignIdFor(\App\Models\Business::class)->nullable()->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('business_calender_events');
    }
}
