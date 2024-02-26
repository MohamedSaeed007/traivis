<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\TeaserOriginalDraft;
use Livewire\Component;

class TeaserCampaignModalBtn extends Component
{
    public $course_id;
    public $course;
    public $stats;

    public function mount()
    {
        $this->course = Course::find($this->course_id);
        $this->updateStats();
    }
    public function updateStats()
    {
        $originalDrafts = TeaserOriginalDraft::where('course_id', $this->course_id)
            // ->whereRelation('socialPosts', 'social_media_id', 2)
            ->withCount([
                'socialDates as facebook_in_progress_dates' => function ($query) {
                    $query->whereRelation('teaserSocialMedia', 'social_media_id', 2);
                    $query->where('status', 'in_progress');
                },
                'socialDates as facebook_published_dates' => function ($query) {
                    $query->whereRelation('teaserSocialMedia', 'social_media_id', 2);
                    $query->where('status', 'published');
                },
                'socialDates as facebook_declined_dates' => function ($query) {
                    $query->whereRelation('teaserSocialMedia', 'social_media_id', 2);
                    $query->where('status', 'declined');
                },
                'socialDates as pinterest_in_progress_dates' => function ($query) {
                    $query->whereRelation('teaserSocialMedia', 'social_media_id', 6);
                    $query->where('status', 'in_progress');
                },
                'socialDates as pinterest_published_dates' => function ($query) {
                    $query->whereRelation('teaserSocialMedia', 'social_media_id', 6);
                    $query->where('status', 'published');
                },
                'socialDates as pinterest_declined_dates' => function ($query) {
                    $query->whereRelation('teaserSocialMedia', 'social_media_id', 6);
                    $query->where('status', 'declined');
                },
                'socialDates as linkedin_in_progress_dates' => function ($query) {
                    $query->whereRelation('teaserSocialMedia', 'social_media_id', 7);
                    $query->where('status', 'in_progress');
                },
                'socialDates as linkedin_published_dates' => function ($query) {
                    $query->whereRelation('teaserSocialMedia', 'social_media_id', 7);
                    $query->where('status', 'published');
                },
                'socialDates as linkedin_declined_dates' => function ($query) {
                    $query->whereRelation('teaserSocialMedia', 'social_media_id', 7);
                    $query->where('status', 'declined');
                }
            ])
            ->get();
        $this->stats['facebook']['waiting'] = $originalDrafts->sum('facebook_in_progress_dates');
        $this->stats['facebook']['published'] = $originalDrafts->sum('facebook_published_dates');
        $this->stats['facebook']['declined'] = $originalDrafts->sum('facebook_declined_dates');
        $this->stats['pinterest']['waiting'] = $originalDrafts->sum('pinterest_in_progress_dates');
        $this->stats['pinterest']['published'] = $originalDrafts->sum('pinterest_published_dates');
        $this->stats['pinterest']['declined'] = $originalDrafts->sum('pinterest_declined_dates');
        $this->stats['linkedin']['waiting'] = $originalDrafts->sum('linkedin_in_progress_dates');
        $this->stats['linkedin']['published'] = $originalDrafts->sum('linkedin_published_dates');
        $this->stats['linkedin']['declined'] = $originalDrafts->sum('linkedin_declined_dates');
    }

    public function render()
    {
        return view('livewire.teaser-campaign-modal-btn');
    }
}
