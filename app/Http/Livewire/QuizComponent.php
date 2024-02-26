<?php

namespace App\Http\Livewire;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Course;
use App\Models\Content;
use App\Models\QuestionOption;
use App\Models\Quiz;
use App\Traits\HasErrorClassTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\RequiredIf;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Storage;

class QuizComponent extends Component
{
    use WithFileUploads;
    use HasErrorClassTrait;

    public $business_id;
    public $questions_count;
    public $resources = [];
    //    public $question = ['id', 'title' => null, 'type' => 'closed'];

    /** @var Quiz $quiz */
    public $quiz;
    public $disableMode = false;
    public $statusColorClassesArray = [
        'draft' => 'pink-500',
        'declined' => 'red-500',
        'ready for review' => 'yellow-500',
        'under review' => 'indigo-500',
        'scheduled to publish' => 'green-500',
        'approved' => 'green-500',
        'published' => 'green-500',
    ];
    public $statusIconsArray = [
        'draft' => 'svg-icons.fi-sr-drafting-compass',
        'declined' => 'svg-icons.fi-sr-circle-xmark',
        'ready for review' => 'svg-icons.fi-sr-search-alt',
        'under review' => 'svg-icons.fi-sr-search-alt',
        'scheduled to publish' => 'svg-icons.fi-sr-calendar-clock',
        'approved' => 'svg-icons.fi-sr-badge-check',
        'published' => 'svg-icons.fi-sr-globe',
    ];

    /* protected $validationAttributes = [
         'questions_count' => 'Questions Count',
         'quiz.options.questions_limit' => 'Questions Limit',
     ];*/
    protected $messages = [
        'quiz.title.required' => 'Required.',
        'quiz.options.passing_score.required' => 'Required.',
        // 'quiz.options.questions_limit.required' => 'Required.',
        'quiz.options.time_limit.required' => 'Required.',
        'quiz.options.questions_limit.min' => 'Minimum is 1.',
        'quiz.options.questions_limit.lte' =>
            'The Questions Limit must be less than or equal Questions Count.',
        'quiz.options.questions_limit.required' => 'Required.',
        'quiz.options.attempts_limit.min' => 'Minimum is 1.',
        'quiz.options.attempts_limit.required' => 'Required.',
        'quiz.options.passing_score.min' => 'Minimum is 1.',
        'quiz.options.passing_score.max' => 'Maximum is 100.',
        //        'questionOptions.*.image.image' => 'Must be an image.',
    ];
    protected $listeners = [
        'refresh' => 'updated',
        'cloneContent' => 'clone',
    ];

    public function rules()
    {
        return [
            'quiz.title' => 'required|string',
            // 'image_file' =>
            // 'required|image|mimes:jpeg,png,jpg|max:1024|dimensions:min_width=100,min_height=100',
            //            'quiz.slug' => 'string',
            'quiz.description' => 'nullable|string|min:20',
            'questions_count' => 'nullable',
            'quiz.options.passing_score' => 'required|min:1|max:100|numeric',
            // 'quiz.options.questions_limit' => 'required|min:1|numeric',
            'quiz.options.questions_limit' => 'required|min:1|numeric|lte:questions_count',
            'quiz.options.attempts_limit' => 'required|min:1|numeric',
            'quiz.options.time_limit' => 'required|min:1|numeric',
            //        'quiz.options.is_gradable' => 'required|boolean',
            //        'quiz.options.show_remaining_time' => 'required|boolean',
            //            'question.title' => 'required|string',
            //            'question.type' => 'in:opened,closed',
            //            'questionImage' => 'nullable|image|max:2048',
            //                        'questionOptions.*.title' =>
            //                'required_unless:questionOptions.*.d_pref,image|max:255|nullable',
            //            'questionOptions.*.image' => [
            //                'required_without:questionOptions.*.old_image',
            //                'required_unless:questionOptions.*.d_pref,text',
            //                'image'
            //                'max:2048',
            //                'nullable'
            //            ]
        ];
    }

    public function mount(): void
    {
        $this->quiz->course->publish_status == 'Under review' ||
        $this->quiz->content->publish_status == 'Published'
            ? ($this->disableMode = true)
            : ($this->disableMode = false);
        //        dd($this->quiz);
        $this->business_id = session('business_id');
        if (!$this->quiz->options) {
            $this->quiz->options = [
                'passing_score' => null,
                'time_limit' => null,
                'questions_limit' => null,
                'attempts_limit' => null,
            ];
        }
        $this->questions_count = $this->quiz->questions->count();
        $this->validate();
    }

    public function render()
    {
        return view('livewire.quiz-component');
    }
    public function showFeedback()
    {
        $this->emitTo('show-review-feedback', 'openModal', $this->quiz->content->review_feedback);
    }

    public function clone($courseId = null)
    {
        if (
            $this->quiz->course->publish_status != 'Under review' &&
            $this->quiz->content->publish_status == 'Published'
        ) {
            //Make a clone if the lecture is published
            $this->quiz = $this->quiz->replicate();
            if ($courseId) {
                $this->quiz->course_id = $courseId;
            }
            $this->quiz->push();
            //Clone Questions & Options
            foreach ($this->quiz->questions as $question) {
                $oldQuestionImage = $question->getFirstMedia();
                $newQuestion = $question->replicate();
                $newQuestion->quiz_id = $this->quiz->id;
                $newQuestion->is_clone = 1;
                $newQuestion->push();
                $question->question_id = $newQuestion->id;
                $question->save();
                if ($oldQuestionImage) {
                    $oldQuestionImage->copy($newQuestion);
                }
                // dd($question);
                foreach ($question->options as $option) {
                    $oldOptionImage = $option->getFirstMedia();
                    $newOption = $option->replicate();
                    $newOption->question_id = $newQuestion->id;
                    $newOption->push();
                    if ($oldOptionImage) {
                        $oldOptionImage->copy($newOption);
                    }
                }
            }
            $newContent = $this->quiz->content->replicate();
            $newContent->contentable_id = $this->quiz->id;
            if ($courseId) {
                $newContent->course_id = $courseId;
            }
            $newContent->is_clone = 1;
            $newContent->version = $this->quiz->content->version + 1;
            if (!$courseId) {
                $newContent->publish_status = 'Ready for review';
            }
            $newContent->push();
            $this->quiz->content->content_id = $newContent->id;
            $this->quiz->content->save();
            $this->quiz->load('content');
            $this->quiz->push();
            $this->emitUp('changeStatus');
            return redirect(
                route('instructor-dashboard-courseDetails', [
                    'id' => $newContent->course->id,
                    'cid' => $newContent->id,
                ]),
            );
        }
    }

    public function updated($name = null)
    {
        // dd($this->quiz->content);
        if (!$this->disableMode) {
            $this->questions_count = $this->quiz->questions->count();
            $this->quiz->content->publish_status = 'Draft';
            $this->quiz->content->save();
            $this->quiz->save();
            $this->emitUp('changeStatus');
            $this->validate();
            //Save Quiz
            //Change & Save Content Status
            $this->quiz->content->publish_status = 'Ready for review';
            $this->quiz->content->save();
            $this->emitUp('changeStatus');
            $this->emitUp('refreshSections');
            $this->emitUp('refresh');
        }
    }

    //    public function getErrorClass($field)
    //    {
    //        return $this->getErrorBag()->has($field) ? 'border-red-500' : 'border-green-500';
    //    }

    private function setDefaultPropertyValue($propertyName, $defaultValue)
    {
        if (empty($this->$propertyName)) {
            $this->$propertyName = $defaultValue;
        }
    }
}
