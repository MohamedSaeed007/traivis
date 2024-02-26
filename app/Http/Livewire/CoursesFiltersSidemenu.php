<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Course;
use Carbon\CarbonInterval;
use Livewire\Component;

class CoursesFiltersSidemenu extends Component
{
    /**
     * @var null
     */
    public $selectedCategory = null;
    /**
     * @var null
     */
    public $selectedTopic = null;
    /**
     * @var null
     */
    public $levelSection = [];
    public $deliveryModes = [];

    public $showTopics = false;
    public $showDeliveryModes = false;

    protected $queryString = [
        'selectedCategory' => [
            'except' => '',
            'as'     => 'category'
        ],
        'selectedTopic'    => [
            'except' => '',
            'as'     => 'topic'
        ],
        'levelSection'     => [
            'except' => '',
            'as'     => 'dm'
        ],
    ];

    public function mount()
    {
        $this->showTopics = !empty($this->selectedTopic);
        $this->showDeliveryModes = !empty($this->levelSection);
        $this->deliveryModes = config('enums.delivery_modes');
    }

    /**
     * @return void
     */
    public function updatedSelectedCategory()
    {
        $this->reset('selectedTopic');
        $this->emit('doFilter', [
            'category' => $this->selectedCategory,
            'topic'    => $this->selectedTopic,
        ]);
    }

    /**
     * @return void
     */
    public function updatedSelectedTopic()
    {
        $this->emit('doFilter', ['topic' => $this->selectedTopic]);
    }

    public function updatedLevelSection()
    {
        $this->emit('doFilter', ['levelSection' => $this->levelSection]);
    }

    public function resetFilters()
    {
        $this->reset('selectedCategory', 'selectedTopic', 'levelSection');
        $this->updatedSelectedCategory();
        $this->updatedSelectedTopic();
        $this->updatedLevelSection();
    }

    public function render()
    {
        $topics = Category::whereCategoryId($this->selectedCategory)->get();
        $categories = Category::parent()->with('sub_categories')->get();
        return view('livewire.courses-filters-sidemenu', compact('categories', 'topics'));
    }
}
