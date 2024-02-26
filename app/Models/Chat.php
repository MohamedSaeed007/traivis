<?php

namespace App\Models;

use App;
use DB;
use Illuminate\Support\Facades\Auth;

class Chat extends Model
{
    protected $table = 'chats';

    public $timestamps = true;

    public function receiverUser()
    {
        return $this->belongsTo('App\Models\User', 'receiver_id', 'id');
    }

    public function receiverChat($receiverId)
    {
        $received = $this->where('sender_id', $receiverId)->where('receiver_id', Auth::user()->id)
            ->orderBy('time', 'ASC')->get();

        return $received;
    }
}
