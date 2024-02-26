<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInfluencerIdColumnToTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            if (!Schema::hasColumn('transactions', 'influencer_id')) {
                $table
                    ->foreignId('influencer_id')
                    ->constrained('users')
                    ->before('created_at');
            }
            if (!Schema::hasColumn('transactions', 'influencer_commission')) {
                $table->decimal('influencer_commission', 16)->before('created_at');
            }
            if (!Schema::hasColumn('transactions', 'traivis_commission_from_influencer')) {
                $table->decimal('traivis_commission_from_influencer', 16)->before('created_at');
            }
            // if (!Schema::hasColumn('transactions', 'influencer_discount')) {
            //     $table->decimal('influencer_discount', 16)->before('created_at');
            // }
            if (!Schema::hasColumn('transactions', 'discount_amount')) {
                $table->decimal('discount_amount', 16)->after('product_price');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn('influencer_id');
        });
    }
}
