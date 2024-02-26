<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\InstituteInstructorInvitation;
use App\Models\InstituteWorkPlace;
use Livewire\Component;

class InstituteFreeLancers extends Component
{
    public $instructors;
    public $invitations;
    public $activeTab;
    public $invitationsCount, $staffCount, $activeFreelancersCount, $inActiveFreelancerCount, $allCount;
    public $searchStaffInput, $searchStaffEmail;
    public $searchFreelancerInput, $searchFreelanceEmail;
    public $popup;
    public $searchResult;
    public $searchName;

    public function mount()
    {
        $this->invitations = InstituteInstructorInvitation::where('institute_id', session('business_id'))->get();
        $this->instructors = InstituteWorkPlace::where('institute_id', session('business_id'))->where('worker_type', 'staff')->get();

        $this->getSummaries();

        $this->searchResult = [];
    }

    public function getSummaries()
    {
        $this->staffCount = InstituteWorkPlace::where('institute_id', session('business_id'))
            ->where('worker_type', 'staff')->count();
        $this->activeFreelancersCount = InstituteWorkPlace::where('institute_id', session('business_id'))
            ->where('task_status', 'active')
            ->where('worker_type', 'freelancer')->count();
        $this->inActiveFreelancerCount = InstituteWorkPlace::where('institute_id', session('business_id'))
            ->where('task_status', 'finished')
            ->where('worker_type', 'freelancer')->count();
        $this->invitationsCount = InstituteInstructorInvitation::where('institute_id', session('business_id'))->count();
        $this->allCount = InstituteWorkPlace::where('institute_id', session('business_id'))->count();

    }

    public function ActiveTab($tab)
    {
        switch ($tab) {
            case "staff":
                $this->instructors = InstituteWorkPlace::where('institute_id', session('business_id'))
                    ->where('worker_type', 'staff')->get();
                break;
            case "activeFreeLancers":
                $this->instructors = InstituteWorkPlace::where('institute_id', session('business_id'))
                    ->where('task_status', 'active')
                    ->where('worker_type', 'freelancer')->get();
                break;
            case "inActiveFreeLancers":
                $this->instructors = InstituteWorkPlace::where('institute_id', session('business_id'))
                    ->where('task_status', 'finished')
                    ->where('worker_type', 'freelancer')->get();
                break;
            case "all":
                $this->instructors = InstituteWorkPlace::where('institute_id', session('business_id'))->get();
                break;
        }
        $this->activeTab = $tab;

    }

    public function AddNewEmployee()
    {
        if ($this->popup == "staff") {
            $findInstructor = Business::where('business_email', $this->searchStaffEmail)
                ->first();
            if ($findInstructor) {
                $instructor_id = $findInstructor->id;
                InstituteInstructorInvitation::create([
                    'instructor_id' => $instructor_id,
                    'institute_id' => session('business_id'),
                ]);
            }
        } else {
            $findInstructor = Business::where('business_email', $this->searchFreelanceEmail)
                ->where('business_type', 'instructor')
                ->first();
            if ($findInstructor) {
                $instructor_id = $findInstructor->id;
                InstituteInstructorInvitation::create([
                    'instructor_id' => $instructor_id,
                    'institute_id' => session('business_id'),
                ]);
            }
        }
        return redirect(request()->header('Referer'));
    }

    public function activePopup($op)
    {
        $this->searchResult = [];
        $this->popup = $op;
    }

    public function Employeesearch()
    {
        if ($this->popup == "staff") {
            $instructors = Business::where('business_name', 'like', '%' . $this->searchStaffInput . '%')
                ->get();
            $this->searchResult = $instructors;
        } else {
            $instructors = Business::where('business_name', 'like', '%' . $this->searchFreelancerInput . '%')
                ->where('business_type', 'instructor')
                ->get();
            $this->searchResult = $instructors;
        }
    }

    public function render()
    {
        return view('livewire.institute-free-lancers');
    }

}
