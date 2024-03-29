<?php

namespace App\Models;

class CompanyIndividualRequest extends Model
{
    protected $table = 'company_individual_requests';

    public $timestamps = true;

    public function companyName()
    {
        return $this->belongsTo(User::class, 'company_user_id');
    }
}
