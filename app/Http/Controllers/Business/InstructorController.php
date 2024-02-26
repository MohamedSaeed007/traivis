<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Content;
use App\Models\Course;
use App\Models\InfluencerCampaign;
use App\Models\InfluencerOffer;
use App\Models\InstituteInstructorInvitation;
use App\Models\Payment;
use App\Models\TeaserOriginalDraft;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class InstructorController extends Controller
{
    public function index()
    {
        return view('homes.social.business.instructor.index');
    }

    public function courses()
    {
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('homes.social.business.instructor.courses');
    }

    public function courseDetails(Request $request)
    {
        $id = $request->id;
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!is_null($id)) {
            // dd(__LINE__);
            $course = Course::find($id);
            if (!$course) {
                // dd(__LINE__);
                return back();
            }
        }
        $course_id = $id;
        // dd($id);

        return view('homes.social.business.instructor.course_details', compact('course_id'));
    }

    public function courseAssignments($id = null)
    {
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!is_null($id)) {
            $course = Course::find($id);
            if (!$course) {
                return back();
            }
        }
        $course = Course::find($id);
        $assignment = Content::where('course_id', $course->id)->first();
        if (!$assignment) {
            $assignment = new Content();
        }
        return view(
            'homes.social.business.instructor.course_assignments',
            compact('course', 'assignment'),
        );
    }

    public function courseLectures($id = null)
    {
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $course_id = $id;
        return view('homes.social.business.instructor.course_lectures', compact('course_id'));
    }

    public function courseSections($id = null)
    {
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $course_id = $id;
        return view('homes.social.business.instructor.course_sections', compact('course_id'));
    }

    public function courseQuizes($id = null)
    {
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $course_id = $id;
        return view('homes.social.business.instructor.course_quizes', compact('course_id'));
    }

    public function students()
    {
        abort_if(Gate::denies('students_enrolled_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('homes.social.business.instructor.students');
    }

    public function freelance()
    {
        abort_if(
            Gate::denies('freelances_access') || !config('traivis.education_institute_enabled'),
            Response::HTTP_FORBIDDEN,
            '403 Forbidden',
        );
        return view('homes.social.business.instructor.freelance');
    }

    public function followers()
    {
        return view('homes.social.business.instructor.followers');
    }

    public function rank()
    {
        if (!session('business_id')) {
            return redirect()->route('home');
        }
        return view('homes.social.business.instructor.rank');
    }

    public function calender()
    {
        abort_if(Gate::denies('calenders_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('homes.social.business.instructor.calender');
    }

    public function rewards()
    {
        abort_if(Gate::denies('claim_rewards_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //todo: what is this?
        //        session('business_id')
        $business = Business::find(2);

        return view('homes.social.business.instructor.rewards', compact('business'));
    }

    public function mkt_manager()
    {
        abort_if(Gate::denies('managing_mkt_portals'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $count_campaigins = TeaserOriginalDraft::whereRelation(
            'course',
            'business_id',
            session('business_id'),
        )
            ->groupBy('course_id')
            ->get()
            ->count();
        $campaigns = TeaserOriginalDraft::whereRelation('course', 'business_id', session('business_id'))
            ->withCount([
                'socialDates as in_progress_dates' => function ($query) {
                    $query->where('status', 'in_progress');
                },
                'socialDates as published_dates' => function ($query) {
                    $query->where('status', 'published');
                },
                'socialDates as declined_dates' => function ($query) {
                    $query->where('status', 'declined');
                },
            ])
            ->groupBy('course_id')
            ->get();

        //Get Count of on going and finished campaigns
        $count_on_going = 0;
        $count_finished = 0;
        $socialPosts = \App\Models\TeaserOriginalDraft::whereRelation(
            'course',
            'business_id',
            session('business_id'),
        )
            ->groupBy('course_id')
            ->has('socialPosts')
            ->get();

        foreach ($socialPosts as $p) {
            $date_arr = [];

            $ps = $p->socialPosts;
            foreach ($ps as $pp) {
                $pp->postDates;

                if ($pp->postDates->count()) {
                    foreach ($pp->postDates as $pd) {
                        $date_arr[] = $pd->id;
                    }
                }
            }
            $socialDates = \App\Models\SocialPostDate::whereIn('id', $date_arr)
                ->select(
                    \DB::raw(
                        'min(publish_date) as min_publish_date,max(publish_date) as max_publish_date',
                    ),
                )
                ->first();

            if ($socialDates->max_publish_date < now()) {
                $count_finished += 1;
            } else {
                $count_on_going += 1;
            }
        }
        //End Count
        //Total Slots
        $totalSlots = 0;
        $ts = TeaserOriginalDraft::whereRelation('course', 'business_id', session('business_id'))->get();
        foreach ($ts as $t) {
            $ds = $t->socialPosts;
            foreach ($ds as $d) {
                $totalSlots += $d->postDates->count();
            }
        }
        //End Total Slots

        //Get Social Percents from slots
        //Facebook
        $facebookSlots = 0;
        $ts = TeaserOriginalDraft::whereRelation('course', 'business_id', session('business_id'))->get();
        foreach ($ts as $t) {
            $ds = $t->socialPosts->where('social_media_id', 2);
            foreach ($ds as $d) {
                $facebookSlots += $d->postDates->where('social_post_id', $d->id)->count();
            }
        }
        $face_percent = $totalSlots > 0 ? ($facebookSlots / $totalSlots) * 100 : 0;

        //Twitter
        $twitterSlots = 0;
        $ts = TeaserOriginalDraft::whereRelation('course', 'business_id', session('business_id'))->get();
        foreach ($ts as $t) {
            $ds = $t->socialPosts->where('social_media_id', 3);
            foreach ($ds as $d) {
                $twitterSlots += $d->postDates->where('social_post_id', $d->id)->count();
            }
        }
        $twitter_percent = $totalSlots > 0 ? ($twitterSlots / $totalSlots) * 100 : 0;
        //telegram
        $telegramSlots = 0;
        $ts = TeaserOriginalDraft::whereRelation('course', 'business_id', session('business_id'))->get();
        foreach ($ts as $t) {
            $ds = $t->socialPosts->where('social_media_id', 4);
            foreach ($ds as $d) {
                $telegramSlots += $d->postDates->where('social_post_id', $d->id)->count();
            }
        }
        $telegram_percent = $totalSlots > 0 ? ($telegramSlots / $totalSlots) * 100 : 0;
        //whatsapp
        $whatsappSlots = 0;
        $ts = TeaserOriginalDraft::whereRelation('course', 'business_id', session('business_id'))->get();
        foreach ($ts as $t) {
            $ds = $t->socialPosts->where('social_media_id', 5);
            foreach ($ds as $d) {
                $whatsappSlots += $d->postDates->where('social_post_id', $d->id)->count();
            }
        }
        $whats_percent = $totalSlots > 0 ? ($whatsappSlots / $totalSlots) * 100 : 0;
        //pinterest
        $pinterestSlots = 0;
        $ts = TeaserOriginalDraft::whereRelation('course', 'business_id', session('business_id'))->get();
        foreach ($ts as $t) {
            $ds = $t->socialPosts->where('social_media_id', 6);
            foreach ($ds as $d) {
                $pinterestSlots += $d->postDates->where('social_post_id', $d->id)->count();
            }
        }
        $pinterest_percent = $totalSlots > 0 ? ($pinterestSlots / $totalSlots) * 100 : 0;
        //linkedin
        $linkedinSlots = 0;
        $ts = TeaserOriginalDraft::whereRelation('course', 'business_id', session('business_id'))->get();
        foreach ($ts as $t) {
            $ds = $t->socialPosts->where('social_media_id', 7);
            foreach ($ds as $d) {
                $linkedinSlots += $d->postDates->where('social_post_id', $d->id)->count();
            }
        }
        $linkedin_percent = $totalSlots > 0 ? ($linkedinSlots / $totalSlots) * 100 : 0;
        //End Percents

        // dd($face_percent,$linkedin_percent,$twitter_percent,$pinterest_percent);

        $courses = Course::where('business_id', session('business_id'))->get();
        $influencerOffers = InfluencerOffer::whereIn('course_id', $courses->pluck('id'))->get();



        return view(
            'homes.social.business.instructor.mkt_manager',
            compact(
                'courses',
                'influencerOffers',
                'campaigns',
                'count_campaigins',
                'count_finished',
                'count_on_going',
                'totalSlots',
                'face_percent',
                'twitter_percent',
                'telegram_percent',
                'whats_percent',
                'pinterest_percent',
                'linkedin_percent',
                'facebookSlots',
                'twitterSlots',
                'telegramSlots',
                'linkedinSlots',
                'pinterestSlots',
                'whatsappSlots',
            ),
        );
    }

    public function help()
    {
        return view('homes.social.business.instructor.help');
    }

    public function privacy()
    {
        return view('homes.social.business.instructor.privacy');
    }
}