<?php

namespace App\Http\Livewire;

use App\Classes\Helper;
use App\Models\Content;
use App\Models\Course;
use App\Models\InfluencerOffer;
use App\Models\Lecture;
use App\Models\MediaLibrary;
use App\Models\Quiz;
use App\Models\Review;
use App\Models\User;
use App\Models\Wishlist;
use App\Repositories\Views\ViewsRepository;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\MediaStream;

class StudentCourseDetails extends Component
{
    /** @var Course $course */
    public $course;
    public $reviewText;
    public $reviewRate = null;

    public $maker;

    public $hints;

    public $user;

    public $content;

    public $cid;

    public $enrolledConnections;

    public $enrolledStudents;

    public $makerRating;

    public $makerReviewCount;

    public $filterEnrolled;

    public $searchEnrolled;

    public $enrolledStudentsCount;

    public $connectionEnrolledStudentsCount;

    public $nearByEnrolledStudentsCount;

    public $wishlist;

    public $enrolled;

    public $relatedCourses;

    public $rating;

    public $url;

    public bool $isMaker;

    public $overview_video;

    public $reviewReplyText;
    public $acceptedOffer;

    protected $rules = [
        'content' => 'nullable',
    ];

    protected $queryString = [
        'cid' => ['except' => ''],
    ];

    protected $listeners = ['setContent'];

    public function mount($course)
    {
        //Karma
        if (request()->filled('karma')) {
            $karmaKey = request()->query('karma');
            $karmaUser = User::where('user_karma_key', $karmaKey)->first();
            if (!empty($karmaUser)) {
                $this->acceptedOffer = InfluencerOffer::with('campaign')
                    ->where('status', InfluencerOffer::STATUS['accepted'])
                    ->where([
                        'user_id' => $karmaUser->id,
                        'course_id' => $course->id,
                    ])
                    ->first();
            }
        }
        // dd($this->acceptedOffer->campaign);
        $this->user = Auth::user();

        $this->url = request()->fullUrl();
        if ($this->user) {
            $query = parse_url($this->url, PHP_URL_QUERY);
            if ($query) {
                $this->url .= '&karma=' . auth()->user()->user_karma_key;
            } else {
                $this->url .= '?karma=' . auth()->user()->user_karma_key;
            }
        }

        $this->course = $course;
        $this->isMaker = $this->course->isMaker();
        $this->content = 'course-details';
        if ($this->cid) {
            $content = Content::find($this->cid);
            //            dd($content);
            if ($content) {
                $contentable = $content->contentable;
                if ($contentable->course->id == $this->course->id) {
                    $this->content = $contentable;
                }
            }
        }

        $this->enrolled = $this->user?->isEnrolled($this->course->id);

        // $this->relatedCourses = $this->course->relatedCourses();
        $this->maker = $this->course->maker;
        $this->hints = $this->maker->hints;
        //        $this->rating = $this->course->getFinalRatingValue();

        $this->rating = $this->course->rating_value;
        $this->makerRating = $this->course->maker->getFinalRatingValue();
        $this->makerReviewCount = 0;
        foreach ($this->maker->courses as $course) {
            $this->makerReviewCount += $course->reviews->count();
        }
        $this->wishlist = Wishlist::whereUserId($this->user?->id)
            ->whereCourseId($this->course->id)
            ->first();

        $this->overview_video = $this->course->video;
    }

    public function getCourseDetails()
    {
        $this->content = 'course-details';
        $this->reset('cid');
    }

    public function setContent(Content $content)
    {
        $this->cid = $content->id;
        $this->content = $content->contentable;
    }

    public function setEnrolledFilter($filter)
    {
        $this->filterEnrolled == $filter
            ? ($this->filterEnrolled = null)
            : ($this->filterEnrolled = $filter);
    }

    public function toggleWishList()
    {
        //        if (auth::check()) {
        if ($this->wishlist) {
            $this->wishlist->delete();
            $this->wishlist = null;
        } else {
            $this->wishlist = Wishlist::create([
                'user_id' => $this->user->id,
                'course_id' => $this->course->id,
            ]);
        }
        //        } else {
        //          $this->emit('loginRegisterPopup'); //popup has been commented for now
        //        }
    }

    public function downloadResource($mediaId = null)
    {
        if ($mediaId) {
            $media = MediaLibrary::find($mediaId);

            return response()->download($media->getPath(), $media->file_name);
        } else {
            $downloads = $this->content->getMedia('resources');

            return MediaStream::create('my-files.zip')->addMedia($downloads);
        }
    }

    public function render()
    {
        if ($this->user) {
            $enrolledConnections = $this->user->connections()->whereHas('courses', function ($q) {
                $q->where('course_id', $this->course->id);
                $q->where('course_user.status', 'success');
            });
            $this->enrolledConnections = $enrolledConnections->get();
            $courseUsers = $this->course->users();
            $this->nearByEnrolledStudentsCount =
                $courseUsers->where('country_id', $this->user->country_id)->count() - 1;
            $this->connectionEnrolledStudentsCount = $enrolledConnections->count();
            $this->enrolledStudentsCount = $this->course->users->count();
            if ($this->filterEnrolled) {
                if ($this->filterEnrolled == 'connections') {
                    $this->enrolledStudents = $enrolledConnections
                        ->when($this->searchEnrolled, function ($q) {
                            $q->where('name', 'like', '%' . $this->searchEnrolled . '%');
                        })
                        ->get();
                }
                if ($this->filterEnrolled == 'nearBy') {
                    $this->enrolledStudents = $courseUsers
                        ->where('country_id', $this->user->country_id)
                        ->when($this->searchEnrolled, function ($q) {
                            $q->where('name', 'like', '%' . $this->searchEnrolled . '%');
                        })
                        ->get();
                }
            } else {
                if ($this->searchEnrolled) {
                    $this->enrolledStudents = $courseUsers
                        ->where('name', 'like', '%' . $this->searchEnrolled . '%')
                        ->get();
                } else {
                    $this->enrolledStudents = $this->course->users;
                }
            }
        }

        return view('livewire.student-course-details');
    }
    public function postReview()
    {
        $this->validate([
            'reviewRate' => 'required',
            'reviewText' => 'required',
        ]);

        $review =
            $this->course->reviewsProcess()->firstWhere(['user_id' => \auth()->id()]) ??
            new Review([
                'user_id' => \auth()->id(),
            ]);

        $review->review = clean_html($this->reviewText);
        $review->rating = $this->reviewRate;
        $review->status = 'hold';

        $this->course->reviewsProcess()->save($review);
        $this->reset('reviewRate', 'reviewText');
    }

    public function postReviewReply($reviewId)
    {
        try {
            $reviewId = decrypt($reviewId);
        } catch (\Exception $e) {
            return;
        }

        $this->validate([
            'reviewReplyText' => 'required',
        ]);

        $this->course->reviews()->create([
            'user_id' => \auth()->id(),
            'reply_to_id' => $reviewId,
            'review' => clean_html($this->reviewReplyText),
            'rating' => 0,
            'status' => 'hold',
        ]);
        $this->reset('reviewReplyText');
    }
}
