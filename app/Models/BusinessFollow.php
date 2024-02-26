<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class BusinessFollow extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;


    protected $table = 'business_follow';
    protected $guarded = [];

    public $fillable = ['user_id', 'business_id','is_blocked', 'created_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function business()
    {
        return $this->belongsTo(Business::class, 'business_id', 'id');
    }

    /*public function courses()
    {
        return $this->hasManyThrough(Course::class, Business::class);
    }*/

    public function courseViews()
    {
        return $this->hasMany(CourseView::class, 'user_id', 'id');
    }

    public function postViews()
    {
        return $this->hasMany(PostView::class, 'user_id', 'id');
    }

    /* public function courses()
    {
        return $this->hasMany(Course::class, 'user_id', 'id');
    } */

}
