<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class AbstractView extends Model
{
    use HasFactory;
    protected $fillable = ['ip', 'type', 'device', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
