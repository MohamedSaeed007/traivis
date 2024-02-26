<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserConnection extends Model
{
    use HasFactory;
    protected $with = ['user'];

    public $fillable = [
        'from_user_id',
        'to_user_id',
        'status',
    ];
    public static $StatusName=[
        0 => 'pending',
        1 => 'accepted',
        2 => 'blocked',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'to_user_id', 'id');
    }
    public function connection()
    {
        return $this->belongsTo(User::class, 'from_user_id', 'id');
    }
}
