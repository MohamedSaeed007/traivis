<?php

use App\Models\Course;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_user', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Course::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Transaction::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('permissions')->nullable();
            $table->integer('purchased_by')->nullable()->comment('if company purchased courses for his workforce users');
            $table->decimal('course_price', 16)->nullable();
            $table->string('status', 30)->default('pending')->nullable();
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
        Schema::dropIfExists('course_user');
    }
}
