<?php

use App\Models\Lecture;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
Broadcast::channel('App.Models.Lecture.{lectureId}', function ($user, $lectureId) {
    $business_id = session('business_id');
    $lecture = Lecture::find($lectureId);

    $this->is_instructor = !is_null($business_id) && $business_id == $lecture->course->business_id;

    return $lecture->course->users->where('id', $user->id)->first() || $this->is_instructor;
});
