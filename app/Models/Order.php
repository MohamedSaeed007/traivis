<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'orderable_type',
        'orderable_id',
        'promo_code_id',
    ];

    protected $appends = ['items_count', 'sub_total'];

    public function getItemsCountAttribute()
    {
        return $this->transactions()->count();
    }

    public function getSubTotalAttribute()
    {
        return (float) number_format($this->transactions()->sum('product_price'), 2, '.', '');
    }

    public function getDiscountAttribute()
    {
        $discount = null;
        if ($this->promoCode) {
            if ($this->promoCode->type == 'percentage') {
                $discount = $this->sub_total * $this->promoCode->discount_amount / 100;
            } else {
                $discount = $this->promoCode->discount_amount;
            }
        } else {
            $discount = 0;
            foreach ($this->transactions as $transaction) {
                $discount += $transaction->discount_amount;
            }
            return $discount;
        }
        return (float) number_format($discount, 2, '.', '');
    }

    public function getTotalAttribute()
    {
        $total = $this->sub_total - $this->discount;
        return (float) number_format($total, 2, '.', '');
    }

    //business or user can use order
    public function orderable()
    {
        return $this->morphTo();
    }

    public function promoCode()
    {
        return $this->belongsTo(PromoCode::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}