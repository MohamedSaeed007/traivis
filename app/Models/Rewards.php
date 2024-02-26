<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rewards extends Model
{
    use HasFactory;
    protected  $table = 'rewards';
    protected $guarded = [];
    protected $fillable=[
      'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function rewardable()
    {
        return $this->morphTo();
    }
}
