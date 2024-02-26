<?php

namespace App\Http\Livewire;

use App\Classes\Helper;
use App\Models\Blog;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class HomeFeedBlog extends Component
{
    use WireToast;
    public $posts;
    public $getCurrentEntity;
    protected $listeners = [
        'refresh' => '$refresh',
    ];

    public function mount()
    {
        $isABusiness =
            auth()->check() &&
            auth()
                ->user()
                ->isActingAsBusiness();

        $this->getCurrentEntity = \App\Classes\Helper::getCurrentEntity();
        $this->posts = Post::withCount('postViews')
            ->where('type', 'blog')
            ->where(function (Builder $query) {
                $query->where('status', 'Published');
            })
            ->when($isABusiness, function (Builder $query) {
                $query->orWhere(function (Builder $query) {
                    $query
                        ->where('status', 'draft')
                        ->where('business_id', Helper::getCurrentEntity()->id);
                });
            })
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.home-feed-blog');
    }

    public function deletePost($id)
    {
        if ($post = Post::find($id)) {
            if ($this->isOwner($post)) {
                $post->delete();
                toast()
                    ->success('The blog post has deleted')
                    ->pushOnNextPage();

                return redirect()->route('home');
            } else {
                toast()
                    ->danger('Unauthorized to delete the blog post.')
                    ->push();
            }
        } else {
            toast()
                ->danger('The blog post does not exist.')
                ->push();
        }
    }

    public function isOwner($post)
    {
        return $post->business_id
            ? $this->getCurrentEntity->is($post->business) &&
                    auth()
                        ->user()
                        ?->can($post->type . '_edit')
            : $this->getCurrentEntity->is($post->user);
    }
}
