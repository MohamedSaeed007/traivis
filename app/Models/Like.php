<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;
    public $fillable = [
        'likeable_id',
        'likeable_type',
        'liked',
        'user_id',
    ];
    protected $guarded = [];

    public function likeable()
    {
        return $this->morphTo();
    }
}
