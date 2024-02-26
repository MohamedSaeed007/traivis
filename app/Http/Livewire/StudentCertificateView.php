<?php

namespace App\Http\Livewire;

use PDF;

use Spatie\Browsershot\Browsershot;
use App\Models\Certificate;
use Livewire\Component;

class StudentCertificateView extends Component
{
    public $user;
    public $certificateUser;
    public $certificate;

    public function mount(Certificate $certificate)
    {
        $this->user = \Auth::user();
        $this->certificate = $certificate;
        $this->certificateUser = $this->user->certificates()->where('certificate_id', $this->certificate->id)->first();
    }

    /*public function saveAsPDF()
    {
        $pdf = PDF::loadView('livewire.student-certificate-view', [
            'certificate' => $this->certificate,
            'certificateUser' => $this->certificateUser,
            'user' => $this->user,
        ]);
        return $pdf->download('sample.pdf');
    }*/

    public function render()

    {
        return view('livewire.student-certificate-view')->extends('homes.social.layouts.base')->section('body');
    }
}
