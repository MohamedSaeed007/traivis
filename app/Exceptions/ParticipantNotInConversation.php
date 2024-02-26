<?php

namespace App\Exceptions;

use Exception;

class ParticipantNotInConversation extends Exception
{
    public function __construct()
    {
        parent::__construct(_('Participant is not a part of this conversation.'));
    }
}
