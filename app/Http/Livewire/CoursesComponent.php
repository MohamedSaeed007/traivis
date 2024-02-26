<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\CourseTask;
use App\Models\InstituteInstructorInvitation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class CoursesComponent extends Component
{
    use AuthorizesRequests;
    public $courses, $assigned_courses;
    public $total_courses;
    public $search = '';
    public $date_from = '';
    public $date_to = '';
    public $from_price = '';
    public $to_price = '';
    public $sort_by = '';
    public $publish_status = '';
    public $delivery_mode = '';
    public $dashBoard;

    public $count_published = '';
    public $count_draft = '';
    public $count_f2f = '';
    public $count_live = '';
    public $count_recorded = '';

    public array $show_columns;

    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'date_from' => [
            'except' => '',
        ],
        'date_to' => [
            'except' => '',
        ],
        'from_price' => [
            'except' => '',
        ],
        'to_price' => [
            'except' => '',
        ],
        'sort_by' => [
            'except' => '',
        ],
        'publish_status' => [
            'except' => '',
        ],
        'delivery_mode' => [
            'except' => '',
        ],
        //        'show_columns' => [
        //            'as' => 'col'
        //        ]
    ];

    public function mount()
    {
        $this->dashBoard = request()->segment(1);
        if ($this->from_price == '') {
            $this->from_price = 0;
        }
        if ($this->to_price == '') {
            $this->to_price = 10000;
        }

        $this->show_columns = \Auth::user()
            ->settings()
            ->get('show_columns', [
                'id',
                'delivery_mode',
                'course_duration',
                'price',
                'tasks',
                'initial_date',
            ]);
    }

    public function updatedShowColumns($value)
    {
        \Auth::user()
            ->settings()
            ->set('show_columns', $value);
    }

    public function searchFilter()
    {
    }

    public function clearFilter()
    {
        $this->search = '';
        $this->date_from = '';
        $this->date_to = '';
        $this->from_price = '';
        $this->to_price = '';
        $this->sort_by = '';
        $this->publish_status = '';
        $this->delivery_mode = '';
    }

    public function recordedFilter()
    {
        $this->delivery_mode = 'recorded';
    }

    public function liveFilter()
    {
        $this->delivery_mode = 'live';
    }

    public function f2fFilter()
    {
        $this->delivery_mode = 'F2F';
    }

    public function publishedFilter()
    {
        $this->publish_status = 'Published';
    }

    public function draftFilter()
    {
        $this->publish_status = 'Draft';
    }

    public function render()
    {
        $from_price = $this->from_price;
        $to_price = $this->to_price;

        //getCoursesAndAssignedCourses
        $this->getCoursesAndAssignedCourses();

        //Summaries
        $this->getSummaries();

        return view('livewire.courses-component', compact('from_price', 'to_price'));
    }

    public function getCoursesAndAssignedCourses()
    {
        $this->courses = Course::with('tasks')
            ->withCount([
                /*
completed group
    completed
*/
                'tasks as completed_tasks_count' => function (Builder $query) {
                    $query->where('task_status', 'completed');
                },

                /*
pending group
    progress
    extended
    delayed
    extension_request
    complete_request
*/

                'tasks as pending_tasks_count' => function (Builder $query) {
                    $query->whereIn('task_status', [
                        'progress',
                        'extended',
                        'delayed',
                        'extension_request',
                        'complete_request',
                    ]);
                },

                /*
rejected group
    extension_rejected
    complete_rejected
*/

                'tasks as rejected_tasks_count' => function (Builder $query) {
                    $query->whereIn('task_status', ['extension_rejected', 'complete_rejected']);
                },
            ])
            ->where('business_id', session('business_id'))
            ->when($this->search, function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->date_from && $this->date_to, function ($q) {
                $q->whereDate('created_at', '>=', $this->date_from);
                $q->whereDate('created_at', '<=', $this->date_to);
            })
            ->when($this->from_price && $this->to_price, function ($query) {
                $query->where(function ($q) {
                    $q->whereRelation('courseDetails', 'sale_price', '>=', $this->from_price);
                    $q->whereRelation('courseDetails', 'sale_price', '<=', $this->to_price);
                    $q->orWhereRelation('courseDetails', 'sale_price', '=', null);
                });
            })
            ->when($this->publish_status, function ($q) {
                $q->where('publish_status', $this->publish_status);
            })
            ->when($this->delivery_mode, function ($q) {
                $q->where('delivery_mode', $this->delivery_mode);
            })
            ->when($this->sort_by, function ($q) {
                $q->orderBy($this->sort_by);
            })
            ->orderby('id', 'desc')
            //TODO: refactor is needed here
            ->get();
        //Assigned Courses
        $assigned_courses_ids = CourseTask::where('instructor_id', session('business_id'))
            ->pluck('course_id')
            ->toArray();
        $courses_ids = Course::where('business_id', session('business_id'))
            ->pluck('id')
            ->toArray();

        $this->assigned_courses = Course::whereIn('id', $assigned_courses_ids)
            ->whereNotIn('id', $courses_ids)
            ->when($this->search != '', function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->date_from != '' && $this->date_to != '', function ($q) {
                $q->whereDate('created_at', '>=', $this->date_from);
                $q->whereDate('created_at', '<=', $this->date_to);
            })
            ->when($this->from_price != '' && $this->to_price != '', function ($q) {
                $q->whereRelation('courseDetails', 'sale_price', '>=', $this->from_price);
                $q->whereRelation('courseDetails', 'sale_price', '<=', $this->to_price);
                $q->orWhereRelation('courseDetails', 'sale_price', '=', null);
            })
            ->when($this->publish_status != '', function ($q) {
                $q->where('publish_status', $this->publish_status);
            })
            ->when($this->delivery_mode != '', function ($q) {
                $q->where('delivery_mode', $this->delivery_mode);
            })
            ->when($this->sort_by != '', function ($q) {
                $q->orderBy($this->sort_by);
            })
            ->get();
    }

    public function getSummaries()
    {
        $this->total_courses = $this->courses->count() + $this->assigned_courses->count();

        $this->count_draft =
            $this->courses->where('publish_status', 'draft')->count() +
            $this->assigned_courses->where('publish_status', 'draft')->count();
        $this->count_published =
            $this->courses->where('publish_status', 'published')->count() +
            $this->assigned_courses->where('publish_status', 'published')->count();
        $this->count_f2f =
            $this->courses->where('delivery_mode', 'F2F')->count() +
            $this->assigned_courses->where('delivery_mode', 'F2F')->count();
        $this->count_live =
            $this->courses->where('delivery_mode', 'live')->count() +
            $this->assigned_courses->where('delivery_mode', 'live')->count();
        $this->count_recorded =
            $this->courses->where('delivery_mode', 'recorded')->count() +
            $this->assigned_courses->where('delivery_mode', 'recorded')->count();
    }
}