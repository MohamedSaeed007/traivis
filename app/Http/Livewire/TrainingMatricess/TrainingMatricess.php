<?php

namespace App\Http\Livewire\TrainingMatricess;

use App\Models\Business;
use App\Models\ContractorEmployee;
use App\Models\EnterpriseRequiredCourse;
use App\Models\EnterpriseWorkforce;
use Livewire\Component;
use Session;

class TrainingMatricess extends Component
{

    public $workForces;
    public $singleWorkforce;
    public $business;
    public $positions;
    public $departments;
    public $projects;
    public $branches;
    public $courses;
    public $coursesIds=[];

    public $workForceCourses;

    // filterData
    public $filterName;
    public $filterByPosition = [];
    public $filterByDepartment = [];
    public $filterByBranch = [];
    public $filterByProject = [];
    public $numberOfFilters = 0;
    public $courseStartDate;
    public $courseEndDate;
    public $sortBy;

    public function mount()
    {

        $this->business = Business::find(session('business_id'));

        $this->positions = $this->business->positions()->where('status', 1)->pluck('position_name_en', 'id')->toArray();
        $this->departments = $this->business->departments()->where('status', 1)->pluck('department_name_en', 'id')->toArray();
        $this->projects = $this->business->projects()->where('status', 1)->pluck('project_name_en', 'id')->toArray();
        $this->branches = $this->business->branches()->where('status', 1)->pluck('branch_name_en', 'id')->toArray();
        $this->courses =  EnterpriseRequiredCourse::where('company_id',session('business_id'))->where('status',1)->get()->toArray();

        $this->workForceCourses = \App\Models\EnterpriseWorkforce::
            join('enterprise_required_course_enterprise_workforce', function ($join) {
            $join->on('company_workforce.id', '=', 'enterprise_required_course_enterprise_workforce.enterprise_workforce_id');

            })
            ->join('company_required_courses', function ($join) {
                $join->on('company_required_courses.id', '=', 'enterprise_required_course_enterprise_workforce.enterprise_required_course_id');
            })
            ->where('company_required_courses.company_id', $this->business->id)
            ->where('company_workforce.company_id', $this->business->id)
            ->whereNull('company_workforce.deleted_at')

            ->get(
                [
                    'enterprise_required_course_enterprise_workforce.issue_date AS workforce_course_created_at','company_required_courses.id',
                    'company_required_courses.id AS course_id',
                    'company_required_courses.validity AS course_validity',
                    'company_workforce.id AS workforce_id',
                ]
            );

            // dd($this->workForceCourses);

    }

    public function singleWorkforceData($workForceID)
    {
        $this->singleWorkforce= $this->workForces->where('id',$workForceID)->toArray();

    //    dd($this->singleWorkforce[0]['user']);
    }

    public function clearAllFilters()
    {
        $this->numberOfFilters=0;
        $this->filterName="";
        $this->filterByPosition = [];
        $this->filterByDepartment = [];
        $this->filterByBranch = [];
        $this->filterByProject = [];
        $this->courseStartDate = '';
        $this->courseEndDate = '';
        $this->sortBy = '';

    }

    public function sortWorkforceBy($sortBy)
    {
        $this->sortBy = $sortBy;

    }

    public function render()
    {
        setPermissionsTeamId(session('business_id'));
        // debug($this->coursesIds);
        $this->numberOfFilters = 0;
        $this->workForces = EnterpriseWorkforce::where('company_id', session('business_id'))
            ->with('user', 'departments', 'position', 'branches', 'projects', 'companyRequiredCourses')->where('status', 1);

        //    $this->workForces= $this->workForces->join('positions','positions.id','=','enterprise_workforce_project.position_id')->orderBy('positions.id')->get();

        if ($this->filterName) {
            $userName = $this->filterName;
            $this->workForces = $this->workForces->whereHas('user', function ($q) use ($userName) {
                $q->where('name', 'LIKE', "%{$userName}%");
            });
        }

        if ($this->filterByPosition) {
            ++$this->numberOfFilters ;
            $positionFilter = $this->filterByPosition;
            $this->workForces = $this->workForces->whereHas('position', function ($q) use ($positionFilter) {$q->whereIn('id', $positionFilter);
            });
        }

        if ($this->filterByDepartment) {
            ++$this->numberOfFilters ;
            $dpFilter = $this->filterByDepartment;
            // dd($dpFilter);
            $this->workForces = $this->workForces->whereHas('departments', function ($q) use ($dpFilter) {$q->whereIn('department_id', $dpFilter);
            });
        }

        if ($this->filterByProject) {
            ++$this->numberOfFilters ;
            $projFilter = $this->filterByProject;
            $this->workForces = $this->workForces->whereHas('projects', function ($q) use ($projFilter) {$q->whereIn('project_id', $projFilter);
            });
        }

        if ($this->filterByBranch) {
            ++$this->numberOfFilters ;
            $branchFilter = $this->filterByBranch;
            $this->workForces = $this->workForces->whereHas('branches', function ($q) use ($branchFilter) {$q->whereIn('branch_id', $branchFilter);
            });
        }

        if ($this->courseStartDate) {

            $this->workForces = $this->workForces->where('created_at', '>=', $this->courseStartDate);

        }

        if ($this->courseEndDate) {

            $this->workForces = $this->workForces->where('created_at', '<=', $this->courseEndDate);

        }
        if(auth()->user()->hasRole('contractor_manger')){
            $user_ids = ContractorEmployee::where('contractor_id',auth()->id())->where('business_id',session('business_id'))->get('employee_id')->toArray();
            // dd(array_flatten($user_ids));
            $this->workForces = $this->workForces->whereIn('user_id',array_flatten($user_ids));
        }elseif (auth()->user()->hasRole('project_manager')) {
            $projectManger = EnterpriseWorkforce::where('user_id',auth()->id())->with('projects')->first();
            $projFilter = $projectManger?->projects?->pluck('id');
            $this->workForces = $this->workForces->whereHas('projects', function ($q) use ($projFilter) {$q->whereIn('project_id', $projFilter); });
        }

        if($this->sortBy){
            ++$this->numberOfFilters;
            $this->workForces = match ($this->sortBy) {
                'name' => $this->workForces->get()->sortBy('user.name'),
                'position' => $this->workForces->get()->sortBy('position.position_name_en'),
                'department' => $this->workForces->get()->sortBy('departments.id'),
                'project' => $this->workForces->get()->sortBy('projects.id'),
                'branch' => $this->workForces->get()->sortBy('branches.id'),
            };
        }else{
            $this->workForces = $this->workForces->orderBy('id')->get();
        }





        $this->workForceCourses = \App\Models\EnterpriseWorkforce::
            join('enterprise_required_course_enterprise_workforce', function ($join) {
            $join->on('company_workforce.id', '=', 'enterprise_required_course_enterprise_workforce.enterprise_workforce_id');

            })
            ->join('company_required_courses', function ($join) {
                $join->on('company_required_courses.id', '=', 'enterprise_required_course_enterprise_workforce.enterprise_required_course_id');
            })
            ->where('company_required_courses.company_id', $this->business->id)
            ->where('company_workforce.company_id', $this->business->id)
            ->whereNull('company_workforce.deleted_at')

            ->get(
                [
                    'enterprise_required_course_enterprise_workforce.issue_date AS workforce_course_created_at',
                    'company_required_courses.id',
                    'company_required_courses.id AS course_id',
                    'company_required_courses.validity AS course_validity',
                    'company_workforce.id AS workforce_id',
                ]
            );

        // $this->workForces = $this->workForces->sortBy('position.position_name_en');
        // dd($this->workForceCourses);

        return view('livewire..training-matricess.training-matricess');
    }
}
