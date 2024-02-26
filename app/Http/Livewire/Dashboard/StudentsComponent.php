<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Assignment;
use App\Models\Business;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Livewire\Component;
use App\Models\Student;
use WaleedAhmad\Pinterest\Endpoints\Users;

class StudentsComponent extends Component
{
    public $business_id;
    public $students;
    public $loadCertificates = [];
    public $loadAttendanceRates = [];

    //    protected $listeners = ['refresh' => 'render'];
    protected $rules = [
        'student.name' => 'string',
        'student.email' => 'string',
        'student.phone' => 'string',
    ];

    protected $listeners = [
        'students-refresh' => '$refresh',
    ];

    public function mount()
    {
        $this->business_id = session('business_id');

        $getCurrentEntity = \App\Classes\Helper::getCurrentEntity();
        $businessCoursesArr = $getCurrentEntity->courses()->withOut('courseDetails')->pluck('id');
        $this->students = User::whereHas('courses', function ($q) use ($businessCoursesArr) {
            $q->whereIn('course_id', $businessCoursesArr)
                ->where('course_user.status', 'success');
        })->with([
            'courses' => function ($q) use ($businessCoursesArr) {
                $q->whereIn('course_id', $businessCoursesArr)
                    ->where('course_user.status', 'success');
            },
            'assignments' => function ($q) use ($businessCoursesArr) {
                $q->whereIn('course_id', $businessCoursesArr);
            },
            'attempts' => function ($q) use ($businessCoursesArr) {
                $q->whereIn('course_id', $businessCoursesArr)
                    ->where('status', 'Passed')->with('quiz');
            },
            'lectures' => function ($q) use ($businessCoursesArr) {
                $q->whereIn('course_id', $businessCoursesArr);
            },
            'completes' => function ($q) use ($businessCoursesArr) {
                $q->where('completable_type', Course::class)->whereIn('completable_id', $businessCoursesArr);
            },
            // 'certificates' => function ($q) use ($businessCoursesArr) {
            //     $q->whereIn('course_id', $businessCoursesArr)->with('certificateUsers');
            // },
            'payerTransactions' => function ($q) use ($businessCoursesArr) {
                $q->where('productable_type', Course::class);
                $q->whereIn('productable_id', $businessCoursesArr);
            },
            'userPrivacy'
        ])->get();
        foreach ($this->students as $student) {
            foreach ($student->courses as $course) {
                $this->loadCertificates[$student->id][$course->id] = $this->loadAttendanceRates[$student->id][$course->id] = false;
            }
        }
    }
    public function openAssignmentReviewModal($assignmentId, $userId)
    {
        $this->emit('openAssignmentReviewModal', $assignmentId, $userId);
    }

    public function addStudent()
    {
        //        Student::create([
        //            'name' => $this->student->name,
        //            'email' => $this->student->email,
        //            'phone' => $this->student->phone,
        //            'business_id' => session('business_id')
        //        ]);
        //        return $this->redirect(url('instructor-dashboard/students'));
    }

    public function deleteStudent($student_id)
    {
        //        Student::find($student_id)->delete();
        //        return $this->redirect(url('instructor-dashboard/students'));
    }

    //Certificate Section Fuctions
    public function graduate($certificate, $studentId)
    {
        // dd($certificate);
        $certificate = Certificate::find($certificate);
        $certificate?->users()->syncWithoutDetaching($studentId);
        $this->emitSelf('refresh');
        // $this->certUser = CertificateUser::where('certificate_id', $this->course->certificate->id)->where('user_id', $this->studentId)->first();
    }

    public function uploadCustomCertificate()
    {
        $this->certUser->addMedia($this->custom_certificate->getRealPath())
            ->usingName($this->custom_certificate->getClientOriginalName())
            ->preservingOriginal()
            ->toMediaCollection();
    }

    public function loadCertificate($studentId, $courseId)
    {
        $this->loadCertificates[$studentId][$courseId] = true;
    }

    public function loadAttendanceRate($studentId, $courseId)
    {
        $this->loadAttendanceRates[$studentId][$courseId] = true;
    }

    public function render()
    {
        return view('livewire.dashboard.students-component');
    }
}
