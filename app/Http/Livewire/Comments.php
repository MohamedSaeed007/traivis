<?php

namespace App\Http\Livewire;

use App\Classes\Helper;
use App\Models\Business;
use App\Models\BusinessAppSetting;
use App\Models\BusinessFollow;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\User;
use App\Repositories\Firebase\FcmNotification;
use Livewire\Component;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithPagination;

    public $model;

    public $postCommentCounter;

    public $commenter;

    public $allowViewComments = true;

    public $showAdminText = false;

    public $newCommentState = [
        'comment' => '',
    ];

    protected $validationAttributes = [
        'newCommentState.comment' => 'comment',
    ];

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function mount($model)
    {
        if (auth()->user()->isActingAsBusiness()) {
            $this->commenter = auth()->user()->businesses->first();
        } else {
            $this->commenter = auth()->user();
        }
        if ($model->business_id) {
            $key = $this->model->business->settings->where('key', 'restrict_comments')->first();
            // $key = BusinessAppSetting::where('business_id', $model->business_id)
            //     ->where('key', 'restrict_comments')
            //     ->first();
            if ($key && $key->value == 1) {
                if (auth()->id() == $model->created_by) {
                    $this->showAdminText = true;
                }
                ////////check this space belong to user
                //////// check this user is a folower
                if (
                    !in_array(auth()->id(), $model->business->users->pluck('id')->toArray()) ||
                    !$this->model->business->followers->where('user_id', auth()->id())->first()
                ) {
                    ////////////need ui page for not allowed
                    $this->allowViewComments = false;
                }
            }
        }
        // dd($model->business);
        $this->postCommentCounter = $model->comments_count;
    }

    public function postComment()
    {
        $this->validate([
            'newCommentState.comment' => 'required',
        ]);
        $this->newCommentState['comment'] = trim($this->newCommentState['comment']);
        /** @var Comment $comment */
        $comment = $this->model->comments()->make($this->newCommentState);
        $comment->user()->associate(auth()->user());
        $comment->commenterable()->associate($this->commenter);
        $comment->save();

        $this->newCommentState = [
            'comment' => '',
        ];

        // $this->resetPage();
        $this->postCommentCounter = $this->model->comments_count;

        // $this->postCommentCounter = $this->model
        //     ->comments()
        //     ->with(
        //         'user',
        //         'children.user',
        //         'children.children',
        //         //                'commenterable',
        //         //                'children.commenterable',
        //     )
        //     ->parent()
        //     ->count();
        ////////////create notification
        $title = 'Comment';
        $body = 'Made a comment on your post.';

        if (auth()->check() && auth()->id() != $this->model->created_by) {
            $notification = new Notification();
            $notification->user_id = auth()->id();
            $notification->note_type = $body;
            $notification->note_time = now();
            $notification->note_status = '1';
            $notification->notifiable()->associate($this->model->business ?: $this->model->user);
            $notification->notifierable()->associate($this->commenter);
            $notification->url = route('post.show', ['id' => $this->model->id]);
            $notification->save();

            //            $notification = [
            //                'note_type' => $body,
            //                'note_time' => now(),
            //                'note_status' => '1',
            //                'user_id' => auth()->id(),
            //                'notifiable_type' => $this->model->business_id ? Business::class : User::class,
            //                'notifiable_id' => $this->model->business_id ?? $this->model->user_id,
            //                'url' => route('post.show', ['id' => $this->model->id]),
            //            ];
            //            Notification::create($notification);

            FcmNotification::sendNotification(['title' => $title, 'body' => $body]);
        }
    }

    public function render()
    {
        $comments = $this->model->comments;
        // $comments = $this->model
        //     ->comments
        //     ->with(
        //         'user',
        //         'children.user',
        //         'children.children',
        //         'commenterable',
        //         'children.commenterable',
        //     )
        //     ->parent()
        //     ->oldest()
        //     // ->orderBy('id','asc')

        //     ->get();
        // ->paginate(3);
        return view('livewire.comments', [
            'comments' => $comments,
            'postCommentCounter' => $this->postCommentCounter,
        ]);
    }
}
