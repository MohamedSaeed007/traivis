<?php

namespace App\Http\Livewire;

use App\Models\Complete;
use App\Models\Content;
use App\Models\Lecture;
use App\Models\MediaLibrary;
use App\Models\Transaction;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\Support\MediaStream;

class StudentLecture extends Component
{
    public $enrolled = false;
    public $user;
    public $content;
    public $course;
    public $transaction;
    public bool $isMaker = false;

    public function mount($content, $course)
    {
        $this->course = $course;
        $this->content = $content;
        if (!Auth::check()) {
            return;
        }
        $this->user = Auth::user();
        $this->transaction = $this->content->course
            ->transactions()
            ->where('payerable_id', $this->user->id)
            ->where('transaction_type', 1)
            ->first();

        //        dd($this->content->getFirstMedia('video')->toArray());
        Complete::updateOrCreate([
            'user_id' => $this->user->id,
            'completable_type' => Content::class,
            'completable_id' => $this->content->content->id,
        ]);
        $this->isMaker = $this->course->isMaker();
        $this->enrolled = $this->user->isEnrolled($this->course->id);
        if ($this->enrolled) {
            $this->content
                ->users()
                ->syncWithoutDetaching([$this->user->id => ['attended_minutes' => $this->content->duration]]);
            $this->course->generateCertificate(auth()->user()->id);
        }
    }

    public function downloadResource($mediaId = null)
    {
        if ($mediaId) {
            $media = MediaLibrary::find($mediaId);
            return response()->download($media->getPath(), $media->file_name);
        } else {
            $downloads = $this->content->getMedia('resources');
            return MediaStream::create('my-files.zip')->addMedia($downloads);
        }
    }

    public function next()
    {
        if ($this->content->content->next) {
            $this->emit('setContent', ['id' => $this->content->content->next->id]);
        }
    }

    public function prev()
    {
        if ($this->content->content->previous) {
            $this->emit('setContent', ['id' => $this->content->content->previous->id]);
        }
    }

    public function render()
    {
        return view('livewire.student-lecture');
    }
}
