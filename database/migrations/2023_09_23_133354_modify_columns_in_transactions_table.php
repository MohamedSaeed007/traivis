<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnsInTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            if (Schema::hasColumn('transactions', 'influencer_id')) {
                $table
                    ->foreignId('influencer_id')
                    ->nullable()
                    ->change();
            }

            if (Schema::hasColumn('transactions', 'influencer_commission')) {
                $table
                    ->decimal('influencer_commission', 16)
                    ->nullable()
                    ->change();
            }

            if (Schema::hasColumn('transactions', 'traivis_commission_from_influencer')) {
                $table
                    ->decimal('traivis_commission_from_influencer', 16)
                    ->nullable()
                    ->change();
            }
            if (Schema::hasColumn('transactions', 'productable')) {
                $table->string('productable_type')->nullable();
                $table
                    ->unsignedBigInteger('productable_id')
                    ->nullable()
                    ->change();
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
            //
        });
    }
}
