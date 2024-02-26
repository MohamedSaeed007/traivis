<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class VisitorIp extends Model
{
    use HasFactory;
    public $fillable=['ip','user_id','invitor_id'];
}
