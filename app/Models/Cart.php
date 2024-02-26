<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['cartable_type', 'cartable_id', 'promo_code_id'];
    protected $with = ['items'];
    protected $appends = ['items_count','sub_total'];

    public static function booted()
    {
        static::saved(function () {
            Cache::forget('user.' . auth()->user()->id . '.cart');
        });
        static::deleted(function () {
            Cache::forget('user.' . auth()->user()->id . '.cart');
        });
    }

    public function getItemsCountAttribute()
    {
        // dd(count($this->items));
        return count($this->items);
    }

    public function getSubTotalAttribute()
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->course->sale_price;
        }
        return (float) number_format($sum, 2, '.', '');
    }

    public function getDiscountAttribute()
    {
        if ($this->promoCode) {
            $discount =
                $this->promoCode->type == 'percentage'
                ? ($this->sub_total * $this->promoCode->discount_amount) / 100
                : $this->promoCode->discount_amount;
            return (float) number_format($discount, 2, '.', '');
        } else {
            $discount = 0;
            foreach ($this->items as $item) {
                $discount += $item->course->sale_price - $item->course->final_price;
            }
            return $discount;
        }
    }

    public function getTotalAttribute()
    {
        $total = $this->sub_total - $this->discount;
        return (float) number_format($total, 2, '.', '');
    }

    //business or user can use cart
    public function cartable()
    {
        return $this->morphTo();
    }

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }

    public function promoCode()
    {
        return $this->belongsTo(PromoCode::class);
    }

    public function clear()
    {
        $this->delete();
    }
}
