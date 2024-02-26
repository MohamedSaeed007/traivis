<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserReferer extends Model
{
    use HasFactory;
    protected $fillable = ['user_referer','user_id','percentage','start_date','end_date','total_taken'];
}
