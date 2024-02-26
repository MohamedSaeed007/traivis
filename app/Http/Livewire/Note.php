<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class Note extends Component
{
    public $post_id,$user,$comment;
    public function render()
    {
        return view('livewire.note');
    }

    public function mount($user)
    {
        $this->user = $user;
    }

    public function addNewComment($postId){
//        dd($postId);
        $post = Post::find($postId);
        $post->comments()->create([
            'comment' => $this->comment,
            'parent_id' => null,
            'user_id' => 1
        ]);
        $this->comment = '';
    }

    public function likeToParentPost($postId){
        $like = Post::find($postId);
        $like->likes()->create([
            'liked' => 1,
            'user_id' => 1
        ]);
    }

    public function disLikeToParentPost($postId){
        $like = Post::find($postId);
        $like->likes()->create([
            'liked' => 0,
            'user_id' => 1
        ]);
    }

    public function likeComment($commentId){
        $comment = Comment::find($commentId);
        $comment->likes()->create([
            'liked' => 1,
            'user_id' => 1
        ]);
    }
}
