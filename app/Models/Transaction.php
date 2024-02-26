<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_num',
        'payment_method',
        'product_price',
        'discount_amount',
        'traivis_commission',
        'transaction_type',
        'transaction_status',
        'order_id',
        //Pay For
        'productable_type',
        'productable_id',
        //Pay From
        'payerable_type',
        'payerable_id',
        //Pay To
        'payeeable_type',
        'payeeable_id',
        //Influencer & karma
        'influencer_id',
        'karma_id',
        'mkt_commission',
        'traivis_commission_from_mkt',
        'hold_balance',
        'is_refundable',
        'withdraw_request_data',
    ];

    protected $appends = ['final_amount'];
    protected $casts = ['withdraw_request_data' => AsArrayObject::class];

    protected static function booted()
    {
        static::creating(function (Transaction $model) {
            $model->transaction_num = Carbon::now()->timestamp . rand(0000, 9999);
        });
        static::updated(function (Transaction $model) {
            if ($model->transaction_type == 1) {
                if ($model->isDirty('transaction_status')) {
                    if ($model->transaction_status == 2) {
                        $model->payeeable->decrement('hold_balance', $model->final_amount);
                        $model->payeeable->increment('balance', $model->final_amount);
                        $model->karma?->decrement('hold_balance', $model->mkt_commission - $model->traivis_commission_from_mkt);
                        $model->karma?->increment('balance', $model->mkt_commission - $model->traivis_commission_from_mkt);
                    }
                    if ($model->transaction_status == 3) {
                        $model->payeeable->decrement('hold_balance', $model->final_amount);
                        $model->karma?->decrement('hold_balance', $model->mkt_commission - $model->traivis_commission_from_mkt);
                        $model->payerable->increment('balance', $model->amount_after_discount);
                    }
                }
            }
            if ($model->transaction_type == 2) {
                if ($model->isDirty('transaction_status')) {
                    if ($model->transaction_status == 2) {
                        //Payout using stripe
                        if ($model->payment_method == 1) {
                            \Stripe\Stripe::setApiKey('sk_test_51M5sYBJwMzK7SbmndsDDNC9PZ7BwjD6WKkt07na1AXOU2OWud8VrioWjKtEQpX0sMImWEzf3yLbjatsOJrhpgtAR00ncaieqsA');
                            $transfer = \Stripe\Transfer::create([
                                "amount" => $model->final_amount * 100,
                                "currency" => "GBP",
                                "destination" => $model->withdraw_request_data['stripe_account_id'],
                            ]);
                            // dd($transfer['id']);
                            if ($transfer['id']) {
                                $model->payeeable->decrement('pending_withdrawal', $model->product_price);
                            } else {
                                $model->transaction_status = 1;
                                $model->save();
                            }
                        }
                        //Payout using paypal
                        if ($model->payment_method == 2) {
                            $provider = new PayPalClient;
                            $provider->setApiCredentials(config('paypal'));
                            $paypalToken = $provider->getAccessToken();
                            $response = $provider->createBatchPayout([
                                "items" => [
                                    [
                                        "receiver" => $model->withdraw_request_data['paypal_email'],
                                        "recipient_type" => "Email",
                                        "sender_item_id" => "201403140031",
                                        "note" => "Thanks for your patronage!",
                                        "amount" => [
                                            "currency" => "USD",
                                            "value" => $model->product_price
                                        ],
                                    ]
                                ],
                                "sender_batch_header" => [
                                    "sender_batch_id" => uniqid(),
                                    "email_subject" => "You have a payout!",
                                    "email_message" => "You have received a payout! Thanks for using our service!"
                                ]
                            ]);
                            if ($response['batch_header']['batch_status'] == 'PENDING') {
                                $model->payeeable->decrement('pending_withdrawal', $model->product_price);
                            } else {
                                $model->transaction_status = 1;
                                $model->save();
                            }
                        }
                    }
                }
            }
        });
    }

    public function calculateDiscount()
    {
        if ($this->influencer_id) {
            //Transaction Discount from influencer campaign
            $transactionDiscount = $this->productable->sale_price - $this->productable->final_price;
        } else {
            //Transaction Discount from promo code
            $orderDiscount = (float) $this->order->discount;
            if ((float) $this->order->sub_total > 0) {
                $transactionDiscountPercentage =
                    ((float) $this->product_price / (float) $this->order->sub_total) * 100;
                $transactionDiscount = ($transactionDiscountPercentage * $orderDiscount) / 100;
            } else {
                $transactionDiscount = 0;
            }
        }
        $this->discount_amount = $transactionDiscount;
        $this->save();
        return (float) number_format($transactionDiscount, 2, '.', '');
    }

    public function getAmountAfterDiscountAttribute()
    {
        $amount = (float) number_format($this->product_price - $this->discount_amount, 2, '.', '');
        return $amount;
    }
    // public function getLastLectureEndDateAttribute()
    // {
    //     if ($this->productable == Course::class) {
    //         // dd($this->productable->lectures()->where('delivery_mode', '!=', 2)->latest()->first()?->end_date);
    //         // dd($this->productable->lectures);
    //         return $this->productable->lectures()->where('delivery_mode','!=',2)->latest()->first()?->end_date;
    //     } else {
    //         return null;
    //     }
    // }

    public function calculateTraivisCommission($commissionType)
    {
        $commissionPercentage = $this->payeeable->tier->{$commissionType};
        $traivisCommission = ($this->amount_after_discount * $commissionPercentage) / 100;
        $this->traivis_commission = $traivisCommission;
        $this->save();
        return (float) number_format($traivisCommission, 2, '.', '');
    }

    public function getFinalAmountAttribute()
    {
        //This is the instructor income after all discounts and commission
        return (float) number_format(
            $this->amount_after_discount - $this->traivis_commission - $this->influencer_commission,
            2,
            '.',
            '',
        );
    }

    public function getBalanceAttribute()
    {
        return (float) number_format($this->final_amount - $this->hold_balance, 2, '.', '');
    }

    public function getPaymentMethodNameAttribute()
    {
        $paymentName = null;
        switch ($this->payment_method) {
            case 1:
                $paymentName = 'Card';
                break;
            case 2:
                $paymentName = 'Paypal';
                break;
            case 3:
                $paymentName = 'Wallet';
                break;
        }
        return $paymentName;
    }

    public function productable()
    {
        return $this->morphTo();
    }

    public function payerable()
    {
        return $this->morphTo();
    }

    public function payeeable()
    {
        return $this->morphTo();
    }
    // public function influencer()
    // {
    //     return $this->belongsTo(User::class, 'influencer_id');
    // }
    public function karma()
    {
        if ($this->karma_id) {
            return $this->belongsTo(User::class, 'karma_id');
        } else {
            return $this->belongsTo(User::class, 'influencer_id');
        }
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }

    static public function changeIsRefundable($userId, $courseId, $isRefundableValue = 0)
    {
        $transaction = self::whereMorphRelation('productable', Course::class, 'id', $courseId)
            ->whereMorphRelation('payerable', User::class, 'id', $userId)->first();
        if ($transaction) {
            if ($transaction->is_refundable == 1) {
                //add balance to influencer and instructor
                if ($transaction->mkt_commission) {
                    $finalInfluencerCommission = $transaction->mkt_commission - $transaction->traivis_commission_from_mkt;
                    $transaction->karma->increment('balance', $finalInfluencerCommission);
                    $transaction->karma->decrement('hold_balance', $finalInfluencerCommission);
                }
                $transaction->payeeable->owner->increment('balance', $transaction->final_amount);
                $transaction->payeeable->owner->decrement('hold_balance', $transaction->final_amount);
            }
            $transaction->is_refundable = $isRefundableValue;
            $transaction->transaction_status = 2;
            $transaction->save();
        }
    }
}