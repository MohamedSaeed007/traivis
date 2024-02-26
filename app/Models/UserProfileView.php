<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfileView extends AbstractView
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        $this->mergeFillable(['profile_id']);
        parent::__construct($attributes);
    }

    public function profile()
    {
        return $this->belongsTo(User::class, 'profile_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
