<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InfluencerRegister extends Mailable
{
    use Queueable, SerializesModels;

    public $influencerInfo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $information)
    {
        $this->influencerInfo = $information;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Traivis -  Influencer Information');
        $this->from(ENV('MAIL_FROM_ADDRESS'), ENV('MAIL_FROM_NAME'));
        return $this->view('emails.influencer_register');
    }
}
