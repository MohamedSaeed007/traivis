<?php

namespace App\Http\Livewire;

use App\Achievements\PublishedCourses;
use App\Achievements\PublishedFreeCourses;
use App\Achievements\PublishedHrsOfCourses;
use App\Achievements\PublishedHrsOfFreeCourses;
use App\Events\CourseCreated;
use App\Mail\CoursePublished;
use App\Models\Business;
use App\Models\Content;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\SocialMedia;
use App\Models\SocialPostDate;
use App\Models\TeaserSocialMedia;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use App\Models\TeaserOriginalDraft;
use Livewire\WithFileUploads;
use Storage;

class PublishCourse extends Component
{
    use WithFileUploads;

    public $courseDetails;
    public $course;
    public $course_id;
    public $schedule_date;
    public $schedule_msg = 'The course will publish now';
    public $privateLinkStatus = false;
    public $courseLink = null;
    public $openModal = false;
    public $isCourseReadyToPublish = true;
    public $inCompletedContent;
    public $showSuccessStep = false;
    protected $listeners = ['openModal'];
    public Business $business;

    protected $rules = [
        'schedule_date' => 'nullable|date|after:now'
    ];

    public function mount()
    {
        $this->business = Business::find(session('business_id'));
    }

    public function updated()
    {
        $this->validate();
    }
    public function updatedOpenModal()
    {
        $this->showSuccessStep = false;
    }

    public function openModal($id)
    {
        if ($id && is_string($id)) {
            return;
        }
        $this->course_id = $id['course_id'];
        $this->course = Course::find($this->course_id);
        $this->courseDetails = $this->course->courseDetailsClone ?? $this->course->courseDetails;
        if ($this->course->publish_status == 'Declined' || $this->course->publish_status == 'Draft') {
            $this->isCourseReadyToPublish = false;
        } else {
            $this->isCourseReadyToPublish = true;
        }
        if ($this->isCourseReadyToPublish) {
            if ($this->course->publish_status == 'Published') {
                $this->showSuccessStep = true;
            }
            if ($this->course->launch_at) {
                $this->schedule_date = Carbon::parse($this->course->launch_at)->format('Y-m-d H:i');
                $this->schedule_msg = 'The course will publish on ' . $this->schedule_date;
            }
            $this->privateLinkStatus = $this->course->visibility == 'private' ? true : false;
        } else {
            $this->inCompletedContent = $this->course->contents()->whereIn('publish_status', ['Draft', 'Declined'])->get();
        }
        $this->openModal = true;
    }

    public function restoreClone($contentId)
    {
        $content = Content::find($contentId);
        $oldContent = Content::where('content_id', $content->id)->first();
        $contentData = $content->toArray();
        unset($contentData['contentable_id']);
        unset($contentData['publish_status']);
        $oldContent->update($contentData);
        $oldContentId = $oldContent->id;
        // $oldContent->increment('version');
        $contentable = $content->contentable;
        $oldContentable = $oldContent->contentable;
        $oldContentable->update($contentable->toArray());
        if ($content->contentable_type == Quiz::class) {
            foreach ($contentable->questionsWithTrashed as $question) {
                // $questionImage = $question->getMedia()->first();
                if ($question->is_clone) {
                    $oldQuestion = Question::where('question_id', $question->id)->first();
                    if ($question->deleted_at) {
                        $oldQuestion->delete();
                    }
                } else {
                    $question->quiz_id = $oldContentable->id;
                    $question->save();
                }
            }
        } else {
            if ($content->contentable_type == Lecture::class) {
                //get the new video
                $newVideo = $contentable->getMedia('video')->first();
                //delete old contentable video
                if ($oldContentable->hasMedia('video')) {
                    $oldContentable->getMedia('video')->first()->delete();
                }
                //copy main video
                if ($newVideo) {
                    $newVideo->copy($oldContentable, 'video');
                }
            }
            //get the new resources
            $newResources = $contentable->getMedia('resources');
            //delete old contentable resources
            if (count($oldContentable->getMedia('resources'))) {
                foreach ($oldContentable->getMedia('resources') as $media) {
                    $media->delete();
                }
            }
            //copy resources
            if (count($newResources)) {
                foreach ($newResources as $resource) {
                    $resource->copy($oldContentable, 'resources');
                }
            }
        }
        $courseId = $content->course->id;
        $content->delete();
    }

    public function restoreCourseClone()
    {
        $newCourseData = $this->courseDetails->toArray();
        $newCourseData['published_at'] = now();
        unset($newCourseData['publish_status']);
        unset($newCourseData['parent_id']);
        unset($newCourseData['is_clone']);
        $originalCourse = $this->courseDetails->original;
        $originalCourse->update($newCourseData);
        $originalCourse->increment('version');
        $this->courseDetails->delete();
    }
    public function publishCourse()
    {
        $this->validate();
        $this->course->visibility = $this->privateLinkStatus ? 'private' : 'public';
        if ($this->schedule_date == null) {
            if ($this->courseDetails->is_clone) {
                $this->restoreCourseClone();
            } else {
                $this->courseDetails->publish_status = 'Published';
                $this->courseDetails->save();
            }
            foreach ($this->course->contents()->where('publish_status', '!=', 'Published')->get() as $content) {
                if ($content->is_clone) {
                    $this->restoreClone($content->id);
                } else {
                    $content->publish_status = 'Published';
                    $content->save();
                }
            }
            $this->course->published_at = now();
            $this->course->publish_status = 'Published';
            //Increment Achievement Progress
            if ($this->course->sale_price == 0) {
                $this->course->maker->addProgress(new PublishedFreeCourses(), 1);
                $this->course->maker->addProgress(new PublishedHrsOfFreeCourses(), $this->course->course_duration);
            } else {
                $this->course->maker->addProgress(new PublishedCourses(), 1);
                $this->course->maker->addProgress(new PublishedHrsOfCourses(), $this->course->course_duration);
            }
        } else {
            $this->course->publish_status = 'Scheduled to publish';
            $this->course->published_at = null;
            foreach ($this->course->contents as $content) {
                $content->publish_status = 'Scheduled to publish';
                $content->save();
            }
        }
        $this->course->launch_at = $this->schedule_date;
        $this->course->save();
        CourseCreated::dispatch($this->course);
        Mail::to($this->course->maker->business_email)->queue(new CoursePublished($this->course));
        // $this->showSuccessStep = true;
        return redirect(route('instructor-dashboard-courseDetails', ['id' => $this->course_id]));
    }

    public function saveAsDraft()
    {
        $this->course->publish_status = 'Draft';
        $this->course->published_at = null;
        $this->course->save();
        foreach ($this->course->contents as $content) {
            $content->publish_status = 'Ready to publish';
            $content->save();
        }
        $this->emit('refresh');
        $this->openModal = false;
    }

    public function openInfluencerCampaignPopup()
    {
        $this->openModal = false;
        $this->emitTo('influencer-camp-modal', 'openCampModal', ['course_id' => $this->course->id]);
    }
    public function openTeaserCampaignPopup()
    {
        $this->openModal = false;
        $this->emitTo('publish-course-teaser-campaign', 'openModal', $this->course->id);
    }

    public function render()
    {
        if ($this->schedule_date) {
            $this->schedule_msg = 'The course will publish on ' . Carbon::parse($this->schedule_date)->format('Y-m-d H:i');
        } else {
            $this->schedule_msg = 'The course will publish now';
        }
        return view('livewire.publish-course');
    }
}
