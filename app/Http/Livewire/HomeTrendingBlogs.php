<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Carbon\Carbon;
use Livewire\Component;

class HomeTrendingBlogs extends Component
{
    public $blogs;
    public function mount()
    {
        $this->blogs = Post::withOnly('media')->whereType('blog')->whereHas('postViews', function ($q) {
            $q->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString());
        })->withCount('postViews')->orderby('post_views_count', 'desc')->limit(5)->get();
        // dd($this->blogs);
    }
    public function render()
    {
        return view('livewire.home-trending-blogs');
    }
}
