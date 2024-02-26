<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\BusinessFollow;
use App\Models\Category;
use App\Models\Industry;
use Livewire\Component;
use Livewire\WithPagination;

class EducatorsList extends Component
{
    use WithPagination;

    protected $listeners = [
        'doFilter' => 'updateFilters',
    ];

    public $filters = [
        'search' => '',
        'category' => null,
        'topic' => null,
        'levelSection' => null
    ];

    public $sortField = 'created_at';
    public $sortDirection = 'desc';
    public $sortOptions;
    public $perPage = 12;
    public $perPageList = [12, 24, 48];

    public function mount()
    {
        $this->filters['search'] = request()->get('search');
        $this->filters['categories'] = request()->get('selectedCategories');
        $this->filters['industries'] = request()->get('selectedIndustries');
        // $this->filters['languages'] = request()->get('selectedLanguages');
        $this->filters['businessTypeFilter'] = request()->get('businessTypeFilter');
        $this->sortOptions = [
            'created_at' => [
                'id' => 'created_at',
                'label' => __('Newest')
            ],
            'business_name' => [
                'id' => 'business_name',
                'label' => __('Business Name')
            ],

            //            'relevance'         => __('Most Relevant'),
            //            'most-reviewed'     => __('Most Reviewed'),
            //            'highest-rated'     => __('Highest Rated'),
            //            'price-low-to-high' => __('Lowest Price'),
            //            'price-high-to-low' => __('Highest Price')

        ];
    }

    public function updateFilters($filter)
    {
        $this->resetPage();
        $this->filters = array_merge($this->filters, $filter);
    }

    public function sortBy($field)
    {
        $this->sortField = match ($field) {
            'created_at' => 'created_at',
            'business_name' => 'business_name',
        };
    }

    public function follow($id)
    {
        BusinessFollow::create([
            'business_id' => $id,
            'user_id' => auth()->user()->id,
        ]);
    }

    public function unFollow($id)
    {
        BusinessFollow::where('business_id', $id)->delete();
    }

    public function goToProfile($id)
    {
        return redirect(route('business-profile-social', $id));
    }

    public function goToDashboard($id)
    {
        session(['business_id' => $id]);
        return redirect(route('instructor-dashboard'));
    }

    public function removeItemFromCategoriesFilters($id)
    {
        if (($key = array_search($id, $this->filters['categories'])) !== false) {
            unset($this->filters['categories'][$key]);
        }
        $this->emit('doFilters', ['categories' => $this->filters['categories']]);
    }

    public function removeItemFromIndustriesFilters($id)
    {
        if (($key = array_search($id, $this->filters['industries'])) !== false) {
            unset($this->filters['industries'][$key]);
        }
        $this->emit('doFilters', ['industries' => $this->filters['industries']]);
    }

    public function render()
    {
        // dd($this->filters['categories']);
        $filters = $this->filters;

        $businesses = Business::query()
//            ->when($this->filters['businessTypeFilter'], function ($q) {
//                $q->where('business_type', $this->filters['businessTypeFilter']);
//            }, function ($q) {
//                $q->whereIn('business_type', ['institute', 'instructor']);
//            })
            ->when($this->filters['categories'], function ($query) {
                $query->whereHas('categories', function ($q) {
                    $q->whereIn('id', $this->filters['categories']);
                });
            })
            ->when($this->filters['industries'], function ($query) {
                $query->whereHas('industries', function ($q) {
                    $q->whereIn('id', $this->filters['industries']);
                });
            })
            // ->when($this->filters['languages'], function ($query) {
            //     $query->whereHas('languages', function ($q) {
            //         $q->whereIn('id', $this->filters['languages']);
            //     });
            // })
            ->when($this->sortField, function ($query) {
                /*if ($this->sortField == 'aPrice') {
                    $query->selectRaw('courses.*, CASE WHEN courses.sale_price IS NOT NULL THEN courses.sale_price ELSE courses.price END AS aPrice');
                }*/
                $query->orderBy($this->sortField, $this->sortDirection);
            })
            ->paginate($this->perPage);

        $filteredCategories = Category::find($this->filters['categories']);
        $filteredIndustries = Industry::find($this->filters['industries']);

        // ViewsRepository::createCourseView($coursesIDs);
        return view('livewire.educators-list', compact(['businesses', 'filters', 'filteredCategories', 'filteredIndustries']));
    }
}
