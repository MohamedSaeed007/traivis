<?php

namespace App\Http\Livewire\Social;

use App\Achievements\GotFollowers;
use App\Models\Business;
use Livewire\Component;
use App\Models\BusinessFollow;
use App\Models\UserConnection;

class FollowBusiness extends Component
{
    public $business_id;
    public $status;
    public $userType;
    public $connection_status;
    public $urlSegment;
    public function mount()
    {
        $this->connection_status = $this->checkConnectStatus();
    }
    public function checkFollowStatus()
    {
        $checkStatus = BusinessFollow::where('business_id', $this->business_id)
            ->where('user_id', auth()->user()->id)
            ->count();

        $this->status = $checkStatus ? 'UnFollow' : 'Follow';

        return $checkStatus;
    }
    public function checkConnectStatus()
    {
        $checkConnection = UserConnection::where(function ($q) {
            $q->where('from_user_id', auth()->id())->where('to_user_id', $this->business_id);
        })
            // ->orWhere(function ($q) {
            //     $q->where('to_user_id', auth()->user()->id)->orWhere('from_user_id', $this->business_id);
            // })
            ->first();
        if ($checkConnection) {
            if ($checkConnection->from_user_id == auth()->user()->id) {
                switch ($checkConnection->status) {
                    case 0:
                        $this->connection_status = 'Pending';
                        break;
                    case 2:
                        $this->connection_status = 'Blocked';
                        break;

                    default:
                        $this->connection_status = 'Connected';
                        break;
                }
                // $this->connection_status = $checkConnection->status == 0 ? 'Pending' : 'Connected';
            } elseif ($checkConnection->to_user_id == auth()->user()->id) {
                switch ($checkConnection->status) {
                    case 0:
                        $this->connection_status = 'Confirm';
                        break;
                    case 2:
                        $this->connection_status = 'Blocked';
                        break;

                    default:
                        $this->connection_status = 'Connected';
                        break;
                }
                // $this->connection_status = $checkConnection->status == 0 ? 'Confirm' : 'Connected';
            }
        } else {
            $this->connection_status = 'Connect';
        }
        return $this->connection_status;
    }
    public function follow_business()
    {
        if ($this->userType == 'user') {
            $connection_status = $this->checkConnectStatus();
            switch ($connection_status) {
                case 'Connect':
                    //Do Connect
                    UserConnection::create([
                        'from_user_id' => auth()->user()->id,
                        'to_user_id' => $this->business_id
                    ]);
                    break;
                case 'Pending' || 'Connected':
                    //Delete Connect
                    $checkConnection = UserConnection::where(function ($q) {
                        $q->where('from_user_id', auth()->user()->id)->orWhere(
                            'to_user_id',
                            $this->business_id
                        );
                    })
                        ->orWhere(function ($q) {
                            $q->where('to_user_id', auth()->user()->id)->orWhere(
                                'from_user_id',
                                $this->business_id
                            );
                        })
                        ->first();

                    if ($checkConnection->from_user_id == auth()->user()->id) {
                        ////////////////need to check why to delete the connection this delete all connection in DB
                        // UserConnection::where(function ($q) {
                        //     $q->where('from_user_id', auth()->user()->id)->orWhere(
                        //         'to_user_id',
                        //         $this->business_id
                        //     );
                        // })->delete();
                    } elseif ($checkConnection->to_user_id == auth()->user()->id) {
                        if ($checkConnection->status == 0) {
                            UserConnection::where(function ($q) {
                                $q->where('to_user_id', auth()->user()->id)->orWhere(
                                    'from_user_id',
                                    $this->business_id
                                );
                            })->update(['status' => 1]);
                        } else {
                            ////////////////need to check why to delete the connection this delete all connection in DB
                            // UserConnection::where(function ($q) {
                            //     $q->where('to_user_id', auth()->user()->id)->orWhere(
                            //         'from_user_id',
                            //         $this->business_id
                            //     );
                            // })->delete();
                        }
                    }

                    break;
            }
            $this->checkConnectStatus();
        } else {
            $checkStatus = $this->checkFollowStatus();
            if ($checkStatus) {
                $businessFollow = BusinessFollow::where('business_id', $this->business_id)
                    ->where('user_id', auth()->user()->id)
                    ->first();
                $businessFollow->business->removeProgress(new GotFollowers(), 1);
                $businessFollow->delete();

                $this->status = $businessFollow ? 'UnFollow' : 'Follow';
            } else {
                if ($this->business_id != auth()->user()->id || $this->urlSegment == 'b') {
                    $makeBusinessFollow = BusinessFollow::create([
                        'business_id' => $this->business_id,
                        'user_id' => auth()->user()->id,
                        'created_at' => now()
                    ]);
                    //Increment Achievement Progress
                    $makeBusinessFollow->business->addProgress(new GotFollowers(), 1);

                    $this->status = $makeBusinessFollow ? 'Follow' : 'UnFollow';
                }
            }
        }
    }
    public function render()
    {
        $business_id = $this->business_id;
        $userType = $this->userType;
        $business = null;
        if ($userType != 'user') {
            $business  = Business::findOrfail($business_id);
        }
        $this->checkFollowStatus();
        $status = $this->status;
        $connection_status = $this->connection_status;
        $urlSegment = $this->urlSegment;
        return view(
            'livewire.social.follow-business',
            compact('business_id', 'status', 'userType', 'connection_status', 'urlSegment', 'business')
        );
    }
}
