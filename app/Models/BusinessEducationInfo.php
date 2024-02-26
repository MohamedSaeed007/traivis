<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BusinessEducationInfo extends Model
{
    use HasFactory;
    protected $fillable =["name","major","level","location","business_id"];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
