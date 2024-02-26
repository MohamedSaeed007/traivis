<?php

namespace App\Casts;

use Carbon\Carbon;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class DateTimeTZ implements CastsAttributes
{
    protected ?string $format;

    public function __construct(?string $format = null)
    {
        $this->format = $format;
    }
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, string $key, $value, array $attributes)
    {
        if (!$value && $value !== 0) {
            return null;
        }

        $value = Carbon::parse($value, config('app.timezone'))->setTimezone(
            auth()->user()?->timezone ?? config('app.timezone'),
        );

        if ($this->format) {
            $value = $value->format($this->format);
        }

        return $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, string $key, $value, array $attributes)
    {
        if (!$value && $value !== 0) {
            return null;
        }

        $value = Carbon::parse($value)
            ->shiftTimezone(auth()->user()?->timezone ?? config('app.timezone'))
            ->setTimezone(config('app.timezone'));

        if ($this->format) {
            $value = $value->format($this->format);
        }
        return $value;
    }
}
