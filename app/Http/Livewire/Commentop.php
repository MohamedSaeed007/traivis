<?php

namespace App\Http\Livewire;

use App\Classes\Helper;
use App\Models\Comment;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Commentop extends Component
{
    use AuthorizesRequests;

    public $comment;

    public $commenter;

    public $likeCommentCount;

    public $disLikeCommentCounter;

    public $isReplying = false;

    public $replyState = [
        'comment' => '',
    ];

    public $isEditing = false;

    public $editState = [
        'comment' => '',
    ];

    protected $listeners = [
        'refresh' => '$refresh',
    ];

    protected $validationAttributes = [
        'replyState.comment' => 'reply',
    ];

    public function mount()
    {
        $this->commenter = Helper::getCurrentEntity(1);

        //        dd($this->comment->comment);
        //$this->editState['comment'] = $this->comment->comment;
    }

    public function updatedIsEditing($isEditing)
    {
        if (!$isEditing) {
            return;
        }

        $this->editState = [
            'comment' => $this->comment->comment,
        ];
    }

    public function editComment()
    {
        $this->authorize('update', $this->comment);

        $this->comment->update($this->editState);

        $this->isEditing = false;
    }

    public function deleteComment()
    {
        $this->authorize('destroy', $this->comment);

        $this->comment->delete();

        $this->emitUp('refresh');
    }

    public function postReply()
    {
        if (!$this->comment->hasParent()) {
            return;
        }

        $this->validate([
            'replyState.comment' => 'required',
        ]);

        $reply = $this->comment->children()->make($this->replyState);
        $reply->user()->associate(auth()->user());
        $reply->commentable()->associate($this->comment->commentable);
        $reply->commenterable()->associate($this->commenter);

        $reply->save();

        $this->replyState = [
            'comment' => '',
        ];

        $this->isReplying = false;

        $this->emitSelf('refresh');
    }

    public function likeToParentComment($commentId)
    {
        $comment = Comment::find($commentId);
        $chekIsLiked = $comment
            ->likes()
            ->where('user_id', auth()->user()->id)
            ->where('liked', 1)
            ->first();

        if ($chekIsLiked) {
            $chekIsLiked->delete();
        } else {
            $comment->likes()->create([
                'liked' => 1,
                'user_id' => auth()->user()->id,
            ]);
            $chekIsDisLiked = $comment
                ->disLikes()
                ->where('user_id', auth()->user()->id)
                ->where('liked', 0)
                ->first();
            if ($chekIsDisLiked) {
                $chekIsDisLiked->delete();
            }
        }

        $this->likeCommentCount = $comment->likes->count();
        $this->disLikeCommentCounter = $comment->disLikes->count();
    }

    public function disLikeToParentComment($commentId)
    {
        $comment = Comment::find($commentId);
        $chekIsDisLiked = $comment
            ->disLikes()
            ->where('user_id', auth()->user()->id)
            ->where('liked', 0)
            ->first();
        if ($chekIsDisLiked) {
            $chekIsDisLiked->delete();
        } else {
            $comment->disLikes()->create([
                'liked' => 0,
                'user_id' => auth()->user()->id,
            ]);
            $chekIsLiked = $comment
                ->likes()
                ->where('user_id', auth()->user()->id)
                ->where('liked', 1)
                ->first();
            if ($chekIsLiked) {
                $chekIsLiked->delete();
            }
        }

        $this->likeCommentCount = $comment->likes->count();
        $this->disLikeCommentCounter = $comment->disLikes->count();
    }

    public function render()
    {
        $likeCommentCount = $this->likeCommentCount ? $this->likeCommentCount : null;
        $disLikeCommentCounter = $this->disLikeCommentCounter ? $this->disLikeCommentCounter : null;

        return view('livewire.commentop', compact('likeCommentCount', 'disLikeCommentCounter'));
    }
}
