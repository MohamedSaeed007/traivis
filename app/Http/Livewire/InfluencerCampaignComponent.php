<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class InfluencerCampaignComponent extends ModalComponent
{
    public $course_id;
    public $openModal;
    public $course;
    protected $listeners = ['openModal'];

    public function openModal($id = null)
    {
        if ($id && is_string($id)) {
            return;
        }
        $this->course_id = $id;
        if ($this->course_id) {
            $this->course = Course::findOrFail($this->course_id);
        }
        $this->openModal = true;
    }

    public function render()
    {
        return view('livewire.influencer-campaign-component');
    }
}