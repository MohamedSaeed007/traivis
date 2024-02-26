<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use App\Models\PostView;
use App\Models\TC_Language;
use App\Models\Testimonial;
use App\Models\TR_Language;
use App\Models\TrainingCenter;
use App\Models\User;
use App\Models\UserProfileView;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        if (\request()->get('enterprise')) {
            $title = 'Enterprise title here';
            return view('homes.social.profile.social.enterprise', compact('title'));
        }

        $title = __t('home_page_title');
        // $new_courses = Course::publish()
        //     ->orderBy('created_at', 'desc')
        //     ->take(12)
        //     ->get();
        // $featured_courses = Course::publish()
        //     ->whereIsFeatured(1)
        //     ->orderBy('featured_at', 'desc')
        //     ->take(6)
        //     ->get();
        // $popular_courses = Course::publish()
        //     ->whereIsPopular(1)
        //     ->orderBy('popular_added_at', 'desc')
        //     ->take(3)
        //     ->get();
        // $posts = Post::post()
        //     ->publish()
        //     ->take(3)
        //     ->get();
        // $testimonials = Testimonial::where('status', 1)->get();

        $user = null;
        if (auth()->user()) {
            $user = auth()->user()->loadCount(['profileViews' => function ($q) {
                $q->whereDate('created_at', '>', Carbon::now()->subMonth(3));
            }]);
            // $user = User::withCount(['profileViews' => function ($q) {
            //     $q->whereDate('created_at', '>', Carbon::now()->subMonth(3));
            // }])->find($user->id);
            // $connections = auth()->user()->connections;
            // dd($user);
            // $user->load('businesses');
            // dd($user);
            // $user = auth()
            //     ->user()
            //     //                ->loadCount('businesses')
            //     ->load('businesses')
            //     ;
        }
        /*$userPosts = Post::where('user_id',auth()->id())
            ->pluck('id')
            ->toArray();*/
        // $userViews = UserProfileView::where('profile_id', $user->id)
        //     ->whereDate('created_at', '>', Carbon::now()->subMonth(3))
        //     ->get();
        return view(
            'homes.social.feed.user',
            compact(
                'user',
                'title',
                // 'new_courses',
                // 'featured_courses',
                // 'popular_courses',
                // 'posts',
                // 'testimonials',
                // 'userViews'
            )
        );
        // return view(
        //     theme('index'),
        //     compact(
        //         'title',
        //         'new_courses',
        //         'featured_courses',
        //         'popular_courses',
        //         'posts',
        //         'testimonials'
        //     )
        // );
    }

    public function profile()
    {
        return 'profile';
    }

    public function educators()
    {
        if (auth()->user()) {
            $user = auth()->user();
            return view('pages.educators', compact('user'));
        }
    }

    public function courses(Request $request)
    {
        if (auth()->user()) {
            $user = auth()->user();
            return view('homes.social.layouts.courses', compact('user'));
        }
        return view(
            'homes.social.layouts.courses'
            //                ,compact('courses','categories','topics')
        );
        //        } else {
        //            return view('homes.social.home.login', ['noFooter' => true]);
        //        }
        // dd($r->all());
        $title = __t('courses');
        $freeResource = $request->free_resource;
        $categories = Category::parent()
            ->with('sub_categories')
            ->get();
        $topics = Category::whereCategoryId($request->category)->get();

        $courses = Course::query()->where(function ($q) use ($freeResource) {
            if ($freeResource != '') {
                $q->where([['price_plan', 'free'], ['user_id', 1]]);
            }
        });
        $courses = $courses->publish();

        if ($request->path() === 'featured-courses') {
            $title = __t('featured_courses');
            $courses = $courses->where('is_featured', 1);
        } elseif ($request->path() === 'popular-courses') {
            $title = __t('popular_courses');
            $courses = $courses->where('is_popular', 1);
        }

        if ($request->q) {
            $courses = $courses->where('title', 'LIKE', "%{$request->q}%");
        }
        if ($request->category) {
            $courses = $courses->where('second_category_id', $request->category);
        }
        if ($request->topic) {
            $courses = $courses->where('category_id', $request->topic);
        }
        if ($request->level && !in_array(0, $request->level)) {
            $courses = $courses->whereIn('level', $request->level);
        }
        if ($request->price) {
            $courses = $courses->whereIn('price_plan', $request->price);
        }
        if ($request->rating) {
            $courses = $courses->where('rating_value', '>=', $request->rating);
        }
        //live section
        if ($request->level_section) {
            $courses = $courses
                ->join('sections', 'sections.course_id', 'courses.id')
                ->whereIn('sections.section_type', $request->level_section)
                ->groupBy('courses.id');
        }

        /**
         * Find by Video Duration
         */
        if ($request->video_duration === '0_2') {
            $durationEnd = 60 * 60 * 3 - 1; //02:59:59
            $courses = $courses->where('total_video_time', '<=', $durationEnd);
        } elseif ($request->video_duration === '3_5') {
            $durationStart = 60 * 60 * 3;
            $durationEnd = 60 * 60 * 6 - 1;
            $courses = $courses->whereBetween('total_video_time', [$durationStart, $durationEnd]);
        } elseif ($request->video_duration === '6_10') {
            $durationStart = 60 * 60 * 6;
            $durationEnd = 60 * 60 * 11 - 1;
            $courses = $courses->whereBetween('total_video_time', [$durationStart, $durationEnd]);
        } elseif ($request->video_duration === '11_20') {
            $durationStart = 60 * 60 * 11;
            $durationEnd = 60 * 60 * 21 - 1;
            $courses = $courses->whereBetween('total_video_time', [$durationStart, $durationEnd]);
        } elseif ($request->video_duration === '21') {
            $durationStart = 60 * 60 * 21;
            $courses = $courses->where('total_video_time', '>=', $durationStart);
        }

        switch ($request->sort) {
            case 'most-reviewed':
                $courses = $courses->orderBy('rating_count', 'desc');
                break;
            case 'highest-rated':
                $courses = $courses->orderBy('rating_value', 'desc');
                break;
            case 'newest':
                $courses = $courses->orderBy('published_at', 'desc');
                break;
            case 'price-low-to-high':
                $courses = $courses->orderBy('price', 'asc');
                break;
            case 'price-high-to-low':
                $courses = $courses->orderBy('price', 'desc');
                break;
            default:
                if ($request->path() === 'featured-courses') {
                    $courses = $courses->orderBy('featured_at', 'desc');
                } elseif ($request->path() === 'popular-courses') {
                    $courses = $courses->orderBy('popular_added_at', 'desc');
                } else {
                    $courses = $courses->orderBy('created_at', 'desc');
                }
        }

        $per_page = $request->perpage ? $request->perpage : 12;
        $courses = $courses->paginate($per_page);

        return view(theme('courses'), compact('title', 'courses', 'categories', 'topics'));
    }

    public function clearCache()
    {
        //        Artisan::call('debugbar:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('optimize:clear');
        if (function_exists('exec')) {
            exec('rm ' . storage_path('logs/*.log'));
        }
        //        $this->rrmdir(storage_path('logs/'));

        return redirect(route('home'));
    }

    public function rrmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != '.' && $object != '..') {
                    if (is_dir($dir . '/' . $object)) {
                        $this->rrmdir($dir . '/' . $object);
                    } else {
                        unlink($dir . '/' . $object);
                    }
                }
            }
            //rmdir($dir);
        }
    }

    public function userProfile(Request $r, $id)
    {
        if ($id) {
            $user = User::find($id);
            $per_page = $r->perpage ? $r->perpage : 10;
            $courses = Course::whereUserId($user->id)->paginate($per_page);
            $traininCenterLaganguages = TC_Language::where('user_id', $id)
                ->pluck('language_id')
                ->toArray();
            $trainerLaganguages = TR_Language::where('user_id', $id)
                ->pluck('language_id')
                ->toArray();
            $trainingCenter = TrainingCenter::where('user_id', $id)->first();

            // dd($traininCenterLaganguages);
            //$myCourses = Course::whereUserId($user->id)->get();
            return view(
                theme('user_profile'),
                compact(
                    'user',
                    'courses',
                    'traininCenterLaganguages',
                    'trainerLaganguages',
                    'trainingCenter'
                )
            );
        }
    }
}
