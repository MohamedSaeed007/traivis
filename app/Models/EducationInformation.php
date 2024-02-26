<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class EducationInformation extends Model
{
    use HasFactory;
    protected $fillable =["name","major","level","location","user_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
