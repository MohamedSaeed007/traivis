<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Models\Course;
use App\Models\Section;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
class SectionComponent extends ModalComponent
{
    public $section;
    public $course;

    public $rules=[
      'section.section_name'=>'string'
    ];

    public function mount(Course $course)
    {
        $this->course=$course;
//        dd($this->course);
        $this->section=new Section();
    }

    public function addSection()
    {
        Section::create([
            'course_id' => $this->course->id,
            'section_name'=>$this->section->section_name,
            'section_type' => 1,
        ]);
        $this->sections=Section::where('course_id',$this->course->id)->get();
    }

    public function render()
    {
        return view('livewire.section-component');
    }
    public static function modalMaxWidth(): string
    {
        return 'xl';
    }
}
