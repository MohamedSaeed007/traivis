<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\Attempt;
use App\Models\Complete;
use App\Models\Content;
use App\Models\Course;
use App\Models\Option;
use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\Quiz;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Livewire\Component;

class StudentQuiz extends Component
{
    public ?User $user;
    public Quiz $quiz;
    public $enrolled = false;
    public $isMaker;
    public $endTime;
    //    public $currentAnswer;
    public $quizStarted = false;
    public $status = null;
    public $result = null;
    public $attempt = null;
    public $questionsCompleted = false;
    public $quizSubmitted = false;
    public $answers = [];
    public $answersExpanded = [];
    public $questionConditions = [];
    protected $rules = [
        'status' => 'nullable',
    ];

    public function mount($content): void
    {
        $this->quiz = $content;
        if (!auth()->check()) {
            return;
        }

        $this->user = Auth()->user();
        $this->enrolled = $this->user->isEnrolled($this->quiz->course->id);
        $this->isMaker = $this->quiz->course->isMaker();

        //Fill Empty Questions Array
        foreach ($this->quiz->questions as $question) {
            $this->answersExpanded[$question->id] = true;
            $this->answers[$question->id] = [
                'is_correct' => null,
                'answer' => $question->type == 'closed' ? [] : '',
            ];

            $number_of_corrects = $question->options->sum('is_correct');
            $this->questionConditions[$question->id] =
                $number_of_corrects > 1
                    ? 'multiple_corrects'
                    : ($number_of_corrects == 1
                        ? 'single_correct'
                        : null);

            //            if (!is_array($this->answers[$question->id])) {
            //                dd($this->answers[$question->id]);
            //            }
            //            $this->answers[$question->id]['is_correct'] = null;
        }

        $this->attempt = Attempt::whereUserId($this->user->id)
            ->whereQuizId($this->quiz->id)
            ->latest()
            ->first();

        if ($this->attempt) {
            //Fill Attempt Answer Data to Questions Array if there is an attempt
            foreach ($this->attempt->answers as $answer) {
                $this->answers[$answer->question_id]['is_correct'] = $answer->is_correct;
                if ($answer->q_type == 'closed') {
                    foreach ($answer->questionOptions as $answerQuestionOption) {
                        $this->answers[$answer->question_id]['answer'][] = $answerQuestionOption->id;
                        //                        $this->answers[$answer->question_id]['answer'][] = [
                        //                            'id' => $answerQuestionOption->id,
                        //                            'title' => $answerQuestionOption->title,
                        //                        ];
                    }
                } else {
                    $this->answers[$answer->question_id]['answer'] = $answer->answer;
                }

                //                dump($answer->load('questionOptions')->toArray());

                continue;
                $this->answers[$answer->question_id] = [
                    //                    'type' => $answer->question->type,
                    //                    'is_correct' => $answer?->is_correct ?? 'Pending',
                    //                    'answer' => $answer->answer,
                    //                    'option_id' => $answer->questionOption->id,
                ];
            }
            $this->status = $this->attempt->status;
            $this->result = (int) $this->attempt->answers()->sum('r_score');
            if ($this->status != 'Active') {
                foreach ($this->quiz->questions as $question) {
                    $this->answersExpanded[$question->id] = true;
                }
                $this->quizSubmitted = true;
            }
        }
        if ($this->attempt?->status == 'Active' && $this->getEndTime() <= now()->timestamp) {
            $this->attempt->update(['status' => 'Expired']);
            $this->attempt = null;
        }
        $this->quizStarted = (bool) $this->attempt;
        $this->endTime = $this->getEndTime();
    }

    public function getEndTime(): float|int|string
    {
        if ($this->attempt) {
            //            return Carbon::parse($this->attempt->created_at)->addSeconds(30)->timestamp;
            return Carbon::parse($this->attempt->created_at)->addMinutes(
                $this->quiz->options['time_limit'],
            )->timestamp;
        } else {
            return now()->addMinutes($this->quiz->options['time_limit'])->timestamp;
        }
    }

    public function updatedStatus($value): void
    {
        if ($value == 'Expired' && $this->attempt->status == 'Active') {
            $this->submitAttempt(1);
        }
    }

    public function submitAttempt($expired = null): void
    {
        if ($this->status == 'Active' || $expired) {
            foreach ($this->answers as $questionId => $optionOrAnswers) {
                $theQuestion = $this->quiz->questions->find($questionId);
                if (
                    $theQuestion &&
                    $theQuestion->type == 'closed' &&
                    is_array($optionOrAnswers['answer'])
                ) {
                    //closed answered
                    $theQuestionCorrectOptions = $theQuestion
                        ->options()
                        ->where('is_correct', true)
                        ->pluck('id');

                    $answeredQuestionOptions = $theQuestion
                        ->options()
                        ->whereIn('id', $optionOrAnswers['answer'])
                        ->pluck('id');

                    //step #1: student answers count == correct answers count
                    if (
                        $is_correct =
                            $answeredQuestionOptions->count() == $theQuestionCorrectOptions->count()
                    ) {
                        //Is correct?
                        $is_correct = empty(
                            array_diff(
                                $answeredQuestionOptions->toArray(),
                                $theQuestionCorrectOptions->toArray(),
                            )
                        );
                    }

                    $answer = Answer::create([
                        'question_id' => $theQuestion->id,
                        'user_id' => $this->user->id,
                        'quiz_id' => $this->quiz->id,
                        'attempt_id' => $this->attempt->id,
                        'q_type' => $theQuestion->type,
                        'q_score' => $theQuestion->score,
                        'r_score' => $is_correct ? $theQuestion->score : 0,
                        'is_correct' => $is_correct,
                    ]);
                    $answer->questionOptions()->sync($answeredQuestionOptions);
                    $this->answers[$theQuestion->id]['is_correct'] = $is_correct;
                } elseif ($theQuestion && $theQuestion->type != 'closed') {
                    Answer::create([
                        'answer' => $optionOrAnswers['answer'],
                        'question_id' => $theQuestion->id,
                        'user_id' => $this->user->id,
                        'quiz_id' => $this->quiz->id,
                        'attempt_id' => $this->attempt->id,
                        'q_type' => $theQuestion->type,
                        'q_score' => $theQuestion->score,
                        'r_score' => null,
                        'is_correct' => null,
                    ]);
                    $this->answers[$theQuestion->id]['is_correct'] = null;
                    $this->status = 'Pending';
                }
                //                dd($this->answers[$theQuestion->id]['answer']);
                //                $this->answers[$theQuestion->id]['answer'];
            }

            if ($this->status == 'Active') {
                $this->result = $this->attempt->answers()->sum('r_score');

                if ($this->result >= $this->quiz->options['passing_score']) {
                    $this->status = 'Passed';
                    Complete::updateOrCreate([
                        'user_id' => $this->attempt->user_id,
                        'completable_type' => Content::class,
                        'completable_id' => $this->attempt->quiz->content->id,
                    ]);
                    $courseCompleted = 1;
                    foreach ($this->attempt->quiz->course->contents as $content) {
                        //                            dd($content->completes);
                        $isCompleted = $content
                            ->completes()
                            ->where('user_id', $this->attempt->user_id)
                            ->first();
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
            $this->quizSubmitted = true;
            if ($this->quiz->questions->sum('score') == 0) {
                $score_percentage = 0;
            } else {
                $score_percentage = ($this->result / $this->quiz->questions->sum('score')) * 100;
            }
            $this->attempt->update([
                'status' => $this->status,
                'earned_score' => $this->result,
                'earned_percentage' => $score_percentage,
            ]);
        }

        /*





        if ($this->status == 'Active' || $expired) {
            foreach ($this->answers as $questionId => $optionOrAnswers) {
                $theQuestion = $this->quiz->questions->find($questionId);

                if ($theQuestion && $theQuestion->type == 'closed' && is_array($optionOrAnswers)) {
                    //closed
                    $theQuestionCorrectOptions = $theQuestion
                        ->options()
                        ->where('is_correct', true)
                        ->pluck('id');
                    $answeredQuestionOptions = $theQuestion
                        ->options()
                        ->whereIn('id', $optionOrAnswers)
                        ->pluck('id');
                    //step #1: student answers count == correct answers count
                    if ($answeredQuestionOptions->count() == $theQuestionCorrectOptions->count()) {
                        dump('Step #1 passed');
                        //Check if all answers are correct

                        $is_correct = empty(
                            array_diff(
                                $answeredQuestionOptions->toArray(),
                                $theQuestionCorrectOptions->toArray(),
                            )
                        );

                        $answer = Answer::create([
                            'question_id' => $theQuestion->id,
                            'user_id' => $this->user->id,
                            'quiz_id' => $this->quiz->id,
                            'attempt_id' => $this->attempt->id,
                            'q_type' => $theQuestion->type,
                            'q_score' => $theQuestion->score,
                            'r_score' => $is_correct ? $theQuestion->score : 0,
                            'is_correct' => $is_correct,
                        ]);
                        $answer->questionOptions()->sync($answeredQuestionOptions);
                    }

                    dd('wrong', $answeredQuestionOptions->count(), $theQuestionCorrectOptions->count());
                } elseif ($theQuestion && $theQuestion->type != 'closed') {
                    Answer::create([
                        'question_id' => $theQuestion->id,
                        'user_id' => $this->user->id,
                        'quiz_id' => $this->quiz->id,
                        'attempt_id' => $this->attempt->id,
                        'q_type' => $theQuestion->type,
                        'q_score' => $theQuestion->score,
                        'r_score' => null,
                        'is_correct' => null,
                    ]);
                } else {
                    return;
                }

                continue;
                if ($optionOrAnswer) {
                    $question = Question::find($questionId);
                    if ($question->type == 'closed') {
                        $option = QuestionOption::find($optionOrAnswer);
                        $answer = $option->title;
                    } else {
                        $option = null;
                        $answer = $optionOrAnswer;
                        $this->status = 'Pending';
                    }
                    Answer::create([
                        'question_id' => $question->id,
                        'question_option_id' => $option?->id,
                        'user_id' => $this->user->id,
                        'quiz_id' => $this->quiz->id,
                        'attempt_id' => $this->attempt->id,
                        'answer' => $answer,
                        'q_type' => $question->type,
                        'q_score' => $question->score,
                        'r_score' => $option?->is_correct ? $question->score : 0,
                        'is_correct' => $option?->is_correct,
                    ]);
                    $this->answers[$questionId] = [
                        'type' => $question->type,
                        'is_correct' => $option?->is_correct ?? 'Pending',
                        'answer' => $answer,
                        'option_id' => $option?->id,
                    ];
                }
                if ($this->status == 'Active') {
                    $this->result = $this->attempt->answers()->sum('r_score');
                    if ($this->result >= $this->quiz->options['passing_score']) {
                        $this->status = 'Passed';
                        Complete::updateOrCreate([
                            'user_id' => $this->attempt->user_id,
                            'completable_type' => Content::class,
                            'completable_id' => $this->attempt->quiz->content->id,
                        ]);
                        $courseCompleted = 1;
                        foreach ($this->attempt->quiz->course->contents as $content) {
                            //                            dd($content->completes);
                            $isCompleted = $content
                                ->completes()
                                ->where('user_id', $this->attempt->user_id)
                                ->first();
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
                    } else {
                        $this->status = 'Failed';
                    }
                }
                $this->quizSubmitted = true;
                if ($this->quiz->questions->sum('score') == 0) {
                    $score_percentage = 0;
                } else {
                    $score_percentage = ($this->result / $this->quiz->questions->sum('score')) * 100;
                }
                $this->attempt->update([
                    'status' => $this->status,
                    'earned_score' => $this->result,
                    'earned_percentage' => $score_percentage,
                ]);
            }
        }



        */
    }

    public function startQuiz(): void
    {
        if ($this->quiz->attempts->count() < $this->quiz->options['attempts_limit']) {
            $this->attempt = $this->quiz->attempts()->create([
                'course_id' => $this->quiz->course->id,
                'user_id' => $this->user->id,
                'status' => 'Active',
            ]);
            $this->redirect(
                route('course', [$this->quiz->course->slug, 'cid' => $this->quiz->content->id]),
            );
        }
    }

    public function updatedAnswers($optionId, $questionId)
    {
        //        $qOption = $this->quiz
        //            ->options()
        //            ->where(QuestionOption::tableName() . '.id', $optionId)
        //            ->whereQuestionId($questionId)
        //            ->first();
        //
        //        dump($qOption->toArray());

        //        dump($this->answers);
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        $this->questionsCompleted = $this->hasEmptyAnswers();
        return view('livewire.student-quiz');
    }

    public function hasEmptyAnswers(): bool
    {
        foreach ($this->answers as $answer) {
            if (empty($answer['answer'])) {
                return true;
            }
        }

        return false;
    }
}
