<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class HomeFeedPost extends Component
{
    //Deprecated
    public $posts;

    protected $listeners = [
        'refresh' => 'getPosts'
    ];

    public function mount()
    {
        $this->posts = Post::withCount('postViews', 'likes', 'disLikes')->whereIn('type', ['note', 'course'])->latest()->get();
        // dd($this->posts);
    }

    public function getPosts()
    {
        $this->posts = Post::withCount('postViews', 'likes', 'disLikes','comments')->whereIn('type', ['note', 'course'])->latest()->get();
    }

    /* public function like(Post $post)
    {
        $postLike = $post->likes()->whereUserId(auth()->user()->id);
        if ($postLike->exists()) {
            $postLike->delete();
        } else {
            $post->likes()->create([
                'liked' => 1,
                'user_id' => auth()->user()->id,
            ]);
        }
    }
    public function disLike(Post $post)
    {
        $postDisLike = $post->disLikes()->whereUserId(auth()->user()->id);
        if ($postDisLike->exists()) {
            $postDisLike->delete();
        } else {
            $post->disLikes()->create([
                'user_id' => auth()->user()->id,
            ]);
        }
    }

    public function likeComment(Comment $comment)
    {
        $commentLike = $comment->likes()->whereUserId(auth()->user()->id);
        if ($commentLike->exists()) {
            $commentLike->delete();
        } else {
            $comment->likes()->create([
                'liked' => 1,
                'user_id' => auth()->user()->id,
            ]);
        }
    }

    public function addComment(Post $post)
    {
        $post->comments()->create([
            'comment' => $this->comment[$post->id],
            'parent_id' => null,
            'user_id' => auth()->user()->id,
        ]);
        $this->comment[$post->id] = '';
    } */

    public function render()
    {
        return view('livewire.home-feed-post');
    }
}
