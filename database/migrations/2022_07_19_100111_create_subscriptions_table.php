<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions_old', function (Blueprint $table) {
            $table->id();
 
			//  start add new in V2
            $table->dateTime('subscription_trail_duration')->nullable();
            $table->dateTime('subscription_start')->nullable();
            $table->dateTime('subscription_end')->nullable();
            $table->tinyInteger('is_paid')->default(0);
            $table->tinyInteger('published')->default(0);
            $table->string('public_id');
			//  end add new in V2

            $table->string('name')->nullable(); // will rename to subscription_name
			$table->string('month')->nullable();// remove in V2
			$table->integer('package_id');
			$table->string('email')->nullable(); // remove in V2
			$table->integer('user_id')->nullable();
			$table->decimal('amount')->nullable(); // remove in V2
			$table->decimal('total_amount')->nullable(); // remove in V2
			$table->string('fees_name')->nullable(); // remove in V2
			$table->decimal('fees_amount')->nullable();// remove in V2
			$table->decimal('fees_total')->nullable(); // remove in V2
			$table->string('fees_type', 20)->nullable(); // will rename to subscription_price
			$table->string('payment_method')->nullable();
			$table->enum('status', ['initial','pending','onhold','success','failed','declined','dispute','expired'])
			->nullable()->default('initial'); // remove in V2
			$table->string('currency')->nullable(); // remove in V2
			$table->string('token_id')->nullable();
			$table->string('card_last4')->nullable(); // remove in V2 
			$table->string('card_id')->nullable(); // remove in V2
			$table->string('card_brand')->nullable(); // remove in V2
			$table->string('card_country')->nullable(); // remove in V2
			$table->string('card_exp_month')->nullable(); // remove in V2
			$table->string('card_exp_year')->nullable(); // remove in V2
			$table->string('client_ip')->nullable(); // remove in V2
			$table->string('charge_id_or_token')->nullable(); // remove in V2
			$table->string('payer_email')->nullable(); // remove in V2
			$table->string('description')->nullable(); // remove in V2
			$table->string('local_transaction_id')->nullable(); // remove in V2
			$table->integer('payment_created')->nullable(); // remove in V2
			$table->string('bank_swift_code')->nullable(); // remove in V2
			$table->string('account_number')->nullable(); // remove in V2
			$table->string('branch_name')->nullable(); // remove in V2
			$table->string('branch_address')->nullable(); // remove in V2
			$table->string('account_name')->nullable(); // remove in V2
			$table->string('iban')->nullable(); // remove in V2
			$table->text('payment_note')->nullable(); // remove in V2

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
        Schema::dropIfExists('subscriptions_old');
    }
}
