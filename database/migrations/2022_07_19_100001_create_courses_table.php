<?php

use App\Models\Business;
use App\Models\Course;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Business::class)->nullable();
            $table->integer('user_id')->nullable(); // remove in V2
            $table->string('available_student')->nullable(); // remove in V2
            $table->integer('parent_category_id')->nullable(); // remove in V2
            $table->integer('second_category_id')->nullable(); // remove in V2

            $table->string('title')->nullable();
            $table->string('slug')->nullable();

            $table->text('meta_description')->nullable();

            $table->text('short_description')->nullable();

            $table->string('publish_status')->nullable(); //draft,published
            $table->string('visibility')->default('public');
            $table->dateTime('published_at')->nullable();
            $table->dateTime('launch_at')->nullable();
            $table->string('delivery_mode')->nullable(); //recorded, live, f2f
            // start add by mohamed
            $table->string('course_duration')->nullable(); //in days
            $table->integer('lecture_id')->nullable();
            $table->foreignId('course_types')->constrained();
            $table->integer('created_by');

            //legacy
            //$table->tinyInteger('published')->default(0);

            $table->tinyInteger('is_paid')->default(0);
            //            $table->integer('category_id')->nullable();
            // end add by mohamed
            $table->text('description')->nullable();
            $table->text('benefits')->nullable();
            $table->text('requirements')->nullable();
            $table->text('cert_accr')->nullable();
            $table->string('price_plan', 20)->nullable(); // remove in V2
            $table->decimal('price', 16)->nullable(); // remove in V2
            $table->decimal('sale_price', 16)->nullable();
            $table
                ->boolean('level')
                ->default(0)
                ->nullable();
            //legacy and will be deleted
            //            $table
            //                ->boolean('status')
            //                ->default(0)
            //                ->nullable(); //0 = draft, 1 = private, 2 = published
            $table
                ->boolean('is_presale')
                ->default(0)
                ->nullable();
            $table->string('cover')->nullable();
            $table->string('overview_video')->nullable();
            $table->string('course_level', 250)->nullable();
            $table->integer('seats')->default(0);
            //            $table->dateTime('drafted_at')->nullable();

            $table->integer('thumbnail_id')->nullable();
            $table->text('video_src')->nullable();
            $table->integer('total_video_time')->nullable();
            $table
                ->integer('require_enroll')
                ->nullable()
                ->default(1);
            $table
                ->integer('require_login')
                ->nullable()
                ->default(1);
            $table
                ->boolean('total_lectures')
                ->default(0)
                ->nullable();
            $table
                ->boolean('total_assignments')
                ->default(0)
                ->nullable();
            $table
                ->boolean('total_quiz')
                ->default(0)
                ->nullable();
            $table
                ->decimal('rating_value', 3)
                ->nullable()
                ->default(0.0);
            $table
                ->boolean('rating_count')
                ->default(0)
                ->nullable();
            $table
                ->boolean('five_star_count')
                ->default(0)
                ->nullable();
            $table
                ->boolean('four_star_count')
                ->default(0)
                ->nullable();
            $table
                ->boolean('three_star_count')
                ->default(0)
                ->nullable();
            $table
                ->boolean('two_star_count')
                ->default(0)
                ->nullable();
            $table
                ->boolean('one_star_count')
                ->default(0)
                ->nullable();
            $table->boolean('is_featured')->nullable();
            $table->dateTime('featured_at')->nullable();
            $table->boolean('is_popular')->nullable();
            $table->dateTime('popular_added_at')->nullable();
            $table->dateTime('last_updated_at')->nullable();
            $table->integer('accepted_trainer_id')->nullable();
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
        Schema::dropIfExists('courses');
    }
}