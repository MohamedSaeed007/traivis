<?php

use App\Models\Business;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table
                ->string('transaction_num')
                ->default(Carbon::now()->timestamp . rand(0000, 9999))
                ->unique();
            $table
                ->tinyInteger('payment_method')
                ->default(1)
                ->comment('1 => Card 2 => Paypal 3 => Wallet');
            $table
                ->tinyInteger('transaction_type')
                ->default(1)
                ->comment('1 => Course Purchase  2 => Withdrawal');
            $table
                ->tinyInteger('transaction_status')
                ->default(1)
                ->comment('1 => Pending  2 => Success 3 => Canceled');
            $table
                ->foreignId('order_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->decimal('traivis_commission', 16)->nullable();
            $table->decimal('product_price', 16);
            $table->nullableMorphs('productable'); // Pay for
            $table->nullableMorphs('payerable'); // Pay from
            $table->nullableMorphs('payeeable'); // Pay to
            $table->decimal('influencer_commission', 16);
            $table->decimal('hold_balance', 16);
            $table->boolean('is_refundable')->default(0);
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
        Schema::dropIfExists('transactions');
    }
}
