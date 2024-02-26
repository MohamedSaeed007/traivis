<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class InstructorCoursesList extends Component
{
    use WithPagination;

    protected $listeners = [
        'doFilter' => 'updateFilters',
    ];

    public $filters = [
        'search'       => '',
        'category'     => null,
        'topic'        => null,
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
        $this->filters['category'] = request()->get('category');
        $this->filters['topic'] = request()->get('topic');
        $this->filters['levelSection'] = request()->get('dm');
        $this->sortOptions = [
            [
                'id'    => 'newest',
                'label' => __('Newest')
            ],
            [
                'id'    => 'title',
                'label' => __('Title')
            ],
            [
                'id'    => 'price',
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

    public function sortBy($field)
    {
        $this->sortField = match ($field) {
            'newest' => 'created_at',
            'title'  => 'title',
            'price'  => 'aPrice'
        };
    }

    public function render()
    {
//        busienss_id
        $filters = $this->filters;
        $courses = Course::where('business_id',session('business_id'))->with('sections')
            ->when($this->filters['search'], function ($query) {
                $query->where('title', 'like', '%'.$this->filters['search'].'%');
            })
            ->when($this->filters['category'], function ($query) {
                $query->where('second_category_id', $this->filters['category']);
            })
            ->when($this->filters['topic'], function ($query) {
                $query->where('category_id', $this->filters['topic']);
            })
            ->when($this->filters['levelSection'], function ($query) {
//                $query->join('sections', 'sections.course_id', 'courses.id')
                $query->whereIn('sections.section_type', $this->filters['levelSection'])
                    ->groupBy('courses.id');
            })
            ->when($this->sortField, function (Builder $query) {
                if ($this->sortField == 'aPrice') {
                    $query->selectRaw('courses.*, CASE WHEN courses.sale_price IS NOT NULL THEN courses.sale_price ELSE courses.price END AS aPrice');
                }
                $query->orderBy($this->sortField, $this->sortDirection);
            })
//            ->toSql();
            ->paginate($this->perPage);
//        dd($courses->first()->toArray());

        return view('livewire.instructor-courses-list', compact('courses', 'filters'));

    }
    
}
