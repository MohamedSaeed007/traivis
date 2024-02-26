<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;

class CartItem extends Model
{
    use HasFactory;
    protected $with = ['course.maker'];
    protected $fillable = [
        'cart_id',
        'course_id',
        'price', //Deprecated
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
