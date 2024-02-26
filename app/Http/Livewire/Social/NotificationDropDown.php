<?php

namespace App\Http\Livewire\Social;

use App\Classes\Helper;
use App\Models\Business;
use App\Models\User;
use Livewire\Component;
use App\Models\Notification;
use App\Repositories\Firebase\FcmNotification;
class NotificationDropDown extends Component
{
    public $user_id;
    public $model;
    public $notifications;

    public function mount()
    {
        //todo: replace user_id by model->id
        $this->model = getPermissionsTeamId() ? Business::find(getPermissionsTeamId()) : auth()->user();

        $this->user_id = auth()->user()->id;
        $this->notifications = $this->getNotifications();
    }

    public function getNotifications()
    {
        return Notification::whereMorphedTo('notifiable', $this->model)
            ->where('note_status', '1')
            ->orderBy('id', 'desc')
            ->get();
    }

    public function testFCM()
    {
        $title = 'test ' . rand(1000, 10000);
        $body = 'Notification Content ' . rand(1000, 10000);

        $notification = new Notification();
        $notification->user_id = auth()->id();
        $notification->note_type = $body;
        $notification->note_time = now();
        $notification->note_status = '1';
        $notification->notifierable()->associate(Helper::getCurrentEntity());
        $notification->save();

        //        $notification = [
        //            'note_type' => $body,
        //            'note_time' => now(),
        //            'note_status' => '1',
        //            'user_id' => auth()->user()->id,
        //        ];
        //        Notification::create($notification);

        FcmNotification::sendNotification(['title' => $title, 'body' => $body]);

        $this->notifications = $this->getNotifications();
    }

    public function render()
    {
        $notifications = $this->notifications;
        return view('livewire.social.notification-drop-down', compact('notifications'));
    }
}
