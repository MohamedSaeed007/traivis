<?php

namespace App\Mail;

use App\Models\Business;
use App\Models\EmailTemplate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailFromSuperAdmin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $key;
    public $recipient;
    public function __construct($key, $recipient)
    {
        $this->recipient = $recipient;
        $this->key = $key;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $templateEmail = EmailTemplate::find($this->key);
        $template = $templateEmail->email_body;
        $recipientName = get_class($this->recipient) == Business::class ? $this->recipient->business_name : $this->recipient->name;
        $template = str_replace('[user]', $recipientName, $template);
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->view('emails.welcome')->with(['template' => $template]);
    }
}