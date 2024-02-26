<?php

namespace App\Http\Livewire\Dashboard\Students;

use App\Models\Certificate;
use App\Models\CertificateUser;
use App\Models\Course;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class CourseEnrollInfoCertificateComponent extends Component
{
    use WithFileUploads;
    public $graduated = false;
    public $course;
    public $student;
    public $certUser;
    public $custom_certificate;
    public $customCertificateSubmitted = false;

    public function mount($courseId, $studentId)
    {
        $this->course = Course::find($courseId);
        $this->student = User::find($studentId);
        if ($this->course->certificate?->users->contains($studentId)) {
            $this->certUser = CertificateUser::where('certificate_id', $this->course->certificate->id)->where('user_id', $studentId)->first();
            $this->graduated = true;
            if ($this->certUser->hasMedia()) {
                $this->customCertificateSubmitted = true;
            }
        }
    }

    public function graduate()
    {
        $this->course->certificate?->users()->syncWithoutDetaching($this->student->id);
        $this->certUser = CertificateUser::where('certificate_id', $this->course->certificate->id)->where('user_id', $this->student->id)->first();
        $this->graduated = true;
    }

    public function updatedCustomCertificate()
    {
        $this->certUser->addMedia($this->custom_certificate->getRealPath())
            ->usingName($this->custom_certificate->getClientOriginalName())
            ->preservingOriginal()
            ->toMediaCollection();
        $this->customCertificateSubmitted = true;
    }

    public function render()
    {
        return view('livewire.dashboard.students.course-enroll-info-certificate-component');
    }
}
