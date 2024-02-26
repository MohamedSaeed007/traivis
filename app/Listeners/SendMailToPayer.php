<?php

namespace App\Listeners;

use App\Events\OrderSuccess;
use App\Mail\SendOrderSuccessMailToPayer;
use App\Mail\SendTestMail;
use App\Models\Business;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailToPayer
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
        $payerable = $event->order->transactions()->first()->payerable;
        if (get_class($payerable) == Business::class) {
            Mail::to($payerable->business_email)->send(new SendOrderSuccessMailToPayer($order));
        } else {
            Mail::to($payerable->email)->send(new SendOrderSuccessMailToPayer($order));
        }

        //mohamed.saeed.aboelkhair@gmail.com
    }
}