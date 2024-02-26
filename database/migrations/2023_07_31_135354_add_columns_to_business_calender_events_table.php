<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToBusinessCalenderEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('business_calender_events', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Course::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\TeaserOriginalDraft::class)->nullable()->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_calender_events', function (Blueprint $table) {
            //
        });
    }
}