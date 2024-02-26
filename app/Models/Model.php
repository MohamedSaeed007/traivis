<?php

namespace App\Models;

use App\Casts\DateTimeTZ;
use Carbon\CarbonInterface;
use DateTimeInterface;

/* @mixin \Eloquent */
class Model extends \Illuminate\Database\Eloquent\Model
{
    //    public function __construct(array $attributes = [])
//    {
//        parent::__construct($attributes);
//        $this->setUpDateTimeCasting();
//
//        if (method_exists($this, 'getDeletedAtColumn')) {
//            $softDeleteColumn = $this->getDeletedAtColumn();
//        }
//
//        // dd($this->getCasts(), $this->getCreatedAtColumn(), $this->getUpdatedAtColumn());
//    }
//
//    protected function setUpDateTimeCasting()
//    {
//        $datetimeAttributes = $this->getDates();
//
//        foreach ($this->getDates() as $key) {
//            $this->casts[$key] = DateTimeTZ::class;
//        }
//    }
//    /**
//     * Get an attribute from the model.
//     *
//     * @param  string  $key
//     * @return mixed
//     */
//    public function getAttribute($key)
//    {
//        $value = parent::getAttribute($key);
//        if ($value instanceof CarbonInterface) {
//            $ts = auth()->user()->timezone ?? config('app.timezone');
//            // Convert all carbon dates to app timezone
//            //            dump($key, $value->toIso8601String());
//            if ($ts != $value->timezoneName) {
//                //                dd($ts, $value->timezoneName);
//                $value = $value->setTimezone($ts);
//            }
//            //        } elseif ($value instanceof DateTimeInterface) {
//            //            // Convert all other dates to timestamps
//            //            $value = $value->unix();
//        }
//        // They will be reconverted to a Carbon instance but with the correct timezone
//        return $value;
//    }
//
//    /**
//     * Set a given attribute on the model.
//     *
//     * @param  string  $key
//     * @param  mixed  $value
//     * @return mixed
//     */
//    public function setAttribute($key, $value)
//    {
//        if ($value instanceof CarbonInterface) {
//            // Convert all carbon dates to app timezone
//            if (($ts = config('app.timezone')) != $value->timezoneName) {
//                $value = $value->setTimezone($ts);
//            }
//            //        } elseif ($value instanceof DateTimeInterface) {
//            //            // Convert all other dates to timestamps
//            //            $value = $value->unix();
//        }
//        // They will be reconverted to a Carbon instance but with the correct timezone
//        return parent::setAttribute($key, $value);
//    }
}
