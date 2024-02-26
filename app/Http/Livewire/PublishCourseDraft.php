<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\SocialMedia;
use App\Models\SocialPostDate;
use App\Models\TeaserSocialMedia;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\TeaserOriginalDraft;
use Livewire\WithFileUploads;
use Storage;

class PublishCourseDraft extends ModalComponent
{
    use WithFileUploads;

    public $course_id;
    public $teaserOriginalDraft;
    public $original_drafts;
    public $new_post = false;
    public $txt;
    public $socials;
    public $active_preview = 'original';
    public $social_publish_date;
    public $slots = 0;
    public $post_photo = '';
    public $active_post = '';
    public $edit_post_text = false;
    public $new_post_txt_val = '';
    public $schedule_type = '';
    public $schedule_date = '';
    public $date_error = '';
    public $schedule_msg = '';

    public function mount()
    {
        $this->teaserOriginalDraft['course_id'] = $this->course_id;
        $this->original_drafts = TeaserOriginalDraft::where('course_id', $this->course_id)
            ->orderBy('id', 'desc')
            ->get();
        $this->socials = SocialMedia::get();

        $this->getSlots();
    }
    public function getSlots()
    {
        //Slots Count
        $date_slot = 0;

        foreach ($this->original_drafts as $original_draft) {
            $social_posts = TeaserSocialMedia::where('post_id', $original_draft->id ?? '')
                ->whereRelation('social', 'social_name', '!=', 'traivis')
                ->get();
            foreach ($social_posts as $post) {
                $date_slot += SocialPostDate::where('social_post_id', $post->id)->count();
            }

            $this->slots = $date_slot;
        }
        //End Slots
    }
    public $rules = [
        'teaserOriginalDraft.post_txt' => 'string',
        'teaserOriginalDraft.post_media' => 'string',
        'teaserOriginalDraft.course_id' => 'string',
        'post_photo' => 'string',
        'new_post_txt_val' => 'string'
    ];

    public function createOriginalDraft()
    {
        TeaserOriginalDraft::create($this->teaserOriginalDraft);
        $this->new_post = false;
        $this->original_drafts = TeaserOriginalDraft::where('course_id', $this->course_id)
            ->orderBy('id', 'desc')
            ->get();
        $this->teaserOriginalDraft['course_id'] = $this->course_id;
        $this->teaserOriginalDraft['post_txt'] = '';
        $this->teaserOriginalDraft['post_media'] = '';
        $this->txt = '';
    }

    public function deleteOriginalPost($postId)
    {
        TeaserOriginalDraft::findOrFail($postId)->delete();

        $this->getSlots();

        $this->original_drafts = TeaserOriginalDraft::where('course_id', $this->course_id)
            ->orderBy('id', 'desc')
            ->get();
    }
    public function addNewPostTemplete()
    {
        $this->new_post == true ? ($this->new_post = false) : ($this->new_post = true);
    }

    public function addSocialPost($post_id, $social_name)
    {
        if ($this->getSlots() < 20) {
            $social = SocialMedia::where('social_name', $social_name)->first();
            if ($social) {
                $teaser = TeaserSocialMedia::where('post_id', $post_id)
                    ->where('social_media_id', $social->id)
                    ->first();
                if ($teaser) {
                    SocialPostDate::where('social_post_id', $teaser->id)->delete();
                    $teaser->delete();
                } else {
                    TeaserSocialMedia::create([
                        'post_id' => $post_id,
                        'social_media_id' => $social->id
                    ]);
                }
            }
        }
        $this->getSlots();
    }

    public function socialPost($social_name)
    {
        //Swipe Post Preview
        $this->active_preview = $social_name;

        if ($social_name != 'original') {
            $this->edit_post_text = false;
        }
        $this->date_error = '';
    }

    public function updateSocialPublishDate($social_post_id)
    {
        $date = $this->social_publish_date;

        $checkDateExist = SocialPostDate::where('social_post_id', $social_post_id)
            ->where('publish_date', $date)
            ->first();
        if ($checkDateExist) {
            $this->date_error = 'exist';
        } else {
            $this->date_error = '';
        }
        if ($this->getSlots() < 20) {
            SocialPostDate::updateOrCreate(
                ['social_post_id' => $social_post_id, 'publish_date' => $date],
                [
                    'social_post_id' => $social_post_id,
                    'publish_date' => $date
                ]
            );

            $this->social_publish_date = '';
        }
        $this->getSlots();
    }
    public function deleteSocialDate($social_date_id)
    {
        SocialPostDate::find($social_date_id)->delete();

        $this->getSlots();
    }
    public function deleteSocialPost($social_id)
    {
        TeaserSocialMedia::find($social_id)->delete();
        $this->getSlots();
    }

    public function updatePostPhoto()
    {
        $teaser = $this->active_post;

        //Save Quiz File
        if ($this->post_photo) {
            $validate_arr = ['jpeg', 'jpg', 'png'];
            $image = $this->post_photo;
            $img_ext = strtolower($image->getClientOriginalExtension());
            if (in_array($img_ext, $validate_arr)) {
                //Delete old file
                Storage::disk('course_posts')->delete($teaser->post_media);
                $image_path = $this->post_photo->store('', ['disk' => 'course_posts']);
                $this->post_photo = $image_path;
                $teaser->update(['post_media' => $this->post_photo]);
                $this->edit_post_text = false;
            }
        }
        $this->post_photo = '';
    }

    public function activePost($id)
    {
        $this->active_post = TeaserOriginalDraft::find($id);
        $this->edit_post_text = true;
        $this->new_post_txt_val = $this->active_post->post_txt;
    }
    public function updatePostTXT()
    {
        $teaser = $this->active_post;
        $teaser->update(['post_txt' => $this->new_post_txt_val]);
        $this->edit_post_text = false;

        $this->original_drafts = TeaserOriginalDraft::where('course_id', $this->course_id)
            ->orderBy('id', 'desc')
            ->get();
    }

    public function createCourseSchedule($immediate_schedule)
    {
        if ($immediate_schedule) {
            $schedule_date = now();
            $this->schedule_date = '';
            $this->schedule_msg = 'The schedule is now created';
        } else {
            $schedule_date = $this->schedule_date;
            $this->schedule_msg = 'The schedule will be created on ' . $schedule_date;
        }

        Course::find($this->course_id)->update(['launch_at' => $schedule_date]);
    }
    public function render()
    {
        return view('livewire.publish-course');
    }
}
