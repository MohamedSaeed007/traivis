<?php

namespace App\Http\Livewire\OrganizationStracture;

use App\Models\Branch;
use App\Models\Business;
use App\Models\Department;
use App\Models\DepartmentProject;
use App\Models\EnterpriseEnterpriseRequiredCourseEnterpriseWorkforce;
use App\Models\EnterpriseRequiredCourse;
use App\Models\EnterpriseRequiredCourseEnterpriseWorkforce as ModelsEnterpriseRequiredCourseEnterpriseWorkforce;
use App\Models\EnterpriseWorkforce;
use App\Models\Position;
use App\Models\Project;
use DepartmentPosition;
use EnterpriseRequiredCourseEnterpriseWorkforce;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class OrganiztionStructure extends Component
{
    public $businessId;
    public $business;

    // public $positionId;
    public $position_name_en;
    public $positions = [];

    // public $department_id;
    public $department_name_en;
    public $departments;
    public $departNames = [];
    public $departmentPositions;
    public $departmentCourses;
    // public $departmentPositionsArray = [];
    // public $departmentProjectNames = [];

    // public $project_id;
   
    public $projects;
    public $projectsArray=[];
    
    public $project_name_en;
  
    public $projectDeparts = [];
    // public $projectsDepartmentPositionArray = [];

    // public $branches_id;
    public $branch_name_en;
    public $branches;
    public $branchProjects;
    public $projectPositions;
    public $projectDepartmentCourses;


    public $status;

    public $courses;
    public $type;
    public $validity;
    public $en_course_name;
    public $showAddCourseForm=true;
    public $coursesFormMethod='';
    public $singleCourse;

    public $activeTabStructure ;
    public $assignRoles ;

    public $workForceCount ;




    public function mount()
    {
        $this->business = Business::find(session('business_id'));
        $this->status = 1;
        setPermissionsTeamId(session('business_id'));
        $this->activeTabStructure = auth()->user()->can('organization_structure_access') ? true :  false ;
        $this->assignRoles = auth()->user()->can('organization_assign_role') ? true :  false ;
        $this->workForceCount = EnterpriseWorkforce::where('company_id', session('business_id'))->count();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [

            'en_course_name' => 'required|string',
            'validity' => 'required|numeric',
            'type' => 'required',

        ]);

    }

   
    public function positionsItemsPush($departmentId, $positionIdStr)
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_edit')){
            $positionId = preg_replace("/[^0-9]/", "", $positionIdStr);
        // dd($positionId);
        $department = $this->business->departments()->find($departmentId);

        if ($department && !$department->positions()->where('position_id', $positionId)->exists()) {
            $department->positions()->attach($positionId);

        } else {
            session()->flash('has_department', 'Add before');
        }
        }
        

    }

    public function addPosition()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_create')){
        $data = $this->validate([
            'position_name_en' => 'required',
        ]);

        $this->business->positions()->create($data);

        // Position::create($data);
        }

    }

    public function deletePosition($positionId)
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_delete')){
        $position = Position::find(preg_replace("/[^0-9]/", "", $positionId));
        $position->delete();
        }
    }



    public function addDepartment()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_create')){
            $data = $this->validate([
                'department_name_en' => 'required',
            ]);

            $this->business->departments()->create($data);
        }

    }

    public function deleteDepartment($departmentId)
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_delete')){
            // dd($departmentId);
            $department = Department::find($departmentId);
            $department->delete();
        }
    }

    public function getDepartmentPosition()
    {
        
        $this->departmentPositions = \App\Models\Department::
            join('department_position', function ($join) {
            $join->on('departments.id', '=', 'department_position.department_id');

                })
            ->join('positions', function ($join) {
                $join->on('positions.id', '=', 'department_position.position_id');
            })
            ->where('departments.business_id', $this->business->id)
            ->where('positions.business_id', $this->business->id)
            ->whereNull('positions.deleted_at')

            ->get(['departments.id AS depId',
                'departments.department_name_en',
                'positions.id as orgId',
                'positions.position_name_en'])->map(function ($item) {
            return [
                'departId' => "department-" . $item->depId,
                'orgId' => "position-" . $item->orgId,
                'orgIdInt' => $item->orgId,
                'text' => $item->position_name_en,

            ];
        });
    }

    public function deleteDepartmentPosition($departmentId, $positionId)
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_delete')){
            $department = $this->business->departments()->find($departmentId);
            $department->positions()->detach($positionId);
        }
    }

    public function addProject()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_create')){
            $data = $this->validate([
                'project_name_en' => 'required',
            ]);

            $this->business->projects()->create($data);
        }
    }

    public function deleteProject($projectId)
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_delete')){
            $project = Project::find($projectId);
            $project->delete();
        }
    }

   
    public function attachDepartmentToProject($projectId, $departmentId)
    {

        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_edit')){
            $departmentId = preg_replace("/[^0-9]/", "", $departmentId);
            
            $project = $this->business->projects()->find($projectId);
            
            // dd($getDepartmentId);
            $hasDepartment = $project->departments()->where('department_id', $departmentId)->exists();
            if ($hasDepartment) {
                // dd('dd');
                session()->flash('has_department', 'Add before');

            } else {
                $project->departments()->attach($departmentId);
            }
        }

    }

    public function attachPositionToProject($project_id,$department_id,$positionId)
    {

        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_edit')){
            $position_id =intval(preg_replace("/[^0-9]/", "", $positionId)) ;
            // dd($position_id);
            // dd($project_id,$department_id,$position_id);
            $departmentProject=DepartmentProject::where(
                [
                 'project_id'=>$project_id,
                 'department_id'=>$department_id
                ])->first();
            // dd($departmentProject);
            $hasPosition = $departmentProject->positions()->where('position_id', $position_id)->exists();

            if ($hasPosition) {
                // dd('dd');
                session()->flash('has_position', 'Added before');

            } else {

                $departmentProject->positions()->attach($position_id);

            }
        }
    }

    public function getProjectDepartments()
    {
        $this->projectDeparts = \App\Models\Project::
            join('department_project', function ($join) {
            $join->on('projects.id', '=', 'department_project.project_id');

            })
            ->join('departments', function ($join) {
            $join->on('departments.id', '=', 'department_project.department_id');
            })
            ->where('departments.business_id', $this->business->id)
            ->where('projects.business_id', $this->business->id)
            ->whereNull('departments.deleted_at')

            ->get(['departments.id AS depId',
                'departments.department_name_en',
                'projects.id as orgId',
                'projects.project_name_en'])->map(function ($item) {
            return [
                'projectId' =>  $item->orgId,
                'orgId' => "department-" . $item->depId,
                'text' => $item->department_name_en,
                'orgIdInt' => $item->orgId,


            ];


            });


        $this->projectDeparts->map(function ($departNames){
            $addDepartName=[];
            $addDepartName['name'] = $departNames['text'];
            $addDepartName['depId'] = $departNames['orgId'];
            $addDepartName['id'] = 'project-depart'.$departNames['projectId'];


            array_push($this->departNames,$addDepartName);
            // dd($this->departNames);
        });
        $this->projectDeparts=$this->projectDeparts->toArray();

        // dd($this->projectDeparts);

    }

    public function getProjectPositions()
    {

        $this->projectPositions=\App\Models\DepartmentProject::
        join('department_project_position', function ($join) {
        $join->on('department_project.id', '=', 'department_project_position.department_project_id');

        })
         ->join('departments', function ($join) {
        $join->on('departments.id', '=', 'department_project.department_id');
        })
        ->join('positions', function ($join) {
        $join->on('positions.id', '=', 'department_project_position.position_id');
        })

        ->where('departments.business_id', $this->business->id)
        ->where('positions.business_id', $this->business->id)
        ->whereNull('positions.deleted_at')

        ->get(['department_project.project_id AS projectId',
            'departments.department_name_en',
            'departments.id as departId',
            'positions.id As positionId',
            'positions.position_name_en'])->map(function ($item) {
        return [

            'positionProjectId' =>  $item->projectId,
            'departName' =>$item->department_name_en,
            'departId' => 'department-'.$item->departId,
            'orgId' => 'position-'.$item->positionId,
            'positionId' => $item->positionId,
            'text'  =>$item-> position_name_en,
            'departmentId'=>$item->departId

        ];


        })->toArray();


    }

    public function deleteProjectPosition($project_id,$department_id,$positionId)
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_delete')){
            $departmentProject=DepartmentProject::where(
                    [
                    'project_id'=>$project_id,
                    'department_id'=>$department_id
                    ])->first();
                // dd($departmentProject);
                $departmentProject->positions()->detach($positionId);
         }
    }

    public function deleteProjectDepartment($projectId, $departmentId)
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_delete')){
            $project = $this->business->projects()->find($projectId);
            $project->departments()->detach($departmentId);
        }

    }

    // end Projects


    // branches

    public function addBranch()
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_create')){
            $data = $this->validate([
                'branch_name_en' => 'required',
            ]);

            $this->business->branches()->create($data);
         }
    }

    public function deleteBranch($branchId)
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_delete')){
            $project = Branch::find($branchId);
            $project->delete();
        }
    }

    public function attachProjectToBranch($branchId, $projectId)
    {

        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_edit')){
            $branch = $this->business->branches()->find($branchId);
            // dd($departmentId,$positionId);
            $hasProject = $branch->projects()->where('project_id', $projectId)->exists();
            if ($hasProject) {
                // dd('dd');
                session()->flash('has_position', 'Add before');

            } else {
                $branch->projects()->attach($projectId);
            }
        }

    }

    public function deleteBranchProject($branchId,$projectId)
    {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_delete')){
            $branch = $this->business->branches()->find($branchId);
            $branch->projects()->detach($projectId);
        }

    }



    public function getBranchProjects()
    {
        $this->branchProjects = \App\Models\Branch::
            join('branch_project', function ($join) {
            $join->on('branches.id', '=', 'branch_project.branch_id');

            })
            ->join('projects', function ($join) {
            $join->on('projects.id', '=', 'branch_project.project_id');
            })
            ->where('projects.business_id', $this->business->id)
            ->where('branches.business_id', $this->business->id)
            ->whereNull('projects.deleted_at')

            ->get(['projects.id AS projectId',
                'projects.project_name_en',
                'branches.id as branchId',
                'branches.branch_name_en'])->map(function ($item) {
            return [
                'projectId' =>  $item->projectId,
                'orgId' => "project-" . $item->projectId,
                'name' => $item->project_name_en,
                'branchId' => $item->branchId,


            ];


        });

        // dd($this->branchProjects);

    }


    // end branches




    public function addItem()
    {
        dd('aaaaaaa',func_get_args());
    }

    public function setFormToCreate()
    {
        $this->resetForm();
       $this->coursesFormMethod = 'createCourse';
    }

   public function createCourse()
   {

    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_create')){
        $data = $this->validate([
            'en_course_name' => 'required|string',
            'validity' => 'required|numeric',
            'type' => 'required',
        ]);
        $data['company_id']= session('business_id');

        EnterpriseRequiredCourse::create($data);

        $this->showAddCourseForm = false;
        $this->resetForm();
    }

   }

   public function editCourse($id)
   {
    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_edit')){
        $this->coursesFormMethod = 'updateCourse';
        // dd($this->coursesFormMethod);
        $this->singleCourse = EnterpriseRequiredCourse::where('id',$id)->first();

        $this->en_course_name = $this->singleCourse->en_course_name;
        $this->validity = $this->singleCourse->validity;
        $this->type = $this->singleCourse->type;
    }


   }

   public function updateCourse()
   {
    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_edit')){
        $data = $this->validate([
            'en_course_name' => 'required|string',
            'validity' => 'required|numeric',
            'type' => 'required',
        ]);


        $this->singleCourse->update($data);
    }

   }

   public function deleteCourse($id)
   {
    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_delete')){
        $course = EnterpriseRequiredCourse::find(preg_replace("/[^0-9]/", "", $id));
        $course->delete();
    }

   }

   public function attachCourseToPosition($positionId,$courseId)
   {
    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_edit')){
        $courseId = preg_replace("/[^0-9]/", "", $courseId);

        $position = $this->business->positions()->find($positionId);

        // dd($position);
        $hasCourse = $position->enterpriseRequiredCourses()->where('enterprise_required_course_id', $courseId)->exists();
        if ($hasCourse) {
            // dd('dd');
            session()->flash('has_course', 'Add before');

        } else {

            $employees=EnterpriseWorkforce::wherePositionId($positionId)->get();
            // dd($employees,$positionId);
            foreach($employees as $employee){
                // dd($employee);
                $employee->companyRequiredCourses()->syncWithoutDetaching($courseId);

            }
            $position->enterpriseRequiredCourses()->attach($courseId);

        }
    }
   }


   public function deleteCourseFromPosition($positionId,$courseId)
   {
    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_delete')){
        $position = $this->business->positions()->find($positionId);
        $employees=EnterpriseWorkforce::wherePositionId($positionId)->get();
                // dd($employees,$positionId);
                foreach($employees as $employee){
                    // dd($employee);
                    $employee->companyRequiredCourses()->detach($courseId);

                }
        $position->enterpriseRequiredCourses()->detach($courseId);
     }
   }

   public function attachCourseToDepartment($departmentId,$courseId)
   {
    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_edit')){
        $courseId = preg_replace("/[^0-9]/", "", $courseId);

        $department = $this->business->departments()->find($departmentId);

        // dd($position);
        $hasCourse = $department->enterpriseRequiredCourses()->where('enterprise_required_course_id', $courseId)->exists();
        if ($hasCourse) {
            // dd('dd');
            session()->flash('has_course', 'Add before');

        } else {

            $employees=EnterpriseWorkforce::whereHas('departments', function (Builder $query) use($departmentId) {
                $query->where('department_id',$departmentId);

               })->get();

            foreach($employees as $employee){
                // dd($employee);
                $employee->companyRequiredCourses()->syncWithoutDetaching($courseId);

            }

            $department->enterpriseRequiredCourses()->attach($courseId);

        }
    }
   }

   public function deleteCourseFromDepartment($departmentId,$courseId)
   {
    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_delete')){
        $department = $this->business->departments()->find($departmentId);
        $employees=EnterpriseWorkforce::with('companyRequiredCourses')->whereHas('departments', function (Builder $query) use($departmentId) {
            $query->where('department_id',$departmentId);

        })->get();
        // dd($employees);


        foreach($employees as $employee){
            // dd($employee->companyRequiredCourses());
            $employee->companyRequiredCourses()->detach($courseId);

        }
        // dd('check ');

        $department->enterpriseRequiredCourses()->detach($courseId);
    }
   }


   public function attachCourseToProject($projectId,$courseId)
   {
    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_edit')){
        $courseId = preg_replace("/[^0-9]/", "", $courseId);

        $project = $this->business->projects()->find($projectId);

        // dd($position);
        $hasCourse = $project->enterpriseRequiredCourses()->where('enterprise_required_course_id', $courseId)->exists();

        if ($hasCourse) {
            // dd('dd');
            session()->flash('has_course', 'Add before');

        } else {


            $employees=EnterpriseWorkforce::whereHas('projects', function (Builder $query) use($projectId) {
                $query->where('project_id',$projectId);

               })->get();

            foreach($employees as $employee){
                // dd($employee);
                $employee->companyRequiredCourses()->syncWithoutDetaching($courseId);

            }
            $project->enterpriseRequiredCourses()->attach($courseId);

        }
    }
   }




   public function deleteCourseFromProject($departmentId,$courseId)
   {

    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_delete')){
        $project = $this->business->projects()->find($departmentId);
        $employees=EnterpriseWorkforce::with('companyRequiredCourses')->whereHas('projects', function (Builder $query) use($departmentId) {
            $query->where('project_id',$departmentId);

        })->get();
        // dd($employees);


        foreach($employees as $employee){
            // dd($employee->companyRequiredCourses());
            $employee->companyRequiredCourses()->detach($courseId);

        }
        $project->enterpriseRequiredCourses()->detach($courseId);
    }
   }

   public function attachCourseToBranch($branchId,$courseId)
   {
    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_edit')){
        $courseId = preg_replace("/[^0-9]/", "", $courseId);

        $branch = $this->business->branches()->find($branchId);



        $hasCourse = $branch->enterpriseRequiredCourses()->where('enterprise_required_course_id', $courseId)->exists();

        if ($hasCourse) {
            // dd('dd');
            session()->flash('has_course', 'Add before');

        } else {

            $employees=EnterpriseWorkforce::whereHas('branches', function (Builder $query) use($branchId) {
                $query->where('branch_id',$branchId);

               })->get();

            foreach($employees as $employee){
                // dd($employee);
                $employee->companyRequiredCourses()->syncWithoutDetaching($courseId);

            }

            $branch->enterpriseRequiredCourses()->attach($courseId);

        }
    }
   }




   public function deleteCourseFromBranch($branchId,$courseId)
   {

    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_delete')){
        $branch = $this->business->branches()->find($branchId);
        $employees=EnterpriseWorkforce::with('companyRequiredCourses')->whereHas('branches', function (Builder $query) use($branchId) {
            $query->where('branch_id',$branchId);

        })->get();
        // dd($employees);


        foreach($employees as $employee){
            // dd($employee->companyRequiredCourses());
            $employee->companyRequiredCourses()->detach($courseId);

        }
        $branch->enterpriseRequiredCourses()->detach($courseId);
    }
   }


   public function attachCourseToDepartmentProject($project_id , $department_id ,$course_id)
   {
    setPermissionsTeamId(session('business_id'));
    if(auth()->user()->can('organization_workforce_edit')){
        $course_id =intval(preg_replace("/[^0-9]/", "", $course_id)) ;
        // dd($position_id);
        // dd($project_id,$department_id,$position_id);
        $departmentProject=DepartmentProject::where(
            [
            'project_id'=>$project_id,
            'department_id'=>$department_id
            ])->first();
        // dd($departmentProject);
        $hasPosition = $departmentProject->enterpriseRequiredCourses()->where('enterprise_required_course_id', $course_id)->exists();

        if ($hasPosition) {
            // dd('dd');
            session()->flash('has_position', 'Added before');

        } else {

            $departmentProject->enterpriseRequiredCourses()->attach($course_id);

        }
    }
   }

   public function getDepartmentProjectCourse()
   {
    $this->projectDepartmentCourses=\App\Models\DepartmentProject::
    join('department_project_enterprise_required_course', function ($join) {
    $join->on('department_project.id', '=', 'department_project_enterprise_required_course.department_project_id');

    })
     ->join('departments', function ($join) {
    $join->on('departments.id', '=', 'department_project.department_id');
    })
    ->join('company_required_courses', function ($join) {

    $join->on('company_required_courses.id', '=', 'department_project_enterprise_required_course.enterprise_required_course_id');
    })

    ->where('departments.business_id', $this->business->id)
    ->where('company_required_courses.company_id', $this->business->id)
    ->whereNull('company_required_courses.deleted_at')

    ->get(['department_project.project_id AS projectId',
        'departments.department_name_en',
        'departments.id as departId',
        'company_required_courses.id As courseId',
        'company_required_courses.en_course_name'])->map(function ($item) {
    return [

        'positionProjectId' =>  $item->projectId,
        'departName' =>$item->department_name_en,
        'departId' => 'department-'.$item->departId,
        'orgId' => 'course-'.$item->courseId,
        'positionId' => $item->courseId,
        'text'  =>$item-> en_course_name,
        'departmentId'=>$item->departId

    ];


    })->toArray();

    // dd($this->projectDepartmentCourses);
   }

   public function deleteProjectDepartmentCourse($project_id,$department_id,$courseId)
   {
        setPermissionsTeamId(session('business_id'));
        if(auth()->user()->can('organization_workforce_delete')){
            $departmentProject=DepartmentProject::where(
                [
                    'project_id'=>$project_id,
                    'department_id'=>$department_id
                ])->first();
            // dd($departmentProject);
            $departmentProject->enterpriseRequiredCourses()->detach($courseId);
        }
    }


   public function resetForm()
   {
    $this->reset(['type', 'validity', 'en_course_name']);
   }


    public function render()
    {
        setPermissionsTeamId(session('business_id'));
        $this->positions = $this->business->positions()->where('status',1)->get();
        $this->departments = $this->business->departments()->where('status',1)->pluck('department_name_en', 'id')->toArray();
        $this->departmentCourses=$this->business->departments()->with('enterpriseRequiredCourses')->where('status',1)->get();


        $this->getDepartmentPosition();
        // dd($this->departmentPositions);
        // \App\Models\Project::find(1)->departments()->attach(1);
        $this->projects= $this->business->projects()->with('departments','departments.positions','enterpriseRequiredCourses')->where('status',1)->get();
        $this->projectsArray = $this->projects->pluck('project_name_en', 'id')->toArray();
        $this->getProjectDepartments();
      
     
        $this->branches = $this->business->branches()->with('projects','projects.departments')->where('status',1)->get();
        $this->getBranchProjects();

        $this->getProjectPositions();

        // courses
        $this->courses=EnterpriseRequiredCourse::where('company_id',session('business_id'))->get();
        // dd(DepartmentProject::with('enterpriseRequiredCourses')->all());

        $this->getDepartmentProjectCourse();


//    dd(ModelsEnterpriseRequiredCourseEnterpriseWorkforce::get());




        // dd($this->branches);

        return view('livewire..organization-stracture.organiztion-structure');
    }
}
