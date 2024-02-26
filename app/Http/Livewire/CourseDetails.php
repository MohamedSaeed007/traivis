<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\Content;
use App\Models\CourseTask;
use App\Models\Lecture;
use App\Models\Section;
use App\Models\Tag;
use Illuminate\Support\Collection;
use Livewire\Component;
use App\Models\Course;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use Storage;

class CourseDetails extends Component
{
    use WithFileUploads;

    public $cover;
    /** @var TemporaryUploadedFile $overview_video */
    public $overview_video;
    public Course $course;
    public $course_id;
    public array $tags;
    public string $page = '';
    public $assignment;
    /**
     * @var \Illuminate\Database\Eloquent\Collection
     */
    public $sections;
    public $section_id;
    public $task_id;
    public $section_name;
    //
    public $lectures;
    public $hours = 0;
    public $courseTasks;
    public $business;
    public $available_seats;
    public $users_count;
    public $parent;

    protected $queryString = [
        'page' => [
            'except' => ''
        ],
        'section_id' => [
            'except' => ''
        ],
        'task_id' => [
            'except' => ''
        ]
    ];

    /**
     * @var \Illuminate\Database\Eloquent\HigherOrderBuilderProxy|mixed|string|null
     */

    public function mount(Content $assignment)
    {
        if ($this->course_id == null) {
            $this->course = new Course(['status' => '1']);
            $this->tags = [];
        } else {
            $this->course = Course::with(['tags'])
                ->withCount('users')
                ->findOrFail($this->course_id);
            $this->tags = $this->course
                ->tags()
                ->pluck('name')
                ->toArray();

            $this->assignment = $assignment;
        }
        $this->sections = Section::where('course_id', $this->course_id)
            ->orderBy('sort_order')
            ->get();

        $this->lectures = Lecture::where('course_id', $this->course_id)->count();
        $this->hours = Lecture::where('course_id', $this->course_id)->sum('duration');
        //Course Tasks
        $this->courseTasks = CourseTask::where('course_id', $this->course_id)
            ->where(function ($q) {
                $q->where('institute_id', session('business_id'));
                $q->orWhere('instructor_id', session('business_id'));
            })
            ->get();
        $this->business = Business::find(session('business_id'));
    }
    public function updated($name, $value)
    {
        if (in_array($name, array_keys($this->rules))) {
            $this->createCourse();
        }
    }
    public $rules = [
        'course.title' => 'string',
        'course.sale_price' => 'string',
        'course.description' => 'string',
        'course.seats' => 'string',
        'course.course_level' => 'string',
        'course.short_description' => 'string',
        'course.slug' => 'string',
        'course.benefits' => 'string',
        'course.cert_accr' => 'string',
        'course.requirements' => 'string',
        'course.updated_at' => 'string',
        'course.price' => 'required|integer',
        'cover' => 'string',
        'overview_video' => 'string',
        'tags' => 'array',
        'updated_at' => 'string',
        'assignment.title' => 'string',
        'assignment.text' => 'string',
        'available_seats' => 'int',
        'course.visibility' => 'string',
        'sections.*.section_name' => 'required|string'
    ];

    public function pageQueryType($page, $section_id)
    {
        $this->section_id = $section_id;
        $this->task_id = $section_id;
        switch ($page) {
            case 'assignment':
                $this->page = 'assignment';
                if ($this->business->business_type == 'instructor') {
                    //todo: fix the rest of the redirections as this one
                    redirect()->route('instructor-dashboard-courseDetails', [
                        'id' => $this->course_id,
                        'page' => 'assignment',
                        'section_id' => $section_id
                    ]);
                } else {
                    redirect()->route('institute-dashboard-courseDetails', [
                        'id' => $this->course_id,
                        'page' => 'assignment',
                        'section_id' => $section_id
                    ]);
                }
                break;
            case 'quiz':
                $this->page = 'quiz';
                if (Business::find(session('business_id'))->business_type == 'instructor') {
                    redirect()->route(
                        'instructor-dashboard-courseDetails',
                        $this->course_id . '?page=quiz&section_id=' . $section_id
                    );
                } else {
                    redirect()->route(
                        'institute-dashboard-courseDetails',
                        $this->course_id . '?page=quiz&section_id=' . $section_id
                    );
                }
                break;
            case 'lecture':
                $this->page = 'lecture';
                if (Business::find(session('business_id'))->business_type == 'instructor') {
                    redirect()->route(
                        'instructor-dashboard-courseDetails',
                        $this->course_id . '?page=lecture&section_id=' . $section_id
                    );
                } else {
                    redirect()->route(
                        'institute-dashboard-courseDetails',
                        $this->course_id . '?page=lecture&section_id=' . $section_id
                    );
                }
                break;
            case 'task':
                $this->page = 'task';
                if (Business::find(session('business_id'))->business_type == 'instructor') {
                    redirect()->route(
                        'instructor-dashboard-courseDetails',
                        $this->course_id . '?page=task&task_id=' . $this->task_id
                    );
                } else {
                    redirect()->route(
                        request()->segments(1) . '-courseDetails',
                        $this->course_id . '?page=task&task_id=' . $this->task_id
                    );
                }
                break;
        }
    }

    public function createCourse()
    {
        if ($this->course_id == null) {
            //Create New Course
            $this->course->business_id = session('business_id');
            $this->course->course_types = 1;
            $this->course->status = 1;
            // $this->course->is_paid = 1;
            $this->course->publish_status =
                $this->business->business_type == 'enterprise' ? 'internal' : 'draft';
            $this->course->updated_at = now();

            if ($this->course->save()) {
                $this->course_id = $this->course->id;

                if (is_null($this->course->updated_at)) {
                    $this->course->updated_at = now();
                }
            }
            if (Business::find(session('business_id'))->business_type == 'instructor') {
                redirect()->route('instructor-dashboard-courseDetails', $this->course->id);
            } else {
                redirect()->route('institute-dashboard-courseDetails', $this->course->id);
            }
        } else {
            //Save Cover Image
            if ($this->cover) {
                $validate_arr = ['jpg', 'jpeg', 'png'];
                $image = $this->cover;
                $img_ext = strtolower($image->getClientOriginalExtension());
                if (in_array($img_ext, $validate_arr)) {
                    //Delete old cover
                    Storage::disk('course')->delete($this->course->cover);
                    $image_path = $this->cover->store('', ['disk' => 'course']);
                    $this->course->cover = $image_path;
                }
            }
            //Save Overview Video
            if ($this->overview_video) {
                $validate_arr = ['mp4', 'mkv'];
                /** @var TemporaryUploadedFile $image */
                $image = $this->overview_video;
                $img_ext = strtolower($image->getClientOriginalExtension());
                if (in_array($img_ext, $validate_arr)) {
                    //Delete old overview video
                    Storage::disk('course_videos')->delete($this->course->overview_video);
                    $image_path = $this->overview_video->store('', ['disk' => 'course_videos']);
                    $this->course->overview_video = $image_path;
                }
            }
            $this->course->save();
            $this->cover = '';
            if ($this->overview_video) {
                $this->overview_video = '';
                return redirect(request()->header('Referer'));
            }
        }

        //Tags
        $tagIds = Tag::whereIn('name', $this->tags)
            ->pluck('name')
            ->toArray();

        $new_tags = array_diff($this->tags, $tagIds);
        foreach ($new_tags as $a_new_tag) {
            Tag::firstOrCreate(['name' => $a_new_tag]);
        }

        $tagIds = Tag::whereIn('name', $this->tags)
            ->pluck('id')
            ->toArray();

        $this->course->tags()->sync($tagIds);
    }

    public function deleteCourse()
    {
        if ($this->course_id != null) {
            $this->course->delete();
        }
    }

    public function createAssignment()
    {
        Content::updateOrCreate(
            ['course_id' => $this->course->id],
            [
                'course_id' => $this->course->id,
                'title' => $this->assignment->title,
                'text' => $this->assignment->text
            ]
        );
    }

    public function updateSectionOrder($list)
    {
        foreach ($list as $item) {
            Section::find($item['value'])->update(['sort_order' => $item['order']]);
        }
        $this->sections = Section::where('course_id', $this->course->id)
            ->orderBy('sort_order')
            ->get();
    }

    public function deleteSection($section)
    {
        $section = Section::find($section['id']);
        if ($section) {
            $section->delete();
        }
        $this->sections = Section::where('course_id', $this->course_id)
            ->orderBy('sort_order')
            ->get();
    }

    public function addSection()
    {
        //        $basic_code = 'Section ';
        $sections_count = $this->course->sections->count();
        //        if (!$max_code) {
        //            $section_name = $basic_code . '1';
        //        }
        //        $code = substr($max_code, 8);
        //        $integer_max = (int) $code + 1;
        //        $section_name = $basic_code . $integer_max;

        $this->course->sections()->create([
            'section_name' => sprintf('Section %s', $sections_count + 1),
            'section_type' => 1
        ]);
        $this->sections = $this->course
            ->sections()
            ->orderBy('sort_order')
            ->get();
        //        $this->sections = Section::where('course_id', $this->course_id)
        //            ->orderBy('sort_order')
        //            ->get();
    }

    public function publishCourse()
    {
        if ($this->course->publish_status == 'draft') {
            $this->course->update(['publish_status' => 'published']);
        }
    }

    public function updatedSections($value, $key)
    {
        $index = (string) \Illuminate\Support\Str::of($key)->beforeLast('.');

        $section = $this->sections->get($index);
        if ($section) {
            $section->save();
        }
        //        dd($index, $section->toArray(), $key);
        //        dd($section->toArray(), $index, $key, $this->sections->toArray());
        //
        //        $section = $this->sections->get($key);
        //        dd($section, $value, $key);
        //        dd(func_get_args());
    }
    //    public function updated($key, $value)
    //    {
    //        dd(data_get( $this.$this->sections,));
    //        dd(data_get( $key), func_get_args());
    //    }

    public function render()
    {
        if ($this->course->exists) {
            $this->course->loadCount('users');
        }

        $this->available_seats = $this->course->seats - $this->course->users_count;
        $this->users_count = $this->course->users_count;

        return view('livewire.course-details');
    }
}
