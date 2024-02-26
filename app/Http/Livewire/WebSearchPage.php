<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\Course;
use App\Models\Post;
use App\Models\User;
use App\Models\UserConnection;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use PDO;
use Usernotnull\Toast\Concerns\WireToast;

class WebSearchPage extends Component
{
    use WireToast;
    public $search;
    protected $listeners = [
        'doFilter' => 'updateFilters',
    ];
    public function mount()
    {
        if (request()->query('search')) {
            $this->search = request()->query('search');
        }
    }
    public function updateFilters($filter)
    {
        $this->search = $filter['search'];
    }
    public function makeFollow($user_id)
    {
        $user = User::findOrFail($user_id);

        UserConnection::create([
            'from_user_id' => auth()->id(),
            'to_user_id' => $user_id,
        ]);
        toast()
            ->success('You just followed: ' . $user->name)
            ->push();
    }
    public function render()
    {
        //        $notes___ = Post::where('type', 'note')
        //            ->orderBy('id', 'desc')
        //            ->limit(3);
        //
        //        $hints__ = Post::where('type', 'hint')
        //            ->orderBy('id', 'desc')
        //            ->limit(3);
        //
        //        $blogs__ = Post::where('type', 'blog')
        //            ->orderBy('id', 'desc')
        //            ->limit(3);
        //
        //        $latestPosts = $notes___
        //            ->union($hints__)
        //            ->union($blogs__)
        //            ->orderBy('id', 'desc')
        //            ->get();
        //        dd($latestPosts->toArray());

        $hints = null;
        $courses = null;
        $notes = null;
        $blogs = null;
        $people = null;
        //        $institutions = null;
        $freelancers = null;
        $connection = UserConnection::where('from_user_id', auth()->id())
            ->get(['to_user_id'])
            ->pluck('to_user_id')
            ->toArray();
        if ($this->search) {
            $results = Post::publish()
                ->where(function (Builder $query) {
                    $query
                        ->where('title', 'like', '%' . $this->search . '%')
                        ->orWhereFullText('post_content', $this->search)
                        ->orWhereFullText('overview', $this->search);
                })
                ->get();
            $courses = Course::where(function (Builder $query) {
                $query
                    ->whereRelation('courseDetails', 'title', 'like', '%' . $this->search . '%')
                    ->orWhereRelation('courseDetails', 'description', 'like', '%' . $this->search . '%');
            })->get();
            $hints = $results->where('type', 'hint');
            $notes = $results->whereIn('type', ['note', 'course']);
            $blogs = $results->where('type', 'blog');
            $people = User::where('first_name', 'like', '%' . $this->search . '%')
                ->orWhere('middle_name', 'like', '%' . $this->search . '%')
                ->orWhere('last_name', 'like', '%' . $this->search . '%')
                ->orWhere('name', 'like', '%' . $this->search . '%')
                ->get();
            $business = Business::whereIn('business_type', ['instructor', 'institute'])
                ->where('business_name', 'like', '%' . $this->search . '%')
                ->get();
            //            $institutions = $business->where('business_type', 'institute');
            $freelancers = $business->where('business_type', 'instructor');
        }

        return view(
            'livewire.web-search-page',
            compact(
                'hints',
                'courses',
                'notes',
                'blogs',
                'people',
                //                'institutions',
                'freelancers',
                'connection',
            ),
        );
    }
}
