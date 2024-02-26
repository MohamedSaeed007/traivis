<?php

namespace App\Mail;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendTransactionSuccessMailToPayee extends Mailable
{
    use Queueable, SerializesModels;

    public $transaction;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = get_option('email_address');

        return $this->from($email)->subject('Congratulations , your course has been purchased')->view('emails.send_transaction_success_mail_to_payee')->with('transaction', $this->transaction);
    }
}