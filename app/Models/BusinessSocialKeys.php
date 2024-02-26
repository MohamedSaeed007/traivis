<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BusinessSocialKeys extends Model
{
  use HasFactory;
  protected $fillable = [
    'social_type',
    'oauth_token',
    'oauth_token_secret',
    'business_id'
  ];

}