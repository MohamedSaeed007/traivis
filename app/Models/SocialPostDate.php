<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialPostDate extends Model
{
    use HasFactory;
    protected $fillable = [
        'social_post_id',
        'publish_date',
        'status', //pending , sent
        'response_code'
    ];

    public function teaserSocialMedia()
    {
        return $this->belongsTo(TeaserSocialMedia::class, 'social_post_id', 'id');
    }
}
