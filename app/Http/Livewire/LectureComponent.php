<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\Section;
use App\Models\Transaction;
use App\Traits\HasErrorClassTrait;
use Aws\Chime\ChimeClient;
use Aws\Chime\Exception\ChimeException;
use Carbon\Carbon;
use getID3;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class LectureComponent extends Component
{
    use WithFileUploads;
    use HasErrorClassTrait;

    /**
     * @var Lecture
     */
    public $duration_hour;
    public $duration_min;
    public $lecture;
    //    public $section_id;
    public $delivery_mode;
    public $disableMode = false;

    public $video = [];
    public $resources = [];

    /**
     * @return array
     */
    public $rules = [
        'lecture.title' => 'required|string|min:6',
        'lecture.content_lecture' => 'required|string|min:20',
        //        'lecture.drip_days' => 'required|date_format:H:i',
        'lecture.drip_datetime' => 'required|date_format:Y-m-d H:i:s|after:now',
        //        'lecture_file' => 'file|mimes:ppt,pptx,pdf',
        'lecture.delivery_mode' => 'required|integer',
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
    protected $messages = [
        'lecture.drip_datetime.date' => 'Must be a valid date.',
        //        'lecture.drip_days.date_format' => 'Not valid.'
        //            'startDate.required' => 'The start date field is required.',
        //            'startDate.date' => 'The start date field must be a valid date.',
    ];
    protected $validationAttributes = [
        'title' => 'lecture name',
        'lecture.drip_datetime' => 'Start Date',
    ];
    protected $listeners = [
        'refresh' => '$refresh',
        'cloneContent' => 'clone',
    ];

    public function mount()
    {
        $this->lecture->course->publish_status == 'Under review' ||
        $this->lecture->content->publish_status == 'Published'
            ? ($this->disableMode = true)
            : ($this->disableMode = false);
        $carbonParse = Carbon::parse(gmdate('H:i', $this->lecture->duration));
        $this->duration_hour = $carbonParse->hour;
        $this->duration_min = $carbonParse->minute;
        $this->validate();
    }

    public function getUrlLectureRouteProperty()
    {
        return $this->lecture->url_lecture
            ? route('join_url_lecture', ['lecture' => $this->lecture->url_lecture])
            : null;
    }

    public function createMeetingLink()
    {
        if ($this->lecture->url_lecture) {
            return;
        }

        $this->lecture->url_lecture = (string) Str::uuid();
        $this->lecture->save();
    }

    public function render()
    {
        $this->video = $this->lecture
            ->getMedia('video')
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
                    \Arr::set($return, 'options.metadata.poster', $item->preview_url);
                }

                return $return;
            })
            ->toArray();
        $this->resources = $this->lecture
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
                    \Arr::set($return, 'options.metadata.poster', $item->preview_url);
                }

                return $return;
            })
            ->toArray();
        return view('livewire.lecture-component');
    }

    //    public function getErrorClass($field)
    //    {
    //        return $this->getErrorBag()->has($field) ? 'border-red-500' : 'border-green-500';
    //    }

    public function showFeedback()
    {
        $this->emitTo('show-review-feedback', 'openModal', $this->lecture->content->review_feedback);
    }

    public function clone($courseId = null)
    {
        if (
            $this->lecture->course->publish_status != 'Under review' &&
            $this->lecture->content->publish_status == 'Published'
        ) {
            //Make a clone if the lecture is published
            $oldResources = $this->lecture->getMedia('resources');
            $oldVideo = $this->lecture->getMedia('video')->first();
            //clone lecture
            $this->lecture = $this->lecture->replicate();
            if ($courseId) {
                $this->lecture->course_id = $courseId;
            }
            $this->lecture->push();
            //copy main video
            if ($oldVideo) {
                $oldVideo->copy($this->lecture, 'video');
            }
            //copy resources
            if (count($oldResources)) {
                foreach ($oldResources as $resource) {
                    $resource->copy($this->lecture, 'resources');
                }
            }
            //clone the content and add a new version to it
            $newContent = $this->lecture->content->replicate();
            $newContent->contentable_id = $this->lecture->id;
            if ($courseId) {
                $newContent->course_id = $courseId;
            }
            if (!$courseId) {
                $newContent->publish_status = 'Ready for review';
            }
            $newContent->version = $this->lecture->content->version + 1;
            $newContent->is_clone = 1;
            $newContent->push();
            $this->lecture->content->content_id = $newContent->id;
            $this->lecture->content->save();
            $this->lecture->load('content');
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
            $this->lecture->content->publish_status = 'Draft';
            $this->lecture->content->save();
            $this->lecture->save();
            $this->emitUp('changeStatus');
            $this->validate();
            //calculate duration in seconds
            if ($name == 'duration_min' || $name == 'duration_hour') {
                $durationInSec = (int) $this->duration_min * 60 + (int) $this->duration_hour * 60 * 60;
                $this->lecture->duration = $durationInSec;
            }
            //case recorded
            if ($this->lecture->delivery_mode == 2) {
                if ($this->lecture->video) {
                    $this->lecture->content->publish_status = 'Ready for review';
                    $this->lecture->content->save();
                    $this->lecture->save();
                }
            }
            //case face to face || live
            else {
                if ($this->duration_hour > 0 || $this->duration_min > 0) {
                    if (
                        $this->duration_hour >= 0 &&
                        ($this->duration_min >= 0 && $this->duration_min < 60)
                    ) {
                        $this->lecture->content->publish_status = 'Ready for review';
                        $this->lecture->content->save();
                        $this->lecture->save();
                    }
                }
            }
            if ($name == 'lecture.title') {
                $this->emitUp('refreshSections');
            }
            $this->emitUp('changeStatus');
        }
    }

    public function removeVideoFile($uniqueFileId): void
    {
        if (!$this->disableMode) {
            $resource = $this->lecture->getMedia('video')->firstwhere('uuid', $uniqueFileId);
            if ($resource) {
                $resource->delete();
            }
            $this->emitSelf('refresh');
        }
    }

    public function addVideoFile($fileObject)
    {
        if (!$this->disableMode) {
            $filePond = app(\Sopamo\LaravelFilepond\Filepond::class);
            $disk = config('filepond.temporary_files_disk');

            $filePath = $filePond->getPathFromServerId($fileObject['serverId']);
            $fullPath = Storage::disk($disk)->path($filePath);

            $videoMediaCollection = $this->lecture->getMedia('video');

            foreach ($videoMediaCollection as $videoMedia) {
                $videoMedia->delete();
            }

            $media = $this->lecture
                ->addMedia($fullPath)
                ->usingFileName($fileObject['filename'])
                ->toMediaCollection('video');

            if ($this->lecture->delivery_mode = 2) {
                $track = (new GetId3())->analyze($media->getPath());
                $duration = $track['playtime_seconds'];
                //            $durationDateTime = gmdate("H:i:s", $duration);
                $this->lecture->duration = (int) $duration;
                $this->lecture->save();
            }

            $media->refresh();
            $this->emitSelf('refresh');
            return $media->preview_url;
        }
    }

    public function removeResourcesFile($uniqueFileId): void
    {
        if (!$this->disableMode) {
            $resource = $this->lecture->getMedia('resources')->firstwhere('uuid', $uniqueFileId);
            if ($resource) {
                $resource->delete();
            }
            $this->emitSelf('refresh');
        }
    }

    public function addResourcesFile($fileObject)
    {
        if (!$this->disableMode) {
            $filePond = app(\Sopamo\LaravelFilepond\Filepond::class);
            $disk = config('filepond.temporary_files_disk');
            $filePath = $filePond->getPathFromServerId($fileObject['serverId']);
            $fullPath = Storage::disk($disk)->path($filePath);
            $media = $this->lecture
                ->addMedia($fullPath)
                ->usingFileName($fileObject['filename'])
                ->toMediaCollection('resources');
            $media->refresh();
            $this->emitSelf('refresh');
            return $media->preview_url;
        }
    }
}
