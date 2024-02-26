<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Bidding;
use App\Models\BiddingOffer;
use App\Models\Business;
use App\Models\Content;
use App\Models\Course;
use App\Models\TeaserOriginalDraft;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Gate;
class InstituteController extends Controller
{
    public function index()
    {
        return view('homes.social.business.institute.index');
    }
    public function courses()
    {
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('homes.social.business.institute.courses');
    }
    public function courseDetails($id=null)
    {
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!is_null($id)){
            $course=Course::find($id);
            if(!$course)
            {
                return back();

            }
        }
        $course_id=$id;

        return view('homes.social.business.institute.course_details',compact('course_id'));

    }
    public  function courseAssignments ($id=null)
    {
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!is_null($id)){
            $course=Course::find($id);
            if(!$course)
            {
                return back();

            }
        }
        $course=Course::find($id);
        $assignment=Content::where('course_id',$course->id)->first();
        if(!$assignment)
        {
            $assignment=new Content();
        }
        return view('homes.social.business.institute.course_assignments',compact('course','assignment'));
    }
    public function courseLectures($id=null)
    {
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course_id=$id;
        return view('homes.social.business.institute.course_lectures',compact('course_id'));
    }
    public function courseSections($id=null)
    {
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course_id=$id;
        return view('homes.social.business.institute.course_sections',compact('course_id'));
    }

    public function courseQuizes($id=null)
    {
        abort_if(Gate::denies('courses_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $course_id=$id;
        return view('homes.social.business.institute.course_quizes',compact('course_id'));
    }

    public function students()
    {
        abort_if(Gate::denies('students_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('homes.social.business.institute.students');
    }

    public function calender()
    {
        abort_if(Gate::denies('calenders_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('homes.social.business.institute.calender');
    }
    public function rewards()
    {
        abort_if(Gate::denies('claim_rewards_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $business = Business::find(2);
        return view('homes.social.business.institute.rewards',compact('business'));
    }
    public function help()
    {
        return view('homes.social.business.institute.help');
    }
    public function privacy()
    {
        return view('homes.social.business.institute.privacy');
    }
    public function instructors()
    {
        abort_if(Gate::denies('instructors_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('homes.social.business.institute.instructors');
    }

    public function followers()
    {
        abort_if(Gate::denies('followers_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('homes.social.business.institute.followers');
    }
    public function biddies()
    {
        abort_if(Gate::denies('bidding_offer_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('homes.social.business.institute.biddies');
    }
    public function rank()
    {
        return view('homes.social.business.institute.rank');
    }
    public function mkt_manager()
    {
        abort_if(Gate::denies('managing_mkt_portals'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $count_campaigins=TeaserOriginalDraft::whereRelation('course','business_id',session('business_id'))
            ->groupBy('course_id')->get()->count();
        $campaigns=TeaserOriginalDraft::whereRelation('course','business_id',session('business_id'))
            ->groupBy('course_id')->get();

        //Get Count of on going and finished campaigns
        $count_on_going=0;
        $count_finished=0;
        $socialPosts=\App\Models\TeaserOriginalDraft::
        whereRelation('course','business_id',session('business_id'))
            ->groupBy('course_id')
            ->has('socialPosts')
            ->get();

        foreach ($socialPosts as $p)
        {
            $date_arr=[];


            $ps=$p->socialPosts;
            foreach ($ps as $pp)
            {
                $pp->postDates;

                if($pp->postDates->count())
                {
                    foreach ($pp->postDates as $pd)
                    {
                        $date_arr[]=$pd->id;
                    }
                }

            }
            $socialDates=\App\Models\SocialPostDate::whereIn('id',$date_arr)
                ->select(\DB::raw('min(publish_date) as min_publish_date,max(publish_date) as max_publish_date'))->first();

            if($socialDates->max_publish_date < now())
            {
                $count_finished+=1;
            }else{
                $count_on_going+=1;
            }
        }
        //End Count
        //Total Slots
        $totalSlots=0;
        $ts=TeaserOriginalDraft::whereRelation('course','business_id',session('business_id'))
            ->get();
        foreach ($ts as $t)
        {
            $ds=$t->socialPosts;
            foreach ($ds as $d)
            {
                $totalSlots+=$d->postDates->count();
            }
        }
        //End Total Slots

        //Get Social Percents from slots
        //Facebook
        $facebookSlots=0;
        $ts=TeaserOriginalDraft::whereRelation('course','business_id',session('business_id'))
            ->get();
        foreach ($ts as $t)
        {
            $ds=$t->socialPosts->where('social_media_id',2);
            foreach ($ds as $d)
            {
                $facebookSlots+=$d->postDates->where('social_post_id',$d->id)->count();
            }
        }
        $face_percent=($totalSlots>0)?($facebookSlots/$totalSlots)*100:0;

        //Twitter
        $twitterSlots=0;
        $ts=TeaserOriginalDraft::whereRelation('course','business_id',session('business_id'))
            ->get();
        foreach ($ts as $t)
        {
            $ds=$t->socialPosts->where('social_media_id',3);
            foreach ($ds as $d)
            {
                $twitterSlots+=$d->postDates->where('social_post_id',$d->id)->count();
            }
        }
        $twitter_percent=($totalSlots>0)?($twitterSlots/$totalSlots)*100:0;
        //telegram
        $telegramSlots=0;
        $ts=TeaserOriginalDraft::whereRelation('course','business_id',session('business_id'))
            ->get();
        foreach ($ts as $t)
        {
            $ds=$t->socialPosts->where('social_media_id',4);
            foreach ($ds as $d)
            {
                $telegramSlots+=$d->postDates->where('social_post_id',$d->id)->count();
            }
        }
        $telegram_percent=($totalSlots>0)?($telegramSlots/$totalSlots)*100:0;
        //whatsapp
        $whatsappSlots=0;
        $ts=TeaserOriginalDraft::whereRelation('course','business_id',session('business_id'))
            ->get();
        foreach ($ts as $t)
        {
            $ds=$t->socialPosts->where('social_media_id',5);
            foreach ($ds as $d)
            {
                $whatsappSlots+=$d->postDates->where('social_post_id',$d->id)->count();
            }
        }
        $whats_percent=($totalSlots>0)?($whatsappSlots/$totalSlots)*100:0;
        //pinterest
        $pinterestSlots=0;
        $ts=TeaserOriginalDraft::whereRelation('course','business_id',session('business_id'))
            ->get();
        foreach ($ts as $t)
        {
            $ds=$t->socialPosts->where('social_media_id',6);
            foreach ($ds as $d)
            {
                $pinterestSlots+=$d->postDates->where('social_post_id',$d->id)->count();
            }
        }
        $pinterest_percent=($totalSlots>0)?($pinterestSlots/$totalSlots)*100:0;
        //linkedin
        $linkedinSlots=0;
        $ts=TeaserOriginalDraft::whereRelation('course','business_id',session('business_id'))
            ->get();
        foreach ($ts as $t)
        {
            $ds=$t->socialPosts->where('social_media_id',7);
            foreach ($ds as $d)
            {
                $linkedinSlots+=$d->postDates->where('social_post_id',$d->id)->count();
            }
        }
        $linkedin_percent=($totalSlots>0)?($linkedinSlots/$totalSlots)*100:0;
        //End Percents


        return view('homes.social.business.institute.mkt_manager',compact('campaigns','count_campaigins',
            'count_finished','count_on_going','totalSlots','face_percent','twitter_percent',
            'telegram_percent','whats_percent','pinterest_percent','linkedin_percent',
            'facebookSlots','twitterSlots','telegramSlots','linkedinSlots','pinterestSlots','whatsappSlots'
        ));
    }

}
