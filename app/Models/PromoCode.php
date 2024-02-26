<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class PromoCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'code',
        'type',
        'discount_amount',
        'valid_from',
        'valid_to',
        'valid_for',
        'is_active',
    ];

    protected $casts = [
        'valid_for' => 'array'
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function businesses()
    {
        return $this->belongsToMany(Business::class);
    }
}