<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('contents', function (Blueprint $table) {
            if (!Schema::hasColumn('contents', 'publish_status')) {
                $table->string('publish_status')->default('Draft')->comment('Draft - Ready to publish - Published');
            }
        });
    }
};
