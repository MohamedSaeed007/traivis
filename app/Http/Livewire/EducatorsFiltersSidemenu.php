<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Course;
use App\Models\Industry;
use App\Models\Language;
use Carbon\CarbonInterval;
use Livewire\Component;

class EducatorsFiltersSidemenu extends Component
{

    public $selectedCategories = [];
    public $selectedIndustries = [];
    // public $selectedLanguages = [];
    // public $selectedDeliveryModes = [];

    // public $categories = [];
    // public $Industries = [];
    // public $Languages = [];
    // public $deliveryModes = [];

    // public $showCategories = false;
    // public $showIndustries = false;
    // public $showLanguages = false;
    // public $showDeliveryModes = false;

    public $businessTypeFilter = null;

    protected $listeners = [
        'doFilters' => 'updateFilters',
    ];

    protected $queryString = [
        'selectedCategories' => [
            'except' => '',
            'as'     => 'selectedCategories'
        ],
        'selectedIndustries'    => [
            'except' => '',
            'as'     => 'selectedIndustries'
        ],
        // 'selectedLanguages'    => [
        //     'except' => '',
        //     'as'     => 'selectedLanguages'
        // ],
        // 'selectedDeliveryModes'    => [
        //     'except' => '',
        //     'as'     => 'selectedDeliveryModes'
        // ],
    ];

    public function mount()
    {
        // $this->showCategories = !empty($this->selectedTopic);
        // $this->showIndustries = !empty($this->selectedIndustries);
        // $this->showLanguages = !empty($this->selectedLanguages);
        // $this->showDeliveryModes = !empty($this->selectedDeliveryModes);
        // $this->categories = Category::all();
        // $this->Industries = Industry::all();
        // $this->Languages = Language::all();
        // $this->deliveryModes = config('enums.delivery_modes');
    }

    public function updateFilters($filter)
    {
        if (array_key_exists('categories', $filter)) {
            $this->selectedCategories = $filter['categories'];
        }
        if (array_key_exists('industries', $filter)) {
            $this->selectedIndustries = $filter['industries'];
        }
    }

    public function updatedBusinessTypeFilter()
    {
        $this->emit('doFilter', ['businessTypeFilter' => $this->businessTypeFilter]);
    }

    public function updatedSelectedCategories()
    {
        $this->emit('doFilter', [
            'categories' => $this->selectedCategories,
        ]);
    }
    public function updatedSelectedIndustries()
    {
        $this->emit('doFilter', [
            'industries' => $this->selectedIndustries,
        ]);
    }
    // public function updatedSelectedLanguages()
    // {
    //     $this->emit('doFilter', [
    //         'languages' => $this->selectedLanguages,
    //     ]);
    // }

    public function resetFilters()
    {
        $this->reset(
            'businessTypeFilter', 
            'selectedCategories', 
            'selectedIndustries', 
            // 'selectedLanguages'
        );
        $this->updatedBusinessTypeFilter();
        $this->updatedSelectedCategories();
        $this->updatedSelectedIndustries();
        // $this->updatedSelectedLanguages();
    }



    public function render()
    {
        $categories = Category::parent()->with('sub_categories')->get();
        $industries = Industry::all();
        // $languages = Language::all();
        // $deliveryModes = config('enums.delivery_modes');

        return view('livewire.educators-filters-sidemenu', compact(['categories', 'industries']));
    }
}
