<?php

namespace App\Http\Livewire;

// use Livewire\Component;

use App\Models\Post;
use App\Models\PostView;
use App\Models\UserConnection;
use App\Models\UserProfileView;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use LivewireUI\Modal\ModalComponent;

class HomeMyFollowers extends ModalComponent
{
    public $openModal = false;

    protected $listeners = ['openModalFollowers'];

    public function openModalFollowers()
    {
        $this->openModal = true;
    }

    public function connect($user_id)
    {
        UserConnection::firstOrCreate(
            [
                'from_user_id' => auth()->id(),
                'to_user_id' => $user_id,
            ],
            [
                'status' => 1,
            ]
        );
    }

    public function render()
    {
        $userViews=null;
        $userViewsCount=null;
        $connection=null;
        if ($this->openModal) {
            $userViews = UserProfileView::where('profile_id', auth()->id())
                ->whereDate('created_at', '>', Carbon::now()->subMonth(3))
                ->get();
            $userViewsCount = $userViews->count();
            $userViews = $userViews->groupBy('user_id');
            $connection = UserConnection::where('from_user_id', auth()->id())->where('status', 1)->get('to_user_id')->pluck('to_user_id')->toArray();
        }

        return view('livewire.home-my-followers', compact('userViews', 'connection', 'userViewsCount'));
    }
}
