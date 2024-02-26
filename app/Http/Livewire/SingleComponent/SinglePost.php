<?php

namespace App\Http\Livewire\SingleComponent;

use App\Achievements\PublishedBlogs;
use App\Achievements\PublishedHints;
use App\Achievements\PublishedNotes;
use App\Classes\Helper;
use App\Models\BusinessAppSetting;
use App\Models\BusinessFollow;
use App\Models\Post;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class SinglePost extends Component
{
    use WireToast;
    public Post $post;
    public $showDeletePost = false;
    public $canComment = true;
    public bool $is_owner;
    public $getCurrentEntity;

    public function mount($post)
    {
        $this->post = $post;
        // $this->getCurrentEntity= Helper::getCurrentEntity();
        if (auth()->user()->isActingAsBusiness()) {
            $this->getCurrentEntity = auth()->user()->businesses->first();
        } else {
            $this->getCurrentEntity = auth()->user();
        }
        $this->is_owner = $this->post->business_id
            ? $this->getCurrentEntity->is($this->post->business)
            : $this->getCurrentEntity->is($this->post->user);
        if ($this->post->business_id != null) {
            $rule = $this->post->business->settings->where('key', 'restrict_comments')->first();
            // $rule = BusinessAppSetting::where('business_id', $this->post->business_id)
            //     ->where('key', 'restrict_comments')
            //     ->first();
            if ($rule && $rule->value == 1) {
                if (
                    !$this->post->business->followers->where('user_id', auth()->id())->first()
                    // !BusinessFollow::where('business_id', $this->post->business_id)
                    //     ->where('user_id', auth()->id())
                    //     ->exists()
                ) {
                    $this->canComment = false;
                }
                if (in_array(auth()->id(), $this->post->business->users->pluck('id')->toArray())) {
                    $this->canComment = true;
                }
            }
        }
    }
    public function deletePost()
    {
        if (auth()->user()->isActingAsBusiness()) {
            if ($this->post->type == 'note') {
                $this->getCurrentEntity->removeProgress(new PublishedNotes(), 1);
            }
            if ($this->post->type == 'hint') {
                $this->getCurrentEntity->removeProgress(new PublishedHints(), 1);
            }
            if ($this->post->type == 'blog') {
                $this->getCurrentEntity->removeProgress(new PublishedBlogs(), 1);
            }
        }

        $this->post->delete();
        toast()
            ->success('The blog post has deleted')
            ->pushOnNextPage();


        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.single-component.single-post');
    }
}
