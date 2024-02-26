<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BusinessProfileView extends AbstractView
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        $this->mergeFillable(['business_profile_id']);
        parent::__construct($attributes);
    }

    public function profile()
    {
        return $this->belongsTo(Business::class, 'business_profile_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
