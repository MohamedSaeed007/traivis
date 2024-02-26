<?php

namespace App\Console\Commands;

use App\Models\Transaction;
use Illuminate\Console\Command;

class ChangeTransactionIsRefundable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'transaction:change-is-refundable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check the Transaction is refundable or not.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //Deprecated
        $transactions = Transaction::where('is_refundable', 1)->where('created_at', '<', now()->subDays(config('options.change_transaction_is_refundable_days')))->get();
        foreach ($transactions as $transaction) {
            Transaction::changeIsRefundable($transaction->payerable->id, $transaction->productable->id);
        }
    }
}