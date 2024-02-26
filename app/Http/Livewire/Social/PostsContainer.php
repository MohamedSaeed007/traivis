<?php

namespace App\Http\Livewire\Social;

use Livewire\Component;
use App\Models\Comment;
use App\Models\Post;
class PostsContainer extends Component
{

    public $post_id,$user,$comment,$likeCount,$disLikeCount;
   

    public function mount($user)
    {
        $this->user = $user;
    }

    // public function likeToParentPost($postId){
    //     $post = Post::find($postId);
    //     $chekIsLiked=$post->likes()->where('user_id',auth()->user()->id)->where('liked',1)->first();
    //     if($chekIsLiked)
    //     {
    //         $chekIsLiked->delete();
    //     } 
    //     else{
    //         $post->likes()->create([
    //             'liked' => 1,
    //             'user_id' => auth()->user()->id
    //         ]);
    //     $chekIsDisLiked=$post->disLikes()->where('user_id',auth()->user()->id)->where('liked',0)->first();
    //     if($chekIsDisLiked)
    //     {

    //         $chekIsDisLiked->delete();
    //     }

    //     }
    
    //      $this->likeCount=$post->likes->count();
    //      $this->disLikeCount=$post->disLikes->count();

    // }

    // public function disLikeToParentPost($postId){
    //     $post = Post::find($postId);
    //     $chekIsDisLiked=$post->disLikes()->where('user_id',auth()->user()->id)->where('liked',0)->first();
    //     if($chekIsDisLiked)
    //     {
    //         $chekIsDisLiked->delete();
    //     } 
    //     else{
    //         $post->disLikes()->create([
    //             'liked' => 0,
    //             'user_id' => auth()->user()->id
    //         ]);
    //     $chekIsLiked=$post->likes()->where('user_id',auth()->user()->id)->where('liked',1)->first();
    //     if($chekIsLiked)
    //     {

    //         $chekIsLiked->delete();
    //     }

    //     }
    
    //      $this->disLikeCount=$post->disLikes->count();
    //      $this->likeCount=$post->likes->count();

    // }


    public function render()
    {
        $likeCount=$this->likeCount?$this->likeCount:null;
        $disLikeCount=$this->disLikeCount?$this->disLikeCount:null;
       
        return view('livewire.social.posts-container',compact('likeCount','disLikeCount'));
    }

}