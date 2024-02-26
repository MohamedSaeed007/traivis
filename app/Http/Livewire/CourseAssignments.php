<?php

namespace App\Http\Livewire;

use App\Models\Assignment;
use App\Traits\HasErrorClassTrait;
use Arr;
use Livewire\Component;
use Storage;

class CourseAssignments extends Component
{
    use HasErrorClassTrait;
    /**
     * @var Assignment
     */
    public $assignment;

    public $resources = [];
    public $disableMode = false;

    public $validity_option = 'until'; // default to valid_until option

    public $rules = [
        'assignment.title' => 'required|min:6',
        'assignment.text' => 'required|min:20',

        'validity_option' => 'required|in:until,for',
        //options data
        // for
        'assignment.options.duration' => 'required_if:validity_option,for',
        'assignment.options.duration_type' => 'required_if:validity_option,for',
        // until
        'assignment.options.until' => 'required_if:validity_option,until|date|nullable',

        'assignment.options.total_points' => 'required|numeric|min:1',
        'assignment.options.pass_points' => 'required|integer|lte:assignment.options.total_points',
    ];
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

    protected $validationAttributes = [
        'title' => 'assignment name',
        'text' => 'description',
        'options.duration' => 'duration',
        'options.duration_type' => 'duration type',
        'options.until' => 'until',
        'options.total_points' => 'total points',
        'options.pass_points' => 'pass points',
    ];
    protected $listeners = [
        'refresh' => '$refresh',
        'cloneContent' => 'clone',
    ];

    public function mount()
    {
        $this->assignment->course->publish_status == 'Under review' ||
        $this->assignment->content->publish_status == 'Published'
            ? ($this->disableMode = true)
            : ($this->disableMode = false);
        $this->validity_option = Arr::get($this->assignment->options, 'validity_option', 'until');
        $this->validate();
    }
    public function showFeedback()
    {
        $this->emitTo('show-review-feedback', 'openModal', $this->assignment->content->review_feedback);
    }
    public function clone($courseId = null)
    {
        if (
            $this->assignment->course->publish_status != 'Under review' &&
            $this->assignment->content->publish_status == 'Published'
        ) {
            //Make a clone if the assignment is published
            $oldResources = $this->assignment->getMedia('resources');
            $this->assignment = $this->assignment->replicate();
            if ($courseId) {
                $this->assignment->course_id = $courseId;
            }
            $this->assignment->push();
            //copy resources
            if (count($oldResources)) {
                foreach ($oldResources as $resource) {
                    $resource->copy($this->assignment, 'resources');
                }
            }
            $newContent = $this->assignment->content->replicate();
            $newContent->contentable_id = $this->assignment->id;
            if ($courseId) {
                $newContent->course_id = $courseId;
            }
            if (!$courseId) {
                $newContent->publish_status = 'Ready for review';
            }
            $newContent->version = $this->assignment->content->version + 1;
            $newContent->is_clone = 1;
            $newContent->push();
            $this->assignment->content->content_id = $newContent->id;
            $this->assignment->content->save();
            $this->assignment->load('content');
            $this->emitUp('changeStatus');
            return redirect(
                route('instructor-dashboard-courseDetails', [
                    'id' => $newContent->course->id,
                    'cid' => $newContent->id,
                ]),
            );
        }
    }
    public function updated($name, $value)
    {
        if (!$this->disableMode) {
            $this->assignment->content->publish_status = 'Draft';
            $this->assignment->content->save();
            $this->emitUp('changeStatus');
            //Validate that all data has right validation
            $this->validate();
            //Send Emit to update sections
            if ($name == 'assignment.title') {
                $this->emitUp('refreshSections');
            }
            $this->assignment->options = array_merge($this->assignment->options, [
                'validity_option' => $this->validity_option,
            ]);
            //Save Assignment Changes
            $this->assignment->save();
            //Change & Save Content Status
            $this->assignment->content->publish_status = 'Ready for review';
            $this->assignment->content->save();
            $this->emitUp('changeStatus');
        }
    }

    public function render()
    {
        if (is_array($this->assignment->options)) {
            $this->assignment->options = array_merge($this->assignment->options, [
                'validity_option' => $this->validity_option,
            ]);
        }

        $this->resources = $this->assignment
            ->getMedia('resources')
            ->transform(function ($item) {
                $return = [
                    //                    'source' => $item->uuid,
                    'source' => $item->original_url,
                    'options' => [
                        //                        'type' => 'input',
                        'type' => 'limbo',
                        //                        'type' => 'local',
                        'file' => [
                            'name' => $item->file_name,
                            'size' => $item->size,
                            'type' => $item->mime_type,
                        ],
                        'metadata' => [
                            'uuid' => $item->uuid,
                        ],
                    ],
                ];

                if ($item->preview_url) {
                    Arr::set($return, 'options.metadata.poster', $item->preview_url);
                }

                return $return;
            })
            ->toArray();

        return view('livewire.course-assignments');
    }

    //    public function getErrorClass($field)
    //    {
    //        return $this->getErrorBag()->has($field) ? 'border-red-500' : 'border-green-500';
    //    }

    public function removeResourcesFile($uniqueFileId)
    {
        if (!$this->disableMode) {
            $resource = $this->assignment->getMedia('resources')->firstwhere('uuid', $uniqueFileId);
            if ($resource) {
                $resource->delete();
            }
            $this->emitSelf('refresh');
            //        $this->assignment->getMedia('resources')[$index]->delete();
        }
    }

    public function addResourcesFile($fileObject)
    {
        if (!$this->disableMode) {
            $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);
            $disk = config('filepond.temporary_files_disk');

            $filePath = $filepond->getPathFromServerId($fileObject['serverId']);
            $fullPath = Storage::disk($disk)->path($filePath);

            //        dd($fileObject, $filePath, $fullpath);

            $media = $this->assignment
                ->addMedia($fullPath)
                ->usingFileName($fileObject['filename'])
                ->toMediaCollection('resources');
            $media->refresh();
            $this->emitSelf('refresh');
            return $media->preview_url;
        }
    }
    /*    public function getValidityValueProperty()
    {
        if ($this->validity_option == 'until') {
            return 'Datetime';
        } else {
            //            return 'Durations in hours';
            return Helper::getDuration($this->assignment->options['duration']);
        }
    }*/
}
