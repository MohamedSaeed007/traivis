<?php

namespace App\Http\Livewire;

use App\Models\Section;
use Livewire\Component;

class EditSection extends Component
{
    public $section;
    public $course;
    public $rules=[
      'section.section_name'=>'string'
    ];

    public function EditSection()
    {
        $this->section->update(['section_name' => $this->section->section_name]);
    }

    public function render()
    {
        return view('livewire.edit-section');
    }
}
