<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table
                ->unsignedBigInteger('rating_count')
                ->default(0)
                ->nullable()
                ->change();
            $table
                ->unsignedBigInteger('five_star_count')
                ->default(0)
                ->nullable()
                ->change();
            $table
                ->unsignedBigInteger('four_star_count')
                ->default(0)
                ->nullable()
                ->change();
            $table
                ->unsignedBigInteger('three_star_count')
                ->default(0)
                ->nullable()
                ->change();
            $table
                ->unsignedBigInteger('two_star_count')
                ->default(0)
                ->nullable()
                ->change();
            $table
                ->unsignedBigInteger('one_star_count')
                ->default(0)
                ->nullable()
                ->change();
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table
                ->boolean('rating_count')
                ->default(0)
                ->nullable()
                ->change();
            $table
                ->boolean('five_star_count')
                ->default(0)
                ->nullable()
                ->change();
            $table
                ->boolean('four_star_count')
                ->default(0)
                ->nullable()
                ->change();
            $table
                ->boolean('three_star_count')
                ->default(0)
                ->nullable()
                ->change();
            $table
                ->boolean('two_star_count')
                ->default(0)
                ->nullable()
                ->change();
            $table
                ->boolean('one_star_count')
                ->default(0)
                ->nullable()
                ->change();
        });
    }
};
