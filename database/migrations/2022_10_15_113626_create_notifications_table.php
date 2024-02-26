<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();

            $table->string('note_type')->nullable();
            $table->dateTime('note_time')->nullable();
            $table->string('note_status')->default('0');

            $table
                ->foreignIdFor(User::class)
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            //todo: for users and businesses
            $table->morphs('notifiable');

            $table->string('url')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('notifications');
    }
}
