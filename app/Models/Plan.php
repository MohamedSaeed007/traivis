<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use LucasDotVin\Soulbscription\Models\Concerns\HandlesRecurrence;
use LucasDotVin\Soulbscription\Models\Plan as ModelsPlan;

class Plan extends ModelsPlan
{
    public function __construct(array $attributes = [])
    {
        $this->mergeFillable(['price']);
        parent::__construct($attributes);
    }
}
