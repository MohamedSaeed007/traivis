<?php

namespace App\Traits;

trait HasErrorClassTrait
{
    protected $errorClass = 'border-red-500';

    protected $successClass = 'border-green-500';
    public function getErrorClass($field)
    {
        return $this->getErrorBag()->has($field) ? $this->errorClass : $this->successClass;
    }
}
