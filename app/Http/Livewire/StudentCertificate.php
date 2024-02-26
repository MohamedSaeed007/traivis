<?php

namespace App\Http\Livewire;

use App\Models\CertificateUser;
use App\Models\MediaLibrary;
use App\Models\User;
use Livewire\Component;

class StudentCertificate extends Component
{
    public ?User $user;
    public $course;
    public $certificate;
    public $certificateUser;

    public function mount($course)
    {
        $this->course = $course;
        $this->user = Auth()->user();
        $this->certificate = $this->course->certificate;
        $this->certificateUser = CertificateUser::where('certificate_id', $this->certificate->id)->where('user_id', $this->user->id)->first();
    }

    public function goToCertificate()
    {
        return redirect()->route('certificate.view', $this->certificate->id);
    }
    public function downloadCustomCertificate()
    {
        $media = MediaLibrary::find($this->certificateUser->getFirstMedia()->id);
        return response()->download($media->getPath(), $media->file_name);
    }

    public function render()
    {
        return view('livewire.student-certificate');
    }
}
