<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\Attempt;
use App\Models\Complete;
use App\Models\Content;
use App\Models\Course;
use Livewire\Component;

class StudentAttemptReview extends Component
{
    public $showPopup = false;
    public $attempt;
    public $comments = [];
    public $statuses = [];
    public $scores = [];
    protected $listeners = ['openQuizReviewModal' => 'openModal'];

    public function openModal($id): void
    {
        $this->attempt = Attempt::find($id);
        $this->comments = $this->attempt->answers()->pluck('comment', 'id')->toArray();
        $this->statuses = $this->attempt->answers()->pluck('is_correct', 'id')->toArray();
        $this->scores = $this->attempt->answers()->pluck('r_score', 'id')->toArray();
        $this->showPopup = true;
    }

    public function correct(Answer $answer): void
    {
        $answer->update([
            'comment' => $this->comments[$answer->id],
            'is_correct' => $this->statuses[$answer->id],
            'r_score' => $this->scores[$answer->id],
        ]);
        if (!$this->attempt->answers()->where('is_correct', null)->count()) {
            $status = array_sum($this->scores) >= $this->attempt->quiz->options['passing_score'] ? 'Passed' : 'Failed';
            $this->attempt->update([
                'status' => $status,
                'is_reviewed' => 1,
                'reviewer_id' => auth()->user()->id,
            ]);
            if ($status == 'Passed') {
                Complete::updateOrCreate([
                    'user_id' => $this->attempt->user_id,
                    'completable_type' => Content::class,
                    'completable_id' => $this->attempt->quiz->content->id,
                ]);
                $courseCompleted = 1;
                foreach ($this->attempt->quiz->course->contents as $content) {
                    $isCompleted = $content->completes()->where('user_id', $this->attempt->user_id)->first();
                    if (!$isCompleted) {
                        $courseCompleted = 0;
                    }
                }
                if ($courseCompleted) {
                    Complete::updateOrCreate([
                        'user_id' => $this->attempt->user_id,
                        'completable_type' => Course::class,
                        'completable_id' => $this->attempt->quiz->course->id,
                    ]);
                }
            }
        }
    }


    public function render()
    {
        return view('livewire.student-attempt-review');
    }
}
