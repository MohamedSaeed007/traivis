<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocilaMedia extends Model
{
    use HasFactory;

    protected $fillable =[
        'facebook',
        'twitter',
        'linkedin',
        'youtube',
        'whatsapp',
        'instagram',
        'pinterest',
        'snapchat',
        'vimeo',
        'telegram',
        'modelable_type',
        'modelable_id'
    ];

    public function modelable()
    {
        return $this->morphTo();
    }
}
