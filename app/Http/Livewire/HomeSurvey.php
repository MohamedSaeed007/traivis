<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Industry;
use App\Models\Language;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class HomeSurvey extends Component
{
    use WithFileUploads;

    public $show = false;
    public $selectedLanguages = [];
    public $selectedIndustries = [];
    public $selectedCategories = [];
    public $categories;
    public $languages;
    public $industries;
    public $deliverMode;
    public $user;
    public $avatar;

    protected $rules = [
        'avatar' => 'nullable|image',
        'selectedLanguages' => 'required|array|min:1',
        'selectedIndustries' => 'required|array|min:1',
        'selectedCategories' => 'required|array|min:1',
        'deliverMode' => 'required',
    ];

    public function mount()
    {
        $this->user = auth()->user();
        $this->industries = Industry::all();
        $this->languages = Language::all();
        $this->categories = Category::all();
        if (!auth()->user()->took_survey) {
            $this->show = true;
        }
    }

    public function submit()
    {
//        dd($this->selectedIndustries,$this->selectedLanguages,$this->selectedCategories);
        $this->validate();
        $this->user->industries()->sync($this->selectedIndustries);
        $this->user->languages()->sync($this->selectedLanguages);
        $this->user->categories()->sync($this->selectedCategories);
        $this->user->delivery_mode = $this->deliverMode;
        $this->user->took_survey = true;
        $this->user->save();
        if ($this->avatar) {
            $this->user
                ->addMedia($this->avatar->getRealPath())
                ->preservingOriginal()
                ->toMediaCollection();
        }
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.home-survey');
    }
}
