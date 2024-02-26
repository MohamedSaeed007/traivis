<?php

namespace App\Listeners;

use App\Events\OrderSuccess;
use App\Mail\SendTransactionSuccessMailToPayee;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailToPayee
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderSuccess  $event
     * @return void
     */
    public function handle(OrderSuccess $event)
    {
        $order = $event->order;
        foreach ($order->transactions as $transaction) {
            $payeeable = $transaction->payeeable;

            //todo: disable sending emails to seeder emails
            $pattern = '/^business-\d{1,2}@gmail\.com$/';
            if (preg_match($pattern, $payeeable->business_email)) {
                continue;
            }

            if ($payeeable) {
                Mail::to($payeeable->business_email)->send(
                    new SendTransactionSuccessMailToPayee($transaction)
                );
            }
        }
    }
}
