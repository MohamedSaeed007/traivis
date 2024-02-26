<?php

namespace App\Http\Livewire\Courses;

use App\Achievements\PublishedCourses;
use App\Achievements\PublishedFreeCourses;
use App\Achievements\PublishedHrsOfCourses;
use App\Achievements\PublishedHrsOfFreeCourses;
use App\Mail\CourseUnderReview;
use App\Models\Assignment;
use App\Models\Business;
use App\Models\Category;
use App\Models\Content;
use App\Models\Course;
use App\Models\CourseDetails;
use App\Models\CourseTask;
use App\Models\Individual;
use App\Models\Industry;
use App\Models\Lecture;
use App\Models\Model;
use App\Models\Quiz;
use App\Models\Section;
use App\Models\Tag;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use App\Classes\Helper;

class Edit extends Component
{
    use WithFileUploads;

    public Business $maker;
    public $course_id;
    public $content_id;
    public $task_id;
    public $open;
    public ?Course $course;
    public ?CourseDetails $courseDetails;
    public $lectures_count = 0;
    public $cover;
    public array $tags;
    public $available_tags;
    public $overview_video;

    public $sections;
    public $selected_content;

    public $available_seats;
    public $users_count;
    public $disableMode = false;

    public $selected_task;
    public $queryString = [
        'course_id' => [
            'as' => 'id',
        ],
        'content_id' => [
            'as' => 'cid',
            'except' => '',
        ],
        'task_id' => [
            'as' => 'tid',
            'except' => '',
        ],
        'open' => [
            'except' => '',
        ],
    ];
    public $makerRating;
    public $makerReviewCount;
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
    protected $rules = [
        'courseDetails.title' => 'required|string|min:6|max:200',
        'courseDetails.course_level' => 'required|string',
        'courseDetails.price' => 'required|numeric|min:0',
        'courseDetails.sale_price' => 'required|numeric|lte:courseDetails.price|min:0',
        'courseDetails.seats' => 'required|numeric',
        'courseDetails.benefits' => 'nullable|string',
        'courseDetails.cert_accr' => 'nullable|string',
        'courseDetails.requirements' => 'nullable|string',
        'courseDetails.meta_description' => 'required|string|min:20|max:160',
        'courseDetails.short_description' => 'required|string|min:20',
        'courseDetails.description' => 'required|string|min:20',
        'sections.*.section_name' => 'required|string|min:6',
        'sections.*.contents.*.contentable.title' => 'required|string|min:6',
        'sections.*.contents.*.contentable.duration' => 'sometimes',
        'cover' => 'nullable|image',
        'tags' => 'array',
        //        'overview_video' => 'mimes:mp4,mov,ogg,qtm,webm|max:20000'
        'overview_video' => 'nullable|mimes:mp4,ogg|max:20000',
    ];
    protected $messages = [
        'sections.*.section_name.required' => 'required',
        'sections.*.section_name.min' => 'Must be at least 6 characters',
        'sections.*.contents.*.contentable.title.required' => 'Required',
        'sections.*.contents.*.contentable.title.min' => 'Must be at least 6 characters',
    ];
    protected $validationAttributes = [
        'title' => 'name',
        'short_description' => 'description',
        'description' => 'what you will learn',
        'overview_video' => 'overview video',
    ];
    protected $listeners = [
        'refreshSections' => '$refresh',
        'refresh' => '$refresh',
        'changeStatus' => 'changeStatus',
        'openInfluencerModal' => 'openInfluencerModal',
    ];

    public function rules()
    {
        $rules = $this->rules;
        if ($this->selected_content && get_class($this->selected_content) != Lecture::class) {
            unset($rules['sections.*.contents.*.contentable.duration']);
        }
        return $rules;
    }

    public function mount()
    {
        //        $tags = Tag::all();
        $categories = Category::all(['category_name as name']);
        $industries = Industry::all(['en_name as name']);

        $this->available_tags = $categories
            ->concat($industries)
            // ->concat($tags)
            ->flatten()
            ->pluck('name')
            ->unique()
            ->sort()
            ->values()
            ->toArray();

        if (session('business_id') == 1 && $this->course_id) {
            $this->maker = Business::withCount('followers')
                ->withCount('courses')
                ->find(Course::find($this->course_id)->maker->id);
        } else {
            $this->maker = Business::withCount('followers')
                ->withCount('courses')
                ->find(session('business_id'));
        }

        $this->makerRating = $this->maker->getFinalRatingValue();
        $this->makerReviewCount = $this->maker->getReviewsCount();

        if ($this->course_id) {
            $this->course = Course::find($this->course_id);
            $this->courseDetails = $this->course->courseDetailsClone ?? $this->course->courseDetails;

            $this->tags = $this->course->courseDetails
                ->tags()
                ->pluck('name')
                ->toArray();

            $this->sections = $this->course->sections;
            if ($this->content_id) {
                $c = Content::find($this->content_id);
                if ($c && $this->sections->find($c->section_id)) {
                    $this->selected_content = $c;
                }
            } elseif ($this->task_id) {
                $t = CourseTask::find($this->task_id);
                if ($t && $this->course->tasks()->find($t->id)) {
                    $this->selected_task = $t;
                }
            }
            if (
                $this->courseDetails->course->publish_status == 'Under review' ||
                $this->courseDetails->publish_status == 'Published'
            ) {
                $this->disableMode = true;
            }
        } else {
            $this->course = new Course();
            $this->courseDetails = new CourseDetails(['seats' => 10]);
            $this->tags = [];
        }
    }

    public function openInfluencerModal()
    {
        if (!$this->course->visited_after_publish && $this->course->publish_status == 'Published') {
            $this->emitTo('influencer-camp-modal', 'openCampModal', ['course_id' => $this->course->id]);
            $this->course->visited_after_publish = 1;
            $this->course->save();
        }
    }

    public function render()
    {
        // $this->openInfluencerModal();
        $this->sections = $this->course
            ->sections()
            ->with('contents.contentable')
            ->get();

        $this->cover = $this->courseDetails->getFirstMedia('cover');
        $this->overview_video = $this->courseDetails->getFirstMedia('video');

        $this->lectures_count = $this->course->lectures()->count();

        $this->users_count = $this->course->users()->count();
        $this->available_seats = $this->courseDetails->seats - $this->users_count;

        return view('livewire.courses.edit');
    }

    public function getSectionStatus($section)
    {
        if ($section->contents->contains('publish_status', 'Declined')) {
            return 'Declined';
        }
        if ($section->contents->contains('publish_status', 'Under review')) {
            return 'Under review';
        }
        if ($section->contents->contains('publish_status', 'Draft')) {
            return 'Draft';
        }
        if ($section->contents->contains('publish_status', 'Approved')) {
            return 'Approved';
        }
        if ($section->contents->contains('publish_status', 'Ready for review')) {
            return 'Ready for review';
        }
        if ($section->contents->contains('publish_status', 'Published')) {
            return 'Published';
        }
    }

    public function getSecondsProperty()
    {
        return $this->course->lectures()->sum('duration');
    }

    public function getHoursProperty()
    {
        $interval = $this->course->lectures()->sum('duration');
        return sprintf(
            '%02dh : %02dm',
            floor($interval / 3600),
            floor(($interval % 3600) / 60),
            $interval % 60,
        );
    }

    public function clone()
    {
        if ($this->course->publish_status != 'Under review') {
            if ($this->courseDetails->publish_status == 'Published') {
                $oldVideo = $this->courseDetails->getFirstMedia('video');
                $oldCover = $this->courseDetails->getFirstMedia('cover');
                $oldCourseDetails = $this->courseDetails;
                $this->courseDetails = $this->courseDetails->replicate();
                $this->courseDetails->publish_status = 'Ready for review';
                $this->courseDetails->parent_id = $oldCourseDetails->id;
                $this->courseDetails->is_clone = 1;
                $this->courseDetails->version = $oldCourseDetails->version + 1;
                $this->courseDetails->push();
                //copy main video
                if ($oldVideo) {
                    $oldVideo->copy($this->courseDetails, 'video');
                }
                //copy main cover
                if ($oldCover) {
                    $oldCover->copy($this->courseDetails, 'video');
                }
                $this->changeStatus();
                return redirect(
                    route('instructor-dashboard-courseDetails', ['id' => $this->course->id]),
                );
            }
        }
    }

    public function changeStatus()
    {
        $this->course->load('contents');
        if ($this->course->publish_status != 'Under review') {
            $this->course->publish_status = 'Draft';
            if (
                $this->course->contents->contains('publish_status', 'Declined') ||
                $this->courseDetails->publish_status == 'Declined'
            ) {
                $this->course->publish_status = 'Declined';
                debug(__LINE__);
            } elseif (
                $this->course->contents->contains('publish_status', 'Draft') ||
                $this->courseDetails->publish_status == 'Draft'
            ) {
                $this->course->publish_status = 'Draft';
                debug(__LINE__);
            } elseif (
                $this->course->contents->contains('publish_status', 'Ready for review') ||
                $this->courseDetails->publish_status == 'Ready for review'
            ) {
                $this->course->publish_status = 'Ready for review';
                debug(__LINE__);
            } elseif (
                $this->course->contents->contains('publish_status', 'Approved') ||
                $this->courseDetails->publish_status == 'Approved'
            ) {
                $this->course->publish_status = 'Approved';
                debug(__LINE__);
            } elseif (
                $this->course->contents->every(function ($value) {
                    return $value->publish_status == 'Published';
                }) &&
                $this->courseDetails->publish_status == 'Published'
            ) {
                $this->course->publish_status = 'Published';
                debug(__LINE__);
            }
            $this->course->save();
        }
    }

    public function updated($field, $value)
    {
        if ($this->course->publish_status != 'Under review') {
            if ($this->course->sale_price == 0) {
                $this->course->maker->removeProgress(new PublishedFreeCourses(), 1);
                $this->course->maker->removeProgress(new PublishedHrsOfFreeCourses(), $this->course->course_duration);
            } else {
                $this->course->maker->removeProgress(new PublishedCourses(), 1);
                $this->course->maker->removeProgress(new PublishedHrsOfCourses(), $this->course->course_duration);
            }
            $this->course->publish_status = 'Draft';
            $this->courseDetails->publish_status = 'Draft';
            if ($field == 'course.price' || $field == 'course.sale_price') {
                $this->validate([
                    'course.price' => 'required|numeric|min:0',
                    'course.sale_price' => 'required|numeric|lte:course.price|min:0',
                ]);
            } else {
                $this->validateOnly($field);
            }
            //create course & course details for the first time
            if (!$this->course->id) {
                $this->course->course_types = 1;
                $this->course->maker()->associate($this->maker);
                $this->course->publish_status = 'Draft';
                // $this->course->slug = Helper::slugify($this->courseDetails->title);
                $this->course->save();
                $this->courseDetails->publish_status = 'Draft';
                $this->courseDetails->course_level = 'beginners';
                $this->courseDetails->course_id = $this->course->id;
                $this->courseDetails->save();
                $this->course_id = $this->course->id;
                $section = $this->addSection(true);
                $this->addContentable($section->id, Lecture::class);
            } else {
                // $this->course->touch();
                $this->course->save();
                $this->courseDetails->save();
                $this->sections->each->save();
                $field_str = \Str::of($field);
                if ($field_str->is('sections.*.contents.*.contentable.*')) {
                    $segments = $field_str->explode('.');
                    //                foreach (
                    //                    $this->sections[$segments[1]]->contents[$segments[3]]->contentable->getDirty()
                    //                    as $field => $field_value
                    //                ) {
                    //                    $this->sections[$segments[1]]->contents[$segments[3]]->contentable->{$field} = trim(
                    //                        $field_value
                    //                    );
                    //                }
                    $this->sections[$segments[1]]->contents[$segments[3]]->contentable->save();
                    $this->emit('refreshContentable');
                }
            }
            $this->validate();
            $this->courseDetails->publish_status = 'Ready for review';
            $this->courseDetails->save();
            $this->changeStatus();
            switch ($field) {
                case 'cover':
                    /** @var TemporaryUploadedFile $value */
                    //                dd($value->getClientOriginalName(), $value->getRealPath());
                    $this->deleteCover(false);
                    $this->courseDetails
                        ->addMedia($value->getRealPath())
                        ->usingFileName($value->getClientOriginalName())
                        ->toMediaCollection('cover');
                    $this->emit('refreshSections');
                    break;
                case 'overview_video':
                    $this->deleteOverviewVideo(false);
                    $this->courseDetails
                        ->addMedia($value->getRealPath())
                        ->usingFileName($value->getClientOriginalName())
                        ->toMediaCollection('video');
                    $this->emit('refreshSections');
                    break;
                case 'tags':
                    //Tags
                    $tagIds = Tag::whereIn('name', $value)
                        ->pluck('name')
                        ->toArray();
                    $new_tags = array_diff($this->tags, $tagIds);
                    foreach ($new_tags as $a_new_tag) {
                        Tag::firstOrCreate(['name' => $a_new_tag]);
                    }
                    $tagIds = Tag::whereIn('name', $this->tags)
                        ->pluck('id')
                        ->toArray();
                    $this->courseDetails->tags()->sync($tagIds);
                    break;
            }
        }
    }

    public function addSection($isIntroduction = false)
    {
        if ($this->course->publish_status != 'Under review') {
            if (!$this->course_id) {
                return 0;
            }

            $sections_count = $this->course->sections()->count();
            $section = $this->course->sections()->create([
                'section_name' => $isIntroduction ? 'Introduction' : 'Section ' . ($sections_count + 1),
            ]);
            $this->course->touch();
            $this->changeStatus();
            return $section;
        }
    }

    private function addContentable($section_id, $contetnableModel): void
    {
        if ($this->course->publish_status != 'Under review') {
            if ($section = $this->course->sections->find($section_id)) {
                $lectures_count = $section
                    ->contents()
                    ->whereContentableType($contetnableModel)
                    ->count();
                $contentable = $contetnableModel::create([
                    'title' => sprintf('%s %d', class_basename($contetnableModel), $lectures_count + 1),
                    'course_id' => $this->course->id,
                ]);

                $content = new Content();
                $content->contentable_type = $contentable->getMorphClass();
                $content->contentable_id = $contentable->id;
                $content->course()->associate($this->course);
                $section->contents()->save($content);
                $this->course->touch();
                $this->changeStatus();
            }
        }
    }

    public function deleteCover($refresh = true)
    {
        if ($this->courseDetails->publish_status != 'Under review') {
            $cover = $this->courseDetails->getFirstMedia('cover');
            $cover?->delete();
            if ($refresh) {
                $this->courseDetails->touch();
                $this->emit('refreshSections');
            }
        }
    }

    public function deleteOverviewVideo($refresh = true)
    {
        if ($this->courseDetails->publish_status != 'Under review') {
            $overview_video = $this->courseDetails->getFirstMedia('video');
            $overview_video?->delete();
            if ($refresh) {
                $this->courseDetails->touch();
                $this->emit('refreshSections');
            }
        }
    }

    public function deleteSection($id): void
    {
        if ($this->course->publish_status != 'Under review') {
            if (
                $sectionToDelete = $this->course
                ->sections()
                ->with('contents.contentable')
                ->find($id)
            ) {
                $sectionToDelete->contents->each(function (Content $item) {
                    $this->deleteContent($item->id);
                });
                $sectionToDelete->delete();
                $this->course->touch();
                $this->changeStatus();
            }
        }
    }

    public function deleteContent($id): void
    {
        if ($this->course->publish_status != 'Under review') {
            if ($contentToDelete = Content::with('contentable')->find($id)) {
                if ($this->course->sections()->find($contentToDelete->section->id)) {
                    if (
                        $theClonedContent = $this->course
                        ->contents()
                        ->where('content_id', $id)
                        ->first()
                    ) {
                        $theClonedContent->content_id = null;
                        $theClonedContent->save();
                    }

                    if ($contentToDelete->is($this->selected_content)) {
                        $this->selected_content = $this->content_id = null;
                    }
                    $contentToDelete->delete();
                    $this->course->touch();
                    $this->changeStatus();
                }
            }
        }
    }

    public function addLecture($section_id): void
    {
        $this->addContentable($section_id, Lecture::class);
        $this->course->touch();
    }

    public function addAssignment($section_id): void
    {
        $this->addContentable($section_id, Assignment::class);
        $this->course->touch();
    }

    public function addQuiz($section_id): void
    {
        $this->addContentable($section_id, Quiz::class);
        $this->course->touch();
    }

    public function updateSectionsOrder($list): void
    {
        if ($this->course->publish_status != 'Under review') {
            foreach ($list as $item) {
                $this->course
                    ->sections()
                    ->find($item['value'])
                    ->update(['sort_order' => $item['order']]);
            }
            $this->course->touch();
        }
    }

    public function showFeedback()
    {
        $this->emitTo('show-review-feedback', 'openModal', $this->courseDetails->review_feedback);
    }
    public function publishCourse()
    {
        $this->validate();
        if ($this->course->publish_status == 'Ready for review') {
            $this->course
                ->contents()
                ->where('publish_status', 'Ready for review')
                ->update([
                    'publish_status' => 'Under review',
                ]);
            if ($this->courseDetails->publish_status == 'Ready for review') {
                $this->courseDetails->publish_status = 'Under review';
                $this->courseDetails->save();
            }
            $this->course->publish_status = 'Under review';
            $this->course->save();
            Mail::to($this->course->maker->business_email)->queue(new CourseUnderReview($this->course));
            $this->disableMode = true;
            return redirect(
                route('instructor-dashboard-courseDetails', [
                    'id' => $this->course_id,
                    'cid' => $this->content_id,
                ]),
            );
        } else {
            $this->emitTo('publish-course', 'openModal', ['course_id' => $this->course_id]);
        }
    }

    public function updateContentsOrder($sections): void
    {
        //        foreach ($sections as $sectionItem) {
        //            /** @var Section $section */
        //            if ($section = $this->course->sections()->find($sectionItem['value'])) {
        //                foreach ($sectionItem['items'] as $item) {
        //                    if ($content = Content::find($item['value'])) {
        //                        $content->sort_order = $item['order'];
        //                        $section->contents()->save($content);
        //                    }
        //                }
        //            }
        //        }

        //        foreach ($sections as $sectionItem) {
        //            foreach ($sectionItem['items'] as $item) {
        //                $content = Content::find($item['value']);
        //                $content->sort_order = $item['order'];
        //                $content->section_id = $sectionItem['value'];
        //                $content->save();
        //            }
        //        }
        //        return;
        if ($this->course->publish_status != 'Under review') {
            foreach ($sections as $sectionItem) {
                /** @var Section $section */
                $section = $this->course->sections()->find($sectionItem['value']);

                foreach ($sectionItem['items'] as $item) {
                    $content = Content::find($item['value']);
                    $content->sort_order = $item['order'];
                    $content->save();
                    $section->contents()->save($content);
                }
            }
            $this->course->touch();
        }
    }

    public function selectContent($id)
    {
        if ($contentToSelect = Content::with('contentable')->find($id)) {
            if ($this->course->sections()->find($contentToSelect->section_id)) {
                $this->selected_content = $contentToSelect;
                $this->content_id = $contentToSelect->id;
                $this->task_id = '';
                $this->open = '';
            }
        }
    }

    public function selectTask($id)
    {
        if ($taskToSelect = CourseTask::find($id)) {
            if ($this->course->tasks()->find($taskToSelect->id)) {
                $this->selected_task = $taskToSelect;
                $this->task_id = $taskToSelect->id;
                $this->content_id = '';
                $this->open = '';
            }
        }
    }

    public function getCourseDetails()
    {
        $this->selected_content = $this->content_id = $this->selected_task = $this->task_id = $this->open = null;
    }

    public function getIsPaidProperty()
    {
        return $this->course->price > 0;
    }

    public function round_big_number($property)
    {
        switch ($property) {
            case 'followers':
                $big_number = $this->maker->followers_count;
                break;
            case 'courses':
                $big_number = $this->maker->courses_count;
                break;
            default:
                return null;
        }

        if ($big_number >= 1000000) {
            $formatted_big_number = floor($big_number / 1000000) . 'M';
        } elseif ($big_number >= 1000) {
            $formatted_big_number = floor($big_number / 1000) . 'K';
        } else {
            $formatted_big_number = $big_number;
        }

        return $formatted_big_number;
    }
}
