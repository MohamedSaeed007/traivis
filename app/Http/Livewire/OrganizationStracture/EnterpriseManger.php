<?php

namespace App\Http\Livewire\OrganizationStracture;

use App\Mail\ContractorInvitationMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Models\EnterpriseWorkforce as EnterpriseWorkforceModel;

class EnterpriseManger extends Component
{
    public $user ;
    public $selectedRole ='' ;
    public $roles = [
        1=>'training_manager',
        2=>'bidding_manager',
        3=>'project_manager',
        4=>'internal_instracture',
    ];
    protected $listeners = ['refreshEmployee' => 'render'];
    public function rules()
    {

        $rules = [
            'user' => 'required|exists:users,id',
            'selectedRole'=> 'required|string',
        ];
        return $rules;
    }
    public function resetForm(){
        $this->resetValidation();
        $this->user = new User();
        $this->selectedRole = '';
        $this->emit('closeModal');
    }
    public function store()
    {
        $this->resetForm();
    }
    public function create()
    {
        setPermissionsTeamId(session('business_id'));
        $data = $this->validate();
            $user = User::find($data['user']);
            $user->syncRoles($data['selectedRole']) ;
            $user->businesses()->syncWithoutDetaching(session('business_id'));
            $this->emit('closeModal');
    }
    public function edit($id){
        setPermissionsTeamId(session('business_id'));
        $user = User::whereId($id)->with('roles')->first() ;
        $this->user = $user->id ;
        $this->selectedRole = $user?->roles?->first()?->name ;
    }
    public function render()
    {
        setPermissionsTeamId(session('business_id'));
        $items =
        EnterpriseWorkforceModel::where('company_id', session('business_id'))->with('user')->get();
        ;
        // $items = User::whereHas('roles',function($query){
        //     $query->whereIn('name',$this->roles) ;
        // })->with('roles')->get();
        return view('livewire.organization-stracture.enterprise-manger',compact('items'));
    }
}
