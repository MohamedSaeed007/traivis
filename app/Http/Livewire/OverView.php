<?php

namespace App\Http\Livewire;

use App\Classes\Helper;
use App\Models\Bidding;
use App\Models\Business;
use App\Models\BusinessCalenderEvent;
use App\Models\Course;
use App\Models\InstituteInstructorInvitation;
use App\Models\InstituteWorkPlace;
use App\Models\Notification;
use App\Models\TeaserOriginalDraft;
use Carbon\Carbon;
use Livewire\Component;

class OverView extends Component
{
    public $business;
    public $dashBoard;
    public $notifications;
    public $eventsOfDay;
    public $courses = null;
    public $coursesShow = false;
    public $tenders = null;
    public $tendersShow = false;
    public $myTeams = 0;
    public $myTeamsFreelancer = 0;
    public $myTeamsShow = false;
    public $marketingShow = false;
    public $totalSlots = 0;
    public $facebookSlots = 0;
    public $freelancerShow = false;
    public $invitationsfreelancer = false;
    public $getCurrentEntity;

    public function mount()
    {
        $this->getCurrentEntity = Helper::getCurrentEntity();
        $this->notifications = Notification::whereMorphedTo('notifierable', $this->getCurrentEntity)
            ->with('notifierable')
            ->where('note_status', '1')
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();
        $this->business = Business::findOrFail(session('business_id'));
        $this->dashBoard = request()->segment(1);
        $this->eventsOfDay = BusinessCalenderEvent::where('business_id', session('business_id'))
            ->WhereDate('start_date', Carbon::parse(now())->format('Y-m-d'))
            ->get();
        if ($this->business->business_type == 'institute') {
            $this->coursesShow = true;
            $this->courses = Course::where('business_id', session('business_id'))
                ->with(['lectures'])
                ->withCount(['studentCourses', 'courseViews'])
                ->get();
            // dd($this->courses);
            $this->tendersShow = true;
            $this->tenders = Bidding::where('privacy', 'public')
                ->OrWhereHas('invitations', function ($q) {
                    $q->where('business_id', session('business_id'));
                })
                ->with(['business', 'BiddingOffers'])
                ->withCount('MyInvitations')
                ->get();
            $this->myTeamsShow = true;
            $this->myTeams = InstituteWorkPlace::where('institute_id', session('business_id'))
                ->where('worker_type', 'staff')
                ->count();
            $this->myTeamsFreelancer = InstituteWorkPlace::where('institute_id', session('business_id'))
                ->where('worker_type', 'freelancer')
                ->count();
            $this->marketingShow = true;
            $this->totalSlots = TeaserOriginalDraft::whereRelation(
                'course',
                'business_id',
                session('business_id'),
            )
                ->with('socialPosts')
                ->get();
            // $this->facebookSlots = $this->totalSlots->
        } elseif ($this->business->business_type == 'instructor') {
            $this->coursesShow = true;
            $this->courses = Course::where('business_id', session('business_id'))
                ->with(['lectures'])
                ->withCount(['studentCourses', 'courseViews'])
                ->get();
            $this->marketingShow = true;
            $this->totalSlots = TeaserOriginalDraft::whereRelation(
                'course',
                'business_id',
                session('business_id'),
            )
                ->with('socialPosts')
                ->get();
            $this->freelancerShow = true;
            $this->invitationsfreelancer = InstituteInstructorInvitation::where(
                'instructor_id',
                session('business_id'),
            )
                ->with('course')
                ->get();
        } elseif ($this->business->business_type == 'enterprise') {
        }
    }
    public function render()
    {
        return view('livewire.over-view');
    }
}
