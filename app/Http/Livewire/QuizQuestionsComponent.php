<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Question;
use App\Models\QuestionOption;
use App\Models\Quiz;
use App\Traits\HasErrorClassTrait;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class QuizQuestionsComponent extends Component
{
    use WithFileUploads;
    use HasErrorClassTrait;

    public $maxOptions = 6;
    public ?Question $question;
    public $quiz;
    public $questionImage;
    public $questionOldImage;
    public $questionModalOpen = false;
    public $underReviewMode = false;

    public $questionOptions = [];

    protected $rules = [
        'question.title' => 'required|string',
        'question.type' => 'in:opened,closed',
        'questionImage' => 'nullable|image|max:2048',
    ];

    public function mount(Quiz $quiz)
    {
        $this->quiz = $quiz;
        $this->quiz->content->publish_status == 'Under review' ||
        $this->quiz->content->publish_status == 'Published'
            ? ($this->underReviewMode = true)
            : ($this->underReviewMode = false);
        $this->question = new Question();
        $this->validate();
    }

    public function updated($name, $value): void
    {
        if (!$this->underReviewMode) {
            $this->validate();
            //Save Question
            $this->question->save();
        }
    }

    /**
     * @return void
     * needed for wire:target
     */
    public function newQuestion(): void
    {
        if (!$this->underReviewMode) {
            $this->openQuestion();
        }
    }

    public function openQuestion($index = null): void
    {
        if (!$this->underReviewMode) {
            if (is_null($index)) {
                $this->questionImage = null;
                $this->question = new Question(['type' => '']);
                //            $this->questionOptions = [new QuestionOption()];
                $this->questionOptions = [
                    [
                        'id' => null,
                        'title' => null,
                        'image' => null,
                        'd_pref' => 'both',
                        'is_correct' => false,
                    ],
                ];
                $this->emitUp('refresh');
                $this->questionModalOpen = true;
            } else {
                if (!$this->quiz->content->is_clone) {
                    $this->question = $this->quiz->questions[$index];
                    $this->questionOldImage = $this->question->getFirstMedia()?->preview_url;
                    if ($this->question->options()->count() == 0) {
                        $this->questionOptions = [
                            [
                                'id' => null,
                                'title' => null,
                                'image' => null,
                                'd_pref' => 'both',
                                'is_correct' => false,
                            ],
                        ];
                    } else {
                        $this->questionOptions = $this->question
                            ->options()
                            ->get(['id', 'title', 'd_pref', 'is_correct'])
                            ->map(function (QuestionOption $item) {
                                return [
                                    'id' => $item->id,
                                    'title' => $item->title,
                                    'image' => null,
                                    'old_image' => $item->getFirstMedia()?->preview_url,
                                    'd_pref' => $item->d_pref,
                                    'is_correct' => (bool) $item->is_correct,
                                ];
                            })
                            ->toArray();
                    }
                    $this->emitUp('refresh');
                    $this->questionModalOpen = true;
                }
            }
        }
    }

    public function updateQuestion(): void
    {
        if (!$this->underReviewMode) {
            $validation_array = [
                'question.title' => 'required',
                'question.type' => 'required|in:opened,closed',
                'questionImage' => 'nullable|image|max:2048',
            ];

            $validation_messages = [
                'question.title.required' => 'Required',
            ];

            switch ($this->question['type']) {
                case 'closed':
                    $validation_array = array_merge_recursive($validation_array, [
                        'questionOptions' => [
                            'array',
                            'min:2',
                            'max:' . $this->maxOptions,
                            function ($attribute, $value, $fail) {
                                $values = collect($value);
                                $correctOptions = $values->where('is_correct', true);

                                if ($correctOptions->count() === 0) {
                                    $fail('At least one answer must be correct');
                                }
                                if (
                                    $this->question['type'] == 'closed' &&
                                    $correctOptions->count() === count($this->questionOptions)
                                ) {
                                    $fail('Not all options can be correct');
                                }
                            },
                        ],
                        'questionOptions.*.d_pref' => 'in:text,image,both',
                        'questionOptions.*.is_correct' => 'boolean',
                        'questionOptions.*.title' =>
                            'required_unless:questionOptions.*.d_pref,image|max:255|nullable',
                        /*                    'questionOptions.*.image' => [
                        'required_without:questionOptions.*.old_image',
                        'sometimes',
                        'required_unless:questionOptions.*.d_pref,text',
                        'image',
                        'max:2048',
                        'nullable'
                    ]*/
                        'questionOptions.*.image' => [
                            function ($attribute, $value, $fail) {
                                $index = $this->getIndexFromAttribute($attribute);

                                $is_image = Validator::make(['image' => $value], ['image' => 'image']);
                                $is_max = Validator::make(['image' => $value], ['image' => 'max:2048']);

                                if (
                                    $this->questionOptions[$index]['d_pref'] !== 'text' &&
                                    (empty($this->questionOptions[$index]['old_image']) &&
                                        !$is_image->passes()) &&
                                    empty($value)
                                ) {
                                    $fail('Image is required.');
                                } elseif ($is_image->passes() && !$is_max->passes()) {
                                    $fail('Image maximum allowed size is 2MB.');
                                }
                            },
                        ],
                        /*  'questionOptions.*.image' => [
                        'required_unless:questionOptions.*.d_pref,text',
                        //                        function ($attribute, $value, $fail) {
                        //                            dump($attribute, $value, $fail);
                        //                        },
                        'image',
                        'max:2048',
                        'nullable'
                    ]*/
                    ]);
                    $validation_messages = array_merge_recursive($validation_messages, [
                        'questionOptions.*.title.required_unless' => 'Text is required.',
                        'questionOptions.*.image.required_unless' => 'Image is required.',
                        'questionOptions.*.image.required_without' => 'Image is required.',
                        'questionOptions.*.image.image' => 'Must be an image.',
                    ]);

                    break;
                case 'opened':
                    break;
            }

            if ($this->questionImage && !$this->questionImage->isPreviewable()) {
                $this->questionImage = null;
            }

            $data = $this->validate($validation_array, $validation_messages);
            $this->quiz->questions()->save($this->question);
            if (!$this->questionImage && !$this->questionOldImage) {
                $this->question->clearMediaCollection();
            } elseif ($this->questionImage) {
                $this->question->clearMediaCollection();
                $this->question
                    ->copyMedia($this->questionImage->getRealPath())
                    ->usingName($this->questionImage->getClientOriginalName())
                    ->toMediaCollection();
            }

            if (isset($data['questionOptions'])) {
                $oldQuestionOptions = $this->question->options()->get();
                $newQuestionOptions = collect($data['questionOptions']);
                $filteredArray = $oldQuestionOptions->reject(
                    fn($item) => $newQuestionOptions->pluck('id')->contains($item->id),
                );

                $deleteThese = $filteredArray
                    ->values()
                    ->pluck('id')
                    ->toArray();
                $deleteCollection = $this->question->options()->findMany($deleteThese);
                $deleteCollection->each(function ($item) {
                    $item->clearMediaCollection();
                    $item->delete();
                });

                foreach ($this->questionOptions as $index => $question_option) {
                    $option = $this->question->options()->updateOrCreate(
                        ['id' => $question_option['id'] ?? null],
                        [
                            'title' => $question_option['title'],
                            'd_pref' => $question_option['d_pref'],
                            'is_correct' => $question_option['is_correct'],
                            'sort_order' => $index + 1,
                        ],
                    );
                    if ($question_option['image'] instanceof TemporaryUploadedFile) {
                        // $question_option['image']->
                        $option->clearMediaCollection();

                        $option
                            ->copyMedia($question_option['image']->getRealPath())
                            ->usingName($question_option['image']->getClientOriginalName())
                            ->toMediaCollection();
                    }
                }
            }

            $this->reset('questionImage', 'questionOldImage');
            $this->questionModalOpen = false;
            return;

            //        $validatedData = $this->validate([
            //            'question.title' => 'required',
            //            'question.type' => 'in:opened,closed',
            //            'questionOptions' => [
            //                'required',
            //                'array',
            //                function ($attribute, $value, $fail) {
            //                    debug($value);
            //                    foreach ($value as $answer) {
            //                        if (!in_array($answer['d_pref'], ['title', 'image', 'both'])) {
            //                            $fail('The "d_pref" field must be one of: text, image, or both.');
            //                        }
            //                        if ($answer['d_pref'] === 'title' && empty($answer['title'])) {
            //                            $fail('The "text" field is required when "d_pref" is "text" or "both".');
            //                        }
            //                        if ($answer['d_pref'] === 'image' && empty($answer['image'])) {
            //                            $fail('The "image" field is required when "d_pref" is "image" or "both".');
            //                        }
            //                        if (
            //                            $answer['d_pref'] === 'both' &&
            //                            (empty($answer['title']) || empty($answer['image']))
            //                        ) {
            //                            $fail(
            //                                'The "text" and "image" fields are both required when "d_pref" is "both".'
            //                            );
            //                        }
            //                    }
            //                }
            //            ]
            //        ]);

            //        dump($validatedData);
            //        dump($this->question);
            //        dump($this->questionOptions);
            return;

            $question = $this->quiz->questions()->create([
                'business_id' => $this->business_id,
                'title' => $this->question['title'],
                'type' => $this->question['type'],
                'score' => $this->question['score'],
            ]);

            //        dd($this->answers_option, $this->is_correct);

            foreach ([1, 4] as $answer) {
                $question->options()->create([
                    'quiz_id' => $question->quiz_id,
                    'business_id' => $this->business_id,
                    'answer' => $this->answers_option[$answer],
                    'is_correct' => $this->is_correct[$answer],
                ]);
            }
        }
    }

    private function getIndexFromAttribute($attribute)
    {
        preg_match('/\d+/', $attribute, $matches);
        return $matches[0];
    }

    public function deleteQuestion($index)
    {
        if (!$this->underReviewMode) {
            $question = $this->quiz->questions[$index];
            $question?->delete_sync();
            $this->emitUp('refresh');
        }
    }

    public function deleteQuestionImage()
    {
        if (!$this->underReviewMode) {
            $this->questionImage = null;
            $this->questionOldImage = null;
        }
    }

    public function addOption(): void
    {
        if (!$this->underReviewMode) {
            $this->questionOptions[] = [
                'question_id' => null,
                'title' => null,
                'image' => null,
                'd_pref' => 'both',
                'is_correct' => false,
            ];
        }
    }

    public function removeOption($index): void
    {
        if (!$this->underReviewMode) {
            unset($this->questionOptions[$index]);
            $this->questionOptions = array_values($this->questionOptions);
        }
    }

    public function moveOptionUp($index): void
    {
        if (!$this->underReviewMode) {
            $index = array_search($index, array_keys($this->questionOptions));
            if ($index > 0) {
                $keys = array_keys($this->questionOptions);
                $temp = $keys[$index - 1];
                $keys[$index - 1] = $index;
                $keys[$index] = $temp;
                $this->questionOptions = array_combine($keys, array_values($this->questionOptions));
            }
        }
    }

    public function moveOptionDown($index): void
    {
        if (!$this->underReviewMode) {
            $index = array_search($index, array_keys($this->questionOptions));
            if ($index < count($this->questionOptions) - 1) {
                $keys = array_keys($this->questionOptions);
                $temp = $keys[$index + 1];
                $keys[$index + 1] = $index;
                $keys[$index] = $temp;
                $this->questionOptions = array_combine($keys, array_values($this->questionOptions));
            }
        }
    }

    public function moveQuestionUp($index): void
    {
        if (!$this->underReviewMode) {
            $question = $this->quiz->questions[$index];
            $question?->moveOrderUp();
        }
    }

    public function moveQuestionDown($index): void
    {
        if (!$this->underReviewMode) {
            $question = $this->quiz->questions[$index];
            $question?->moveOrderDown();
            $question?->isFirstInOrder();
        }
    }

    //    public function getErrorClass($field)
    //    {
    //        return $this->getErrorBag()->has($field) ? 'border-red-500' : 'border-green-500';
    //    }

    public function render()
    {
        return view('livewire.quiz-questions-component');
    }
}
