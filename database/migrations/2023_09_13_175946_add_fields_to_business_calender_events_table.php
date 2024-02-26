<?php

use App\Models\BusinessCalenderEvent;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('business_calender_events', function (Blueprint $table) {
            $table->dateTime('start_date')->nullable();
            $table->string('start_date_tz')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->string('end_date_tz')->nullable();
        });

        BusinessCalenderEvent::whereNull('start_date')->chunk(10, function ($BusinessCalenderEvents) {
            foreach ($BusinessCalenderEvents as $BusinessCalenderEvent) {
                /** @var BusinessCalenderEvent $BusinessCalenderEvent */
                $BusinessCalenderEvent->start_date = \Carbon\Carbon::parse(
                    $BusinessCalenderEvent->event_date,
                )
                    ->startOfDay()
                    ->addHours($BusinessCalenderEvent->event_hour);
                $BusinessCalenderEvent->end_date = $BusinessCalenderEvent->start_date->addHour();
                $BusinessCalenderEvent->save();
            }
        });
    }

    public function down(): void
    {
        Schema::table('business_calender_events', function (Blueprint $table) {
            $table->dropColumn('start_date');
            $table->dropColumn('start_date_tz');
            $table->dropColumn('end_date');
            $table->dropColumn('end_date_tz');
        });
    }
};
