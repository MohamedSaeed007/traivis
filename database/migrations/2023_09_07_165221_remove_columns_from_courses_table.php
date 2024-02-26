<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnsFromCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('meta_description');
            $table->dropColumn('short_description');
            $table->dropColumn('lecture_id');
            $table->dropColumn('created_by');
            $table->dropColumn('description');
            $table->dropColumn('benefits');
            $table->dropColumn('requirements');
            $table->dropColumn('cert_accr');
            $table->dropColumn('price_plan');
            $table->dropColumn('price');
            $table->dropColumn('sale_price');
            $table->dropColumn('level');
            $table->dropColumn('is_presale');
            $table->dropColumn('cover');
            $table->dropColumn('overview_video');
            $table->dropColumn('course_level');
            $table->dropColumn('seats');
            $table->dropColumn('thumbnail_id');
            $table->dropColumn('video_src');
            $table->dropColumn('review_feedback');
            $table->dropColumn('version');
            $table->dropColumn('is_clone');
            $table->dropColumn('course_id');
            $table->dropColumn('is_paid');
            $table->dropColumn('require_enroll');
            $table->dropColumn('require_login');
            $table->dropColumn('total_lectures');
            $table->dropColumn('total_assignments');
            $table->dropColumn('total_quiz');
            $table->dropColumn('accepted_trainer_id');
            $table->dropColumn('last_updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
}