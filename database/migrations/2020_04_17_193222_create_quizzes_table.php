<?php

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->nullable();
            //            $table->dropForeign(\App\Models\Course::class);
            //            $table->dropForeign(\App\Models\Section::class);

            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->foreignIdFor(Course::class);

            $table->text('options')->nullable();
            $table->string('quiz_file')->nullable();

            //            CREATE TABLE `contents` (
            //            `id` bigint unsigned NOT NULL AUTO_INCREMENT,
            //  `user_id` int DEFAULT NULL,
            //  `course_id` int DEFAULT NULL,
            //  `section_id` int DEFAULT NULL,
            //  `title` varchar(191) DEFAULT NULL,
            //  `slug` varchar(191) DEFAULT NULL,
            //  `text` longtext,
            //  `video_src` text,
            //  `video_time` int DEFAULT NULL,
            //  `item_type` varchar(30) DEFAULT NULL,
            //  `is_preview` tinyint(1) DEFAULT '0',
            //  `status` tinyint DEFAULT '0',
            //  `sort_order` tinyint DEFAULT '0',
            //  `options` text,
            //  `quiz_gradable` tinyint(1) DEFAULT NULL,
            //  `unlock_date` timestamp NULL DEFAULT NULL,
            //  `unlock_days` tinyint DEFAULT NULL,
            //  `assignment_file` varchar(191) DEFAULT NULL,
            //  `quiz_file` varchar(191) DEFAULT NULL,
            //  `contentable_type` varchar(191) NOT NULL,
            //  `contentable_id` bigint unsigned NOT NULL,
            //  `created_at` timestamp NULL DEFAULT NULL,
            //  `updated_at` timestamp NULL DEFAULT NULL,
            //  PRIMARY KEY (`id`),
            //  KEY `contents_contentable_type_contentable_id_index` (`contentable_type`,`contentable_id`)
            //) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;
            //

            //            $table->unsignedBigInteger('section_id');
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
        Schema::dropIfExists('quizzes');
    }
}
