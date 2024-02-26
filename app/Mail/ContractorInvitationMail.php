<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContractorInvitationMail extends Mailable
{
    use Queueable, SerializesModels;


    public $contractor ;
    public $password ;
    public $type ;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contractor,$password , $type = 'contractor')
    {
        $this->contractor = $contractor ;
        $this->password = $password ;
        $this->type = $type ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contactor_invitation_mail');
    }
}
