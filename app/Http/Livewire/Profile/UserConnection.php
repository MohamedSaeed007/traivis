<?php

namespace App\Http\Livewire\Profile;

use App\Models\UserConnection as ModelsUserConnection;
use Livewire\Component;

class UserConnection extends Component
{
    public $user ;
    public $canBlock ;
    public function mount()
    {
        $this->canBlock = $this->user->id == auth()->id() ? true : false ;
    }
    public function block($id)
    {
        ModelsUserConnection::where('id',$id)->update([
            'status'=>2 ,
        ]);
    }
    public function accept($id)
    {
        ModelsUserConnection::where('id',$id)->update([
            'status'=>1 ,
        ]);
    }
    public function render()
    {
        
        if ($this->user->id == auth()->id()) {
            $connectionsPending = ModelsUserConnection::where('to_user_id',$this->user->id)
            ->where('status',0)
            ->with('connection')->paginate(25);
            $connectionsblocked = ModelsUserConnection::where('to_user_id',$this->user->id)
            ->where('status',2)
            ->with('connection')->paginate(25);
        }else{
            $connectionsPending=null;
            $connectionsblocked=null;
        }
        $connections = ModelsUserConnection::where(function($q){
            $q->where( 'to_user_id',$this->user->id)->orWhere('from_user_id',$this->user->id);
        })
        ->where('status',1)
        ->with(['connection','user'])->paginate(25);
        return view('livewire.profile.user-connection', compact('connections','connectionsPending','connectionsblocked'));
    }
}
