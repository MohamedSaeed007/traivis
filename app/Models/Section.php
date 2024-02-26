<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Section extends Model implements Sortable
{
    use SortableTrait;

    protected $guarded = [];

    public $timestamps = false;

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function contents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Content::class)->orderBy('sort_order');
    }

    public function items()
    {
        if (Auth::check()) {
            return $this->hasMany(Content::class)
                ->orderBy('sort_order', 'asc')
                ->with('is_completed');
        }

        return $this->hasMany(Content::class)->orderBy('sort_order', 'asc');
    }

    public function getDripAttribute()
    {
        $data = [
            'is_lock' => false,
            'message' => null
        ];

        $time = Carbon::now()->timestamp;

        if ($this->unlock_date && strtotime($this->unlock_date) > $time) {
            // $unlock_date = Carbon::createFromTimeString($this->unlock_date)->format(get_option('date_format'));
            $unlock_date = Carbon::createFromTimeString($this->unlock_date)->format('Y M d');

            // dd($unlock_date);
            $data['is_lock'] = true;
            $data['message'] = ' The content will become available at ' . $unlock_date;
        }

        /**
         * If Lock by Days
         */
        if ($this->unlock_days && $this->unlock_days > 0) {
            if (Auth::check()) {
                $user = Auth::user();

                $isEnrol = $user->isEnrolled($this->course_id);

                $unlock_date = Carbon::parse($isEnrol->created_at)->addDays($this->unlock_days);
                $now = Carbon::now();

                if ($unlock_date->gt($now)) {
                    $diffDays = $unlock_date->diffInDays($now);
                    $data['is_lock'] = true;
                    $data['message'] = "The content will become available in {$diffDays} days";
                }
            }
        }

        return (object) $data;
    }

    public function liveSection()
    {
        return $this->hasOne(LiveSchedule::class);
    }

    public function buildSortQuery()
    {
        return static::query()->where('course_id', $this->course_id);
    }
}
