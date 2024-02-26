<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentUserResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_user_responses', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('assignment_user_id')
                ->constrained('assignment_user')
                ->cascadeOnDelete();
            $table->morphs('responseable','a_u_f_responseable');
            $table->text('notes');
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
        Schema::dropIfExists('assignment_user_responses');
    }
}
