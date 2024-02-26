<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Content;
use App\Models\Course;
use App\Models\Transaction;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    public function index()
    {
        $enterPriseBusiness = auth()->user()->businesses()->where('business_type', 'enterprise')->first();
        if ($enterPriseBusiness) {
            if (!$enterPriseBusiness->approved) {
                return redirect(route('business-space'));
            }
        }
        return view('homes.social.business.enterprise.index');
    }
    public function courses()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('courses_access')){
            return view('homes.social.business.enterprise.courses');
        }
        return abort(403);
    }

    public function courseDetails($id = null)
    {
        if (!is_null($id)) {
            $course = Course::find($id);
            if (!$course) {
                return back();
            }
        }
        $course_id = $id;
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('course_show')){
            return view('homes.social.business.enterprise.course_details', compact('course_id'));
        }
        return abort(403);
    }

    public function courseAssignments($id = null)
    {
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
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('course_show')){
            return view('homes.social.business.enterprise.course_assignments',
                compact('course', 'assignment')
            );
        }
        return abort(403);
    }

    public function courseLectures($id = null)
    {
        $course_id = $id;
        return view('homes.social.business.enterprise.course_lectures', compact('course_id'));
    }

    public function courseSections($id = null)
    {
        $course_id = $id;
        return view('homes.social.business.enterprise.course_sections', compact('course_id'));
    }

    public function courseQuizes($id = null)
    {
        $course_id = $id;
        return view('homes.social.business.enterprise.course_quizes', compact('course_id'));
    }

    public function students()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('students_access')){
            return view('homes.social.business.enterprise.students');
        }
        return abort(403);
    }

    public function freelance()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('freelances_access')){
            return view('homes.social.business.enterprise.freelance');
        }
        return abort(403);
    }

    public function calender()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('calenders_access')){
            return view('homes.social.business.enterprise.calender');
        }
        return abort(403);
    }

    public function rewards()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('claim_rewards_access')){
            $business = Business::find(session('business_id'));
            return view('homes.social.business.enterprise.rewards',compact('business'));
        }
        return abort(403);
    }


    public function help()
    {
        return view('homes.social.business.enterprise.help');
    }

    public function instructors()
    {
        return view('homes.social.business.enterprise.instructors');
    }

    public function followers()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('followers_access')){
            return view('homes.social.business.enterprise.followers');
        }
        return abort(403);
    }

    // biddings
    public function biddies()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('bidding_offer_access')){
            return view('homes.social.business.enterprise.biddies');
        }
        return abort(403);
    }

    public function rank()
    {
        return view('homes.social.business.enterprise.rank');
    }

    public function biddingOffer($id)
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('bidding_offer_show')){
            return view('homes.social.business.enterprise.bidding_offer', compact('id'));
        }
        return abort(403);
    }
    // end biddings

    public function organizationStructure()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_access')){
            return view('homes.social.business.enterprise.organization_structure');
        }
        return abort(403);
    }

    public function trainingMatrices()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('training_matrices_access')){
            return view('homes.social.business.enterprise.training-matrices');
        }
        return abort(403);
    }
    public function privacy()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('managing_space_privacy')){
            return view('homes.social.business.enterprise.privacy');
        }
        return abort(403);
    }
}