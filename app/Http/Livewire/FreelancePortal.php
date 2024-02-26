<?php

namespace App\Http\Livewire;

use App\Models\InstituteInstructorInvitation;
use Livewire\Component;

class FreelancePortal extends Component
{
    public $invitations;
    public $total_hours;
    public $total_incomes;
    public $total_incomes_currency;
    public $accepted_invitation;
    public $pending_invitation;
    public $rejected_invitation;
    public $search = '';
    public $date_from = '';
    public $date_to = '';
    public $from_price = '';
    public $to_price = '';
    public $sort_by = '';
    public array $show_columns = [
        'course_id',
        'institute_id',
        'started_at',
        'instructor_response',
        'institute_response',
        'status'
    ];

    protected $queryString = [
        'search' => [
            'except' => ''
        ],
        'date_from' => [
            'except' => ''
        ],
        'date_to' => [
            'except' => ''
        ],
        'from_price' => [
            'except' => ''
        ],
        'to_price' => [
            'except' => ''
        ],
        'sort_by' => [
            'except' => ''
        ]
    ];

    public function mount()
    {
        if ($this->from_price == '') {
            $this->from_price = 1000;
        }
        if ($this->to_price == '') {
            $this->to_price = 7000;
        }
        $this->invitations = InstituteInstructorInvitation::where(
            'instructor_id',
            session('business_id')
        )
            ->when($this->search != '', function ($q) {
                $q->whereRelation('course', 'title', 'like', '%' . $this->search . '%');
            })
            ->when($this->date_from != '' && $this->date_to != '', function ($q) {
                $q->whereDate('started_at', '>=', $this->date_from);
                $q->whereDate('started_at', '<=', $this->date_to);
            })
            ->when($this->from_price != '' && $this->to_price != '', function ($q) {
                $q->where('agreed_price', '>=', $this->from_price);
                $q->where('agreed_price', '<=', $this->to_price);
            })
            ->when($this->sort_by != '', function ($q) {
                $q->orderBy($this->sort_by);
            })
            //TODO: refactor is needed here
            ->get();

        //Summaries
        $this->total_hours = $this->invitations->sum('hours');
        $this->total_incomes = $this->invitations->sum('agreed_price');
        $this->total_incomes_currency = "$";
        $this->accepted_invitation = $this->invitations->where('status', 'accepted')->count();
        $this->pending_invitation = $this->invitations->where('status', 'pending')->count();
        $this->rejected_invitation = $this->invitations->where('status', 'rejected')->count();
    }

    public function searchFilter()
    {
        $this->invitations = InstituteInstructorInvitation::where(
            'instructor_id',
            session('business_id')
        )
            ->when($this->search != '', function ($q) {
                $q->whereRelation('course', 'title', 'like', '%' . $this->search . '%');
            })
            ->when($this->date_from != '' && $this->date_to != '', function ($q) {
                $q->whereDate('started_at', '>=', $this->date_from);
                $q->whereDate('started_at', '<=', $this->date_to);
            })
            ->when($this->from_price != '' && $this->to_price != '', function ($q) {
                $q->where('agreed_price', '>=', $this->from_price);
                $q->where('agreed_price', '<=', $this->to_price);
            })
            ->when($this->sort_by != '', function ($q) {
                $q->orderBy($this->sort_by);
            })
            ->get();

        //Summaries
        $this->total_hours = $this->invitations->sum('hours');
        $this->total_incomes = $this->invitations->sum('agreed_price');
        $this->total_incomes_currency = 'EGP';
        $this->accepted_invitation = $this->invitations->where('status', 'accepted')->count();
        $this->pending_invitation = $this->invitations->where('status', 'pending')->count();
        $this->rejected_invitation = $this->invitations->where('status', 'rejected')->count();
    }
    public function clearFilter()
    {
        $this->search = '';
        $this->date_from = '';
        $this->date_to = '';
        $this->from_price = '';
        $this->to_price = '';
        $this->sort_by = '';

        $this->invitations = InstituteInstructorInvitation::where(
            'instructor_id',
            session('business_id')
        )
            ->when($this->search != '', function ($q) {
                $q->whereRelation('course', 'title', 'like', '%' . $this->search . '%');
            })
            ->when($this->date_from != '' && $this->date_to != '', function ($q) {
                $q->whereDate('started_at', '>=', $this->date_from);
                $q->whereDate('started_at', '<=', $this->date_to);
            })
            ->when($this->from_price != '' && $this->to_price != '', function ($q) {
                $q->where('agreed_price', '>=', $this->from_price);
                $q->where('agreed_price', '<=', $this->to_price);
            })
            ->when($this->sort_by != '', function ($q) {
                $q->orderBy($this->sort_by);
            })
            ->get();
    }
    public function render()
    {
        $from_price = $this->from_price;
        $to_price = $this->to_price;
        return view('livewire.freelance-portal', compact('from_price', 'to_price'));
    }
}
