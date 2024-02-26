<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOrderSuccessMailToPayer extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = get_option('email_address');
        $title = $this->order->transactions->first()->productable_type == 'App\Models\Plan' ? 'Thanks for your subscription with traivis' : 'Thanks for your order with traivis';
        return $this->from($email)->subject($title)->view('emails.send_order_success_mail_to_payer')->with('order', $this->order);
    }
}