<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\InfluencerCampaign;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InfluencerCampModal extends Component
{
    public InfluencerCampaign $influencerCampaignNew;
    protected $listeners = ['openCampModal'];
    public $course_id;
    public $modalCourse;
    public $tOpen = false;
    public $activeValidation = false;
    public $influencerCampaigns;

    public function rules()
    {
        return [
            'influencerCampaignNew.commission' => 'required',
            'influencerCampaignNew.student_discount' => 'required',
            'influencerCampaignNew.offer_end_date' => 'required|date|after:now',
        ];
    }
    public function openCampModal($course_id)
    {
        $this->tOpen = true;
        $this->course_id = $course_id['course_id'];
        $this->modalCourse = Course::where('id', $this->course_id)->first();
        $this->influencerCampaigns = InfluencerCampaign::with('influencerOffers')->where('course_id', $this->course_id)->get();
    }

    public function storeCampaign()
    {
        $this->validate();
        $alreadyActive =  InfluencerCampaign::where('course_id', $this->modalCourse->id)->whereNull('end_date')->count();

        if (!empty($alreadyActive)) {
            $this->activeValidation = 'Already Have a active Campaign!';
            return false;
        }
        $this->activeValidation = false;

        if ($this->influencerCampaigns->count() < 3) {
            $this->influencerCampaignNew->user_id = Auth::id();
            $this->influencerCampaignNew->course_id = $this->modalCourse->id;
            $this->influencerCampaignNew->status = InfluencerCampaign::STATUS['active'];
            $this->influencerCampaignNew->save();
            $this->influencerCampaigns->push($this->influencerCampaignNew);
        }

        $this->influencerCampaignNew = new InfluencerCampaign;
    }

    public function endCampaign($id)
    {
        $campaign = InfluencerCampaign::where('id', $id)->first();
        if (!empty($campaign)) {
            $this->influencerCampaigns = $this->influencerCampaigns->map(function ($element) use ($campaign) {
                if ($campaign->id == $element->id) {
                    $element->end_date = Carbon::now()->addWeek()->format('Y-m-d');
                }
                return $element;
            });
            $campaign->end_date = Carbon::now()->addWeek()->format('Y-m-d');
            $campaign->save();
        }
    }

    public function openTeaserCampaignModal()
    {
        $this->tOpen = false;
        $this->emitTo('publish-course-teaser-campaign', 'openModal', ['course_id' => $this->course_id]);
    }
    public function render()
    {
        return view('livewire.influencer-camp-modal');
    }

    public function mount()
    {
        $this->influencerCampaignNew = new InfluencerCampaign;
    }
}
