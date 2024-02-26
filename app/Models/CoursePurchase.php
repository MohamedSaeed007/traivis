<?php
/**
 * Created by PhpStorm.
 * User: COMPUTER
 * Date: 4/9/2018
 * Time: 5:15 PM
 */

namespace App\Models;

class CoursePurchase extends Model
{
    protected $table = 'course_purchases';

    public $timestamps = true;

    public function purchasedCourse()
    {
        return $this->belongsTo('App\Models\Course', 'course_id', 'id');
    }
    // public function purchasedUser()
    // {
    //     return $this->belongsTo('App\User','purchased_by_id','id');
    // }

    public function purchasedBy()
    {
        return $this->belongsTo('App\Models\Company', 'purchased_by_id', 'id');
    }

    public function coursePurchaseWorkforces()
    {
        return $this->hasMany('App\Models\RequiredCourseWorkforce', 'course_purchase_id', 'id');
    }
}
