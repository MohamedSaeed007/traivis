<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

/**
 * Class Uuid.
 * Manages the usage of creating UUID values for primary keys. Drop into your models as
 * per normal to use this functionality. Works right out of the box.
 * Taken from: http://garrettstjohn.com/entry/using-uuids-laravel-eloquent-orm/
 */
trait UuidKeyAdditional
{
    /**
     * The "booting" method of the model.
     */
    public static function bootUuidKeyAdditional()
    {
        static::creating(function (Model $model) {
            $model->uuid = (string) Uuid::uuid4();
        });
    }
}
