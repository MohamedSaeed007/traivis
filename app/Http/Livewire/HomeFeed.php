<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class HomeFeed extends Component
{
    use WireToast;
    public $activeTab = 'general';
    public $posts;
    public $hints;
    public $notes;
    public $blogs;
    public $getCurrentEntity;
    protected $listeners = [
        'refresh' => '$refresh',
    ];
    public function mount()
    {
        $this->getCurrentEntity = \App\Classes\Helper::getCurrentEntity();
        $this->posts = Post::with([
            'business.media',
            'business.users',
            'business.settings',
            'business.followers',
            'user.media',
            'user.userPrivacy',
            'comments',
            'media',
        ])
            ->withCount('postViews', 'likes', 'disLikes')
            ->publish()
            ->when(get_class($this->getCurrentEntity) == Business::class, function (Builder $query) {
                $query->orWhere(function (Builder $query) {
                    $query
                        ->where('type', 'blog')
                        ->where('status', 'draft')
                        ->where('business_id', $this->getCurrentEntity->id);
                });
            })
            ->latest()
            ->get();
        $this->notes = $this->posts->whereIn('type', ['note', 'course']);
        $this->hints = $this->posts->where('type', 'hint');
        $this->blogs = $this->posts->where('type', 'blog');
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

    public function render()
    {
        return view('livewire.home-feed');
    }
}
