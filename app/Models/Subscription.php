<?php

namespace App\Models;

use LucasDotVin\Soulbscription\Models\Subscription as ModelsSubscription;

class Subscription extends ModelsSubscription
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->mergeFillable(['status']);
    }
    public static function booted()
    {
        self::updating(function ($model) {
            if ($model->status == 3) {
                $model->canceled_at = now();
            } else {
                $model->canceled_at = null;
            }
        });
    }
    /*     public function setStatusAttribute()
{
$this->attributes['status'] = $this->suppressed_at ? 2 : ($this->canceled_at ? 3 : 1);
} */

    /* protected $guarded = [];
protected $table = 'subscriptions_old';
public $timestamps = true;
public function packages()
{
return $this->belongsTo(Package::class, 'package_id');
}
public function functionality()
{
return $this->hasMany(SubscriptionFunctionality::class);
} */
}
