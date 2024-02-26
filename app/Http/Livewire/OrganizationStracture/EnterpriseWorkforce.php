<?php

namespace App\Http\Livewire\OrganizationStracture;

use App\Mail\ContractorInvitationMail;
use App\Models\Business;
use App\Models\CompanyWorkforce;
use App\Models\ContractorEmployee;
use App\Models\EnterpriseRequiredCourse;
use App\Models\EnterpriseRequiredCourseEnterpriseWorkforce;
use App\Models\EnterpriseWorkforce as EnterpriseWorkforceModel;
use App\Models\Position;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class EnterpriseWorkforce extends Component
{
    use WithFileUploads;

    public $business;
    public $positions;
    public $departments;
    public $projects;
    public $branches;
    public $contractors;
    public $selectedContactor ='';


    // public $enterpriseWorkforces;
    public $showWorkforceData;
    public $isNotStaff ;
    public $contractorName;
    public $contractorEmail;
    public $contractorPhone;
    // employee data
    public $userData;
    public $name;
    public $email;
    public $phone;
    public $work_id;
    public $traivis_id;
    public $selectedPosition;
    public $selectedDepartment = [];
    public $selectedProject = [];
    public $selectedBranch = [];

    // employee courses data
    public $issueDate=[];
    public $upcomingDate=[];
    public $certificate=[];
    public $workforceCourses;
    public $getWorkforceCoursesData;
    public $coursesCollection;
    public $coursesIds=[];

    // form variables
    public $updateOrCreateForm = "update";
    public $showEmployeeForm;

    // filters
    public $filterName = "";
    public $filterByPosition = [];
    public $filterByDepartment = [];
    public $filterByBranch = [];
    public $filterByProject = [];

    // protected $validationAttributes = [

    //     'issueDate.*' => 'Issue Date',
    //     'upcomingDate.*'=>'Upcoming Date',
    //     'certificate.*'=>'Certification',


    // ];

    public function mount()
    {
        $this->business = Business::find(session('business_id'));
        $this->positions = $this->business->positions()->where('status', 1)->pluck('position_name_en', 'id')->toArray();
        $this->departments = $this->business->departments()->where('status', 1)->pluck('department_name_en', 'id')->toArray();
        $this->projects = $this->business->projects()->where('status', 1)->pluck('project_name_en', 'id')->toArray();
        $this->branches = $this->business->branches()->where('status', 1)->pluck('branch_name_en', 'id')->toArray();
        $this->setContarctors();
        if (auth()->user()->hasRole('contractor_manger')) {
            $this->isNotStaff = true;
            $this->selectedContactor = auth()->id();
        }else{
            $this->isNotStaff = false;
        }
    }
    protected function setContarctors()
    {
        $this->contractors = User::whereHas('roles',function($query){
            $query->where('name','contractor_manger') ;
        })
        ->whereHas('businesses',function($query){
            $query->where('id',session('business_id')) ;
        })
        ->get();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function rules()
    {

        $rules = [

            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'work_id' => 'nullable|numeric',
            'traivis_id' => 'nullable|numeric',
            'selectedDepartment' => 'required|array',
            'selectedPosition' => 'required',
            'selectedProject' => 'required|array',
            'selectedBranch' => 'required|array',
            'issueDate.*' => 'nullable|date|before_or_equal:today',
            'upcomingDate.*' => 'nullable|date|after_or_equal:today',
            'certificate.*' => 'nullable|mimes:doc,docx,pdf,png,jpg,jpeg',
            'selectedContactor'=>'nullable',
            'contractorName'=>'nullable',
            'contractorEmail'=>'nullable',
            'contractorPhone'=>'nullable',

        ];
        if($this->isNotStaff){
            $rules['contractorName'] = 'nullable|required_without:selectedContactor';
            $rules['contractorEmail'] = 'nullable|required_without:selectedContactor';
            $rules['contractorPhone'] = 'nullable|required_without:selectedContactor';
        }
        if ($this->updateOrCreateForm == 'update') {
            $rules['email'] = 'required|email';
        }

        return $rules;
    }
    public function toggleIsStaff()
    {
        $this->isNotStaff = !$this->isNotStaff ;
    }
    public function store()
    {
        $this->resetForm();
        $this->updateOrCreateForm = "create";
        
    }
    public function create()
    {
        setPermissionsTeamId(session('business_id'));
        if (Auth::user() && Auth::user()->can('organization_workforce_create')) {
            
            
            $data = $this->validate();
            $userpassword = str_random(9) ;
            $user = User::create([
                'name' => $data['name'],
                "email" => $data['email'],
                "phone" => $data['phone'],
                "password"=>Hash::make($userpassword)
            ]);
            try {
                Mail::to($user->email)->send(new ContractorInvitationMail($user,$userpassword , 'Employee'));
            } catch (\Throwable $th) {
                //throw $th;
            }

            $enterprise = EnterpriseWorkforceModel::create([
                'company_id' => session('business_id'),
                'user_id' => $user->id,
                'position_id' => $data['selectedPosition'],
                'work_id' => $data['work_id'],
                'traivis_id' => $data['traivis_id'],
                'status' => 1,
            ]);

            $enterprise->departments()->attach($data['selectedDepartment']);
            $enterprise->projects()->attach($data['selectedProject']);
            $enterprise->branches()->attach($data['selectedBranch']);


            foreach($this->coursesCollection as $course){
                $enterprise->companyRequiredCourses()->syncWithoutDetaching($course['id']);
            }

            if ($this->issueDate) {

                foreach ($this->issueDate as $key => $value) {
                    
                    $enterprise->companyRequiredCourses()->updateExistingPivot($key, ['issue_date' => Carbon::parse($value)]);
                }
            } 

            if ($this->upcomingDate) {
                
                foreach ($this->upcomingDate as $key => $value) {
                    // $upcomingDataArray=[$key, ['upcoming_date' => Carbon::parse($value)]]; 
                    $enterprise->companyRequiredCourses()->updateExistingPivot($key, ['upcoming_date' => Carbon::parse($value)]);
                }
            }

            
                
            
            // dd($coursesIds);
            // $enterprise->companyRequiredCourses()->syncWithoutDetaching($coursesIds);

            if ($this->certificate) {

                foreach ($this->certificate as $key => $value) {
                    $workforceCourseModel = EnterpriseRequiredCourseEnterpriseWorkforce::where('enterprise_workforce_id', $enterprise->id)
                        ->where('enterprise_required_course_id', $key)->first();
                    $workforceCourseModel->addMedia($value->getRealPath())
                        ->usingName($value->getClientOriginalName())
                        ->toMediaCollection('workforce');
                }
            }
            if($this->isNotStaff ){
                $password = str_random(9) ;
                if ($data['contractorName']) {
                    $contractor = User::firstOrCreate([
                        "email" => $data['contractorEmail'],
                    ],[
                        'name' => $data['contractorName'],
                        "phone" => $data['contractorPhone'],
                        "password"=>Hash::make($password)
                    ]);

                    $contractor->assignRole('contractor_manger') ;
                    if($contractor->created_at->isSameDay(Carbon::today())    ){
                        try {
                            Mail::to($contractor->email)->send(new ContractorInvitationMail($contractor,$password));
                        } catch (\Throwable $th) {
                            //throw $th;
                        }
                        
                    }
                    
                }elseif ($data['selectedContactor']) {
                    $contractor = User::find($data['selectedContactor']);
                }
                ContractorEmployee::create([
                    'contractor_id'=>$contractor->id,
                    'employee_id'=>$user->id,
                    'business_id'=>session('business_id')
                ]);
                $contractor->businesses()->syncWithoutDetaching(session('business_id'));
                $this->setContarctors();
            }
            $this->resetForm();
            
            // $this->showEmployeeForm = false;
        }
        $this->emit('refreshEmployee');
        $this->emit('closeModal');
    }

    public function edit($workforceID)
    {

        $this->resetForm();
        $this->updateOrCreateForm = "update";
        $this->showWorkforceData = EnterpriseWorkforceModel::with('departments', 'projects', 'user', 'position', 'branches')->find($workforceID);
        $this->name = $this->showWorkforceData->user->name;
        $this->email = $this->showWorkforceData->user->email;
        $this->phone = $this->showWorkforceData->user->phone;
        $this->work_id = $this->showWorkforceData->work_id;
        $this->traivis_id = $this->showWorkforceData->traivis_id;
        $this->selectedPosition = $this->showWorkforceData->position_id;

        $this->selectedDepartment = $this->showWorkforceData->departments->pluck('id')->toArray();
        $this->selectedProject = $this->showWorkforceData->projects->pluck('id')->toArray();
        $this->selectedBranch = $this->showWorkforceData->branches->pluck('id')->toArray();
        

        $this->getWorkforceCoursesData = EnterpriseRequiredCourseEnterpriseWorkforce::with('media')->where('enterprise_workforce_id', $this->showWorkforceData->id)->get();
        foreach($this->getWorkforceCoursesData as $course){
            array_push($this->coursesIds,$course->enterprise_required_course_id);
            if($course->issue_date){

                $this->issueDate[$course->enterprise_required_course_id]=$course->issue_date; 

            }

            if($course->upcoming_date){
               $this->upcomingDate[$course->enterprise_required_course_id]=$course->upcoming_date;
            }
        }

       

        // dd($this->coursesIds);
        $this->userData = User::find($this->showWorkforceData->user->id);
        // dd($this->issueDate);
        // dd($this->coursesCollection);
       $contractor = ContractorEmployee::where('employee_id',$this->showWorkforceData->user->id)
                                        ->where('business_id',session('business_id'))->first();
        if($contractor){
            $this->isNotStaff = true ;
            $this->selectedContactor = $contractor->contractor_id ;
        }
    }

    public function update()
    {
        setPermissionsTeamId(session('business_id'));

        if (Auth::user() && Auth::user()->can('organization_workforce_edit')) {

            $data = $this->validate();
            $this->userData->update([
                'name' => $data['name'],
                "email" => $data['email'],
                "phone" => $data['phone'],
            ]
            );

            $this->showWorkforceData->update([
                'work_id' => $data['work_id'],
                'traivis_id' => $data['traivis_id'],
            ]);

            $this->showWorkforceData->departments()->sync($this->selectedDepartment);
            $this->showWorkforceData->projects()->sync($this->selectedProject);
            $this->showWorkforceData->branches()->sync($this->selectedBranch);

            foreach($this->coursesCollection as $course){
                $this->showWorkforceData->companyRequiredCourses()->syncWithoutDetaching($course['id']);
            }

            if ($this->issueDate) {

                foreach ($this->issueDate as $key => $value) {
                    
                    $this->showWorkforceData->companyRequiredCourses()->updateExistingPivot($key, ['issue_date' => Carbon::parse($value)]);
                }
            } 

            if ($this->upcomingDate) {
                
                foreach ($this->upcomingDate as $key => $value) {
                    // $upcomingDataArray=[$key, ['upcoming_date' => Carbon::parse($value)]]; 
                    $this->showWorkforceData->companyRequiredCourses()->updateExistingPivot($key, ['upcoming_date' => Carbon::parse($value)]);
                }
            }
            // dd($this->certificate);
            if ($this->certificate) {

                // dd($this->certificate);
                foreach ($this->certificate as $key => $value) {
                    $workforceCourseModel = EnterpriseRequiredCourseEnterpriseWorkforce::where('enterprise_workforce_id', $this->showWorkforceData->id)
                        ->where('enterprise_required_course_id', $key)->first();
                        if($workforceCourseModel && $workforceCourseModel->media->first()){
                            $workforceCourseModel->media->first()->delete();
                        }
                    $workforceCourseModel->addMedia($value->getRealPath())
                        ->usingName($value->getClientOriginalName())
                        ->toMediaCollection('workforce');
                }
            }
        }
        if($this->isNotStaff ){
            $password = str_random(9) ;
            if ($data['contractorName']) {
                $contractor = User::firstOrCreate([
                    "email" => $data['contractorEmail'],
                ],[
                    'name' => $data['contractorName'],
                    "phone" => $data['contractorPhone'],
                ]);
                $contractor->assignRole('contractor_manger') ;
                if($contractor->created_at->isSameDay(Carbon::today())    ){
                    try {
                        Mail::to($contractor->email)->send(new ContractorInvitationMail($contractor,$password));
                    } catch (\Throwable $th) {
                        //throw $th;
                    }
                    
                }
            }elseif ($data['selectedContactor']) {
                $contractor = User::find($data['selectedContactor']);
            }
            ContractorEmployee::updateOrCreate([
                'employee_id'=>$this->userData->id,
                'business_id'=>session('business_id')
                ],
                [
                'contractor_id'=>$contractor->id,
            ]);
            $contractor->businesses()->syncWithoutDetaching(session('business_id'));
            $this->setContarctors();
        }
        $this->resetForm();
        $this->emit('refreshEmployee');
        $this->emit('closeModal');
    }

    public function clearAllFilters()
    {
        $this->filterName = "";
        $this->filterByPosition = [];
        $this->filterByDepartment = [];
        $this->filterByBranch = [];
        $this->filterByProject = [];

    }

    public function removePositionFilter($positionId)
    {

        if (($key = array_search($positionId, $this->filterByPosition)) !== false) {
            unset($this->filterByPosition[$key]);
        }

    }

    public function removeDevelopmentFilter($developmentId)
    {

        if (($key = array_search($developmentId, $this->filterByDepartment)) !== false) {
            unset($this->filterByDepartment[$key]);
        }

    }

    public function removeProjectFilter($projectId)
    {

        if (($key = array_search($projectId, $this->filterByProject)) !== false) {
            unset($this->filterByProject[$key]);
        }

    }

    public function removeBranchFilter($branchId)
    {

        if (($key = array_search($branchId, $this->filterByBranch)) !== false) {
            unset($this->filterByBranch[$key]);
        }

    }

    public function resetForm()
    {
        $this->resetValidation();
        $this->emit('refreshMultiSelect');
        $this->selectedPosition = null;
        $this->selectedDepartment = [];
        $this->selectedProject = [];
        $this->selectedBranch = [];
        $this->reset(['name', 'email', 'phone', 'work_id', 'traivis_id', 'selectedPosition', 'issueDate', 'certificate', 'upcomingDate','coursesCollection','getWorkforceCoursesData' , 'contractorName' ,'contractorEmail' ,'contractorPhone']);
    }

    public function getMedia($courseId)
    {
        // $media = $this->getWorkforceCoursesData->where('enterprise_required_course_id', $courseId)->first()->media->first();
        
        // return response()->download($media->getPath(), $media->name);
        
        
    }
    public function getPositionName($id)
    {
        return Position::find($id) ? Position::find($id)->position_name_en : null ;
    }

    public function render()
    {
        setPermissionsTeamId(session('business_id'));

        // dd(Auth::user()->getPermissionsViaRoles()->toArray());

        $Workforces =
        EnterpriseWorkforceModel::where('company_id', session('business_id'))->with('user', 'departments', 'position', 'branches', 'projects')
        ;

        setPermissionsTeamId(session('business_id'));
        
        

        if ($this->filterName) {
            $userName = $this->filterName;
            $Workforces = $Workforces->whereHas('user', function ($q) use ($userName) {

                $q->where('name', 'LIKE', "%{$userName}%");
            });
        }

        if ($this->filterByPosition) {
            $positionFilter = $this->filterByPosition;
            $Workforces = $Workforces->whereHas('position', function ($q) use ($positionFilter) {$q->whereIn('id', $positionFilter);
            });
        }

        if ($this->filterByDepartment) {
            $dpFilter = $this->filterByDepartment;
            // dd($dpFilter);
            $Workforces = $Workforces->whereHas('departments', function ($q) use ($dpFilter) {$q->whereIn('department_id', $dpFilter);
            });
        }

        if ($this->filterByProject) {
            $projFilter = $this->filterByProject;
            $Workforces = $Workforces->whereHas('projects', function ($q) use ($projFilter) {$q->whereIn('project_id', $projFilter);
            });
        }

        if ($this->filterByBranch) {
            $branchFilter = $this->filterByBranch;
            $Workforces = $Workforces->whereHas('branches', function ($q) use ($branchFilter) {$q->whereIn('branch_id', $branchFilter);
            });
        }


        if(auth()->user()->hasRole('contractor_manger')){
            $user_ids = ContractorEmployee::where('contractor_id',auth()->id())->where('business_id',session('business_id'))->get('employee_id')->toArray();
            // dd(array_flatten($user_ids));
            $Workforces =  $Workforces->whereIn('user_id',array_flatten($user_ids));
        }elseif (auth()->user()->hasRole('project_manager')) {
            $projectManger = EnterpriseWorkforceModel::where('user_id',auth()->id())->with('projects')->first();
            $projFilter = $projectManger?->projects?->pluck('id');
            $Workforces = $Workforces->whereHas('projects', function ($q) use ($projFilter) {$q->whereIn('project_id', $projFilter); });
        }


        // debug($this->selectedDepartment,$this->filterByDepartment);
        $Workforces = $Workforces->orderBy('id', 'Desc')->get();

        // dd($Workforces);
        $this->coursesCollection = collect();
        $workforceCourses = EnterpriseRequiredCourse::where('company_id', session('business_id'))->with('departments', 'positions', 'branches', 'projects');

        // dd($this->this->workforceCourses);
        //  $this->selectedPosition =2;
        if ($this->selectedPosition) {

            // dd($positionFilter);
            // debug($positionFilter);
            $workforceCoursesWithSelectedPosition = EnterpriseRequiredCourse::where('company_id', session('business_id'))->with('departments', 'positions', 'branches', 'projects')->whereHas('positions', function ($q) {
                $q->where('position_id', $this->selectedPosition);
            })->get();

            // dd($workforceCoursesWithSelectedPosition);
            $this->coursesCollection = $this->coursesCollection->concat($workforceCoursesWithSelectedPosition);
        }

        // $this->selectedDepartment =3;
        if ($this->selectedDepartment) {

            // debug($this->selectedDepartment);
            $workforceCoursesWithSelectedDepartment = EnterpriseRequiredCourse::where('company_id', session('business_id'))->with('departments', 'positions', 'branches', 'projects')
                ->whereHas('departments', function ($q) {$q->whereIn('department_id', $this->selectedDepartment);
                })->get();
            // dd($workforceCoursesWithSelectedDepartment);
            // dd($departmentCourses);
            $this->coursesCollection = $this->coursesCollection->concat($workforceCoursesWithSelectedDepartment);
            // dd($this->coursesCollection);
        }

        //   dd($this->coursesCollection);

        if ($this->selectedProject) {
            $workforceCoursesWithSelectedProject = EnterpriseRequiredCourse::where('company_id', session('business_id'))->with('projects')->whereHas('projects', function ($q) {
                $q->whereIn('project_id', $this->selectedProject);
            })->get();

            // dd($workforceCoursesWithSelectedProject);
            $this->coursesCollection = $this->coursesCollection->concat($workforceCoursesWithSelectedProject);

        }

        if ($this->selectedBranch) {
            $workforceCoursesWithSelectedBranch = EnterpriseRequiredCourse::where('company_id', session('business_id'))->with('branches')->whereHas('branches', function ($q) {
                $q->whereIn('branch_id', $this->selectedBranch);
            })->get();

            // dd($workforceCoursesWithSelectedBranch);

            $this->coursesCollection = $this->coursesCollection->concat($workforceCoursesWithSelectedBranch);

        }

        // if ( $this->selectedPosition || ($this->selectedBranch) || ($this->selectedProject) || ($this->selectedDepartment)){
        //     // $this->workforceCourses = $this->workforceCourses->get();
        //     // dd($this->workforceCourses);

        // }

        // $this->workforceCourses=$this->workforceCourses->get();

        // dd($Workforces);

        return view('livewire..organization-stracture.enterprise-workforce',
            compact([
                'Workforces',
            ])

        );
    }
}
