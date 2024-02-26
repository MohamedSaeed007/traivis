<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class DefaultPercentage extends Model
{
    use HasFactory;

    public $fillable = ['percentage', 'name'];
}