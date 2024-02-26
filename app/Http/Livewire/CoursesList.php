<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Course;
use App\Models\Industry;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class CoursesList extends Component
{
    use WithPagination;

    protected $listeners = [
        'doFilter' => 'updateFilters',
        'toggleWishlistEmit' => 'toggleWishList',
    ];

    public $filters = [
        'search' => '',
        'categories' => null,
        'industries' => null,
        'levelSection' => null
    ];

    public $sortField = 'created_at';
    public $sortDirection = 'desc';
    public $sortOptions;
    public $perPage = 12;
    public $perPageList = [12, 24, 48];

    protected $queryString = [
        //        'search'   => ['except' => ''],
    ];

    public function mount()
    {
        $this->filters['search'] = request()->get('search');
        $this->filters['categories'] = request()->get('selectedCategories');
        $this->filters['industries'] = request()->get('selectedIndustries');
//        $this->filters['businessTypeFilter'] = request()->get('businessTypeFilter');
        $this->sortOptions = [
            'created_at' => [
                'id' => 'created_at',
                'label' => __('Newest')
            ],
            'title' => [
                'id' => 'title',
                'label' => __('Title')
            ],
            'price' => [
                'id' => 'price',
                'label' => __('Price')
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

    public function editCourse($id)
    {
        $course = Course::find($id);
        $user = $course->maker?->owner;
        $business = $user->businesses()->first();
        session(['business_id' => $business->id]);
        return redirect(route('instructor-dashboard-courseDetails', ['id' => $course->id]));
    }

    public function sortBy($field)
    {
        $this->sortField = match ($field) {
            'created_at' => 'created_at',
            'title' => 'title',
            'price' => 'price'
        };
    }

    public function toggleWishList($id)
    {
        if ($wishlist = Wishlist::whereCourseId($id)->whereUserId(auth()->user()->id)->first()) {
            $wishlist->delete();
        } else {
            Wishlist::create([
                'course_id' => $id,
                'user_id' => auth()->user()->id,
            ]);
        }
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
        $filters = $this->filters;

        $courses = Course::publish()->with('sections')->withCount('courseViews')
            /*->when($this->filters['search'], function ($query) {
                $query->where('title', 'like', '%' . $this->filters['search'] . '%');
            })*/
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
//            ->when($this->filters['levelSection'], function ($query) {
//                //                $query->join('sections', 'sections.course_id', 'courses.id')
//                $query->whereIn('sections.section_type', $this->filters['levelSection'])
//                    ->groupBy('courses.id');
//            })
            ->when($this->sortField, function (Builder $query) {
                /*if ($this->sortField == 'aPrice') {
                    $query->selectRaw('courses.*, CASE WHEN courses.sale_price IS NOT NULL THEN courses.sale_price ELSE courses.price END AS aPrice');
                }*/
                $query->orderBy($this->sortField, $this->sortDirection);
            })
            ->paginate($this->perPage);

        $coursesIDs = Course::where('business_id', session('business_id'))->pluck('id')->toArray();

        $filteredCategories = Category::find($this->filters['categories']);
        $filteredIndustries = Industry::find($this->filters['industries']);

        return view('livewire.courses-list', compact(['courses', 'filters', 'filteredCategories', 'filteredIndustries']));
    }
}
