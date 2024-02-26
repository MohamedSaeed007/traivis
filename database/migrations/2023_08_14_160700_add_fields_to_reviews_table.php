<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn('review_id');
            //                        $table->id();
            $table
                ->string('status')
                ->index()
                ->default('hold')
                ->comment('hold=Unapproved, approve=Approved, spam=Spam')
                ->change();
            $table->unsignedBigInteger('reply_to_id')->nullable();
            $table
                ->foreignId('approved_by_id')
                ->index()
                ->after('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table
                ->boolean('status')
                ->default(1)
                ->nullable()
                ->change();
            $table->dropForeign('reviews_approved_by_id_foreign');
            $table->dropColumn('approved_by_id');
            $table->dropSoftDeletes();
        });
    }
};
