<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use App\Models\BusinessFollow;
use Illuminate\Support\Str;

class FollowersComponent extends Component
{
    public $data;
    public $followers;
    public $dashBoard;
    public $showMore;

    public function mount()
    {
        $this->dashBoard = request()->segments()[0];
        $followers = BusinessFollow::where('business_id', session('business_id'))->get();
        $this->showMore = $followers->pluck(0, 'id')->toArray();
    }
    public function block($user_id)
    {
        BusinessFollow::where('business_id', session('business_id'))->where('user_id',$user_id)->update([
            'is_blocked'=>1
        ]);
    }
    public function render()
    {
        $this->followers = BusinessFollow::where('business_id', session('business_id'))
        ->where('is_blocked',0)
        ->with(['business.courses','business.posts','user'])
        ->get()->map(function (BusinessFollow $follow) {
            $data = [];
            $coursesCounts = 0;
            foreach ($follow->business->courses as $course) {
                $coursesCount = $course->courseViews()->where('user_id', $follow->user_id)->whereDate('created_at', '>', Carbon::now()->subMonth(3))->count();
                $coursesCounts += $coursesCount;
                $data['courses'][$course->id] = [
                    'views_count' => $coursesCount,
                    'title' => $course->title,
                    'slug' => $course->slug
                ];
            }
            $postsCounts = 0;
            foreach ($follow->business->posts as $post) {
                $postCount = $post->postViews()->where('user_id', $follow->user_id)->whereDate('created_at', '>', Carbon::now()->subMonth(3))->count();
                $postsCounts += $postCount;
                $data['posts'][$post->id] = [
                    'views_count' => $postCount,
                    'title' => $post->title,
                    'type' => $post->type
                ];
            }
            $data['follower'] = [
                'id' => $follow->user->id,
                'avatar' => $follow->user->avatar,
                'user_name' => $follow->user->name,
                'user_email' => Str::mask($follow->user->email, '*', 3, -3),
                'course_views_count' => $coursesCounts,
                'post_views_count' => $postsCounts,
            ];
            return $data;
        });
//        dd($this->followers);
        /*$this->followers = BusinessFollow::with(['courseViews',
            'postViews',])->withCount(['courseViews', 'postViews'])->where('business_id', session('business_id'))->get();
        foreach ($this->followers as $follower) {
            $this->data[$follower->id] = ['avatar' => $follower->user->avatar,
                'user_name' => $follower->user->name,
                'user_email' => Str::mask($follower->user->email, '*', 3, -3),
                'course_views_count' => $follower->course_views_count,
                'post_views_count' => $follower->post_views_count,];
            $courseViews = \App\Models\CourseView::with('course')->withCount('course')
                ->where('user_id', $follower->user->id)
                ->select('course_id', 'id')
                ->groupby('course_id')->selectRaw('count(id) as count_views,course_id,id')
                ->when($this->showMore[$follower->id] == null, function ($q) {
                    $q->limit(5);
                })->get();
            foreach ($courseViews as $courseView) {
                $this->data[$follower->id]['courses_views'][] = ['id' => $courseView->course->id,
                    'title' => Str::limit($courseView->course->title, 20),
                    'count_views' => $courseView->count_views,];
            }

            $postViews = \App\Models\PostView::with('post')->withCount('post')
                ->where('user_id', $follower->user->id)
                ->select('post_id', 'id')
                ->groupby('post_id')->selectRaw('count(id) as count_views,post_id,id')
                ->when($this->showMore[$follower->id] == null, function ($q) {
                    $q->limit(5);
                })->get();
            foreach ($postViews as $postView) {
                $this->data[$follower->id]['posts_views'][] = [
                    'id' => $postView->post->id,
                    'title' => Str::limit($postView->post->title, 15),
                    'count_views' => $postView->count_views,
                    'type' => $postView->post->type,
                ];
            }
        }*/
        return view('livewire.followers-component');
    }
}
