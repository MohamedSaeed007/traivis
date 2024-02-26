<?php

namespace App\Exceptions;

use Exception;

class CourseNotEnrollable extends Exception
{
    public function __construct()
    {
        parent::__construct(_('No seats available.'));
    }
}
