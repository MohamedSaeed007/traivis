<?php

namespace App\Http\Livewire;

use App\Classes\Helper;
use App\Models\Business;
use App\Models\User;
use Livewire\Component;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\Post;
use App\Repositories\Firebase\FcmNotification;

class LikeButton extends Component
{
    public $postId, $likeCount, $disLikeCount, $post, $getCurrentEntity;

    public function mount($post)
    {
        if (auth()->user()->isActingAsBusiness()) {
            $this->getCurrentEntity = auth()->user()->businesses->first();
        } else {
            $this->getCurrentEntity = auth()->user();
        }
        $this->post = $post;
        $this->postId = $post->id;
        $this->likeCount = $post->likes_count;
        $this->disLikeCount = $post->dis_likes_count;
    }

    // #[Computed]
    // public function getPost(){
    //     return $this->post;
    // }

    public function likeToParentPost()
    {
        // $postId = $this->postId;
        $post = $this->post;
        $chekIsLiked = $post
            ->likes
            ->where('user_id', auth()->user()->id)
            ->where('liked', 1)
            ->first();
        if ($chekIsLiked) {
            $chekIsLiked->delete();
        } else {
            $post->likes()->create([
                'liked' => 1,
                'user_id' => auth()->user()->id,
            ]);
            $chekIsDisLiked = $post
                ->disLikes
                ->where('user_id', auth()->user()->id)
                ->where('liked', 0)
                ->first();
            if ($chekIsDisLiked) {
                $chekIsDisLiked->delete();
            }
            ////////////create notification
            if (auth()->check() && auth()->id() != $post->user_id) {
                $title = ucfirst(strtolower($post->type)) . ' Like';
                $body = 'liked your ' . strtolower($post->type);

                $notification = new Notification();
                $notification->user_id = auth()->id();
                $notification->note_type = $body;
                $notification->note_time = now();
                $notification->note_status = '1';
                $notification->notifiable()->associate($post->business ? $post->business : $post->user);
                $notification->notifierable()->associate($this->getCurrentEntity);
                $notification->url = route('post.show', ['id' => $post->id]);
                $notification->save();

                //                $notification = [
                //                    'note_type' => $body,
                //                    'note_time' => now(),
                //                    'note_status' => '1',
                //                    'user_id' => auth()->id(),
                //                    'notifiable_type' => $post->business_id ? Business::class : User::class,
                //                    'notifiable_id' => $post->business_id ?? $post->user_id,
                //                    'url' => route('post.show', ['id' => $post->id]),
                //                ];
                //                Notification::create($notification);

                FcmNotification::sendNotification(['title' => $title, 'body' => $body]);
            }
        }

        $this->likeCount = $post->likes_count;
        $this->disLikeCount = $post->dis_likes_count;
    }

    public function disLikeToParentPost()
    {
        // $postId = $this->postId;

        $post = $this->post;
        $chekIsDisLiked = $post
            ->disLikes
            ->where('user_id', auth()->user()->id)
            ->where('liked', 0)
            ->first();
        if ($chekIsDisLiked) {
            $chekIsDisLiked->delete();
        } else {
            $post->disLikes()->create([
                'liked' => 0,
                'user_id' => auth()->user()->id,
            ]);
            $chekIsLiked = $post
                ->likes
                ->where('user_id', auth()->user()->id)
                ->where('liked', 1)
                ->first();
            if ($chekIsLiked) {
                $chekIsLiked->delete();
            }
            ////////////create notification
            ///
            if (auth()->check() && auth()->id() != $post->created_by) {
                $title = ucfirst(strtolower($post->type)) . ' Dislike';
                $body = 'disliked your ' . strtolower($post->type);

                $notification = new Notification();
                $notification->user_id = auth()->id();
                $notification->note_type = $body;
                $notification->note_time = now();
                $notification->note_status = '1';
                $notification->notifiable()->associate($post->business ? $post->business : $post->user);
                $notification->notifierable()->associate($this->getCurrentEntity);
                $notification->url = route('post.show', ['id' => $post->id]);
                $notification->save();

                //            $notification = [
                //                'note_type' => $body,
                //                'note_time' => now(),
                //                'note_status' => '1',
                //                'user_id' => auth()->id(),
                //                'notifiable_type' => $post->business_id ? Business::class : User::class,
                //                'notifiable_id' => $post->business_id ?? $post->user_id,
                //                'url' => route('post.show', ['id' => $post->id]),
                //            ];
                //            Notification::create($notification);

                FcmNotification::sendNotification(['title' => $title, 'body' => $body]);
            }
        }
        $this->disLikeCount = $post->dis_likes_count;
        $this->likeCount = $post->likes_count;
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
