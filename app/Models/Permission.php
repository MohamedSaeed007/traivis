<?php
/**
 * Created by PhpStorm.
 * User: COMPUTER
 * Date: 3/26/2018
 * Time: 4:09 PM
 */

namespace App\Models;

class Permission extends Model
{
    protected $table = 'permissions';

    public $fillable = [
        'key'
    ];
    public $timestamps = true;
}
