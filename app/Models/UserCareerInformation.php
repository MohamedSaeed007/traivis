<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserCareerInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        "open_for_job",
        "position",
        "industry",
        "skills",
        "user_id",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
