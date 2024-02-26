<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\InteractsWithMedia;

class BiddingOffer extends Model
{
    use HasFactory,InteractsWithMedia;

    protected $fillable = ['status','description','price','bidding_id','business_id','institute_status','enterprise_status'];

    public function bidding (){
        return $this->belongsTo(Bidding::class);
    }

    public function business (){
        return $this->belongsTo(Business::class);
    }
    
}
