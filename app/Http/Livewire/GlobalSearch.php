<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GlobalSearch extends Component
{
    public $search = '';
    protected $rules = [
        'search' => 'nullable',
    ];
    protected $queryString = [
        'search'   => ['except' => ''],
//        'category' => ['except' => ''],
    ];

    public function updatedSearch()
    {
        $this->emit('doFilter', ['search' => $this->search]);
    }
    public function searchFunction()
    {
        return redirect()->route('search',['search'=> $this->search]);
    }
    public function render()
    {
        return view('livewire.global-search');
    }
}
