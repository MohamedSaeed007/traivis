<?php

namespace App\Http\Livewire\Profile;

use App\Models\Category;
use App\Models\Country;
use App\Models\EducationInformation;
use App\Models\Industry;
use App\Models\Language;
use App\Models\SocialMedia;
use App\Models\SocilaMedia;
use App\Models\User;
use App\Models\UserCareerInformation;
use App\Models\WorkExperience;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class ProfileCard extends Component
{
    use WithFileUploads;

    public $user;
    public $education;
    public $neweducation;
    public $workExperiences;
    public $careerInformation;
    public $newWorkExperiences;
    public $profile_pic;
    public $cover_pic;
    public $selectedLanguages;
    public $selectedLanguagesname;
    public $deliverMode;
    public $categories;
    public $selectedCategories;
    public $selectedCategoriesnames;
    public $industries;
    public $selectedIndustries;
    public $selectedIndustriesnames;
    public $countries;
    public $languages;
    public $socilaMedia;
    public $rules = [
        // 'user.name' => 'required|string',
        'user.first_name' => 'required|string',
        'user.middle_name' => 'nullable|string',
        'user.last_name' => 'nullable|string',
        'user.gender' => 'nullable|string',
        'user.date_of_birth' => 'required|string',
        'user.timezone' => 'required|string',
        'user.country' => 'nullable|string',
        'user.city' => 'required_with:country|string',
        'user.phone' => 'nullable|string',
        'user.description' => 'nullable|string|max:160',
        'selectedLanguages' => 'nullable|array',
        'deliverMode' => 'nullable|string',
        'selectedIndustries' => 'nullable|array',
        'selectedCategories' => 'nullable|array',
        'profile_pic' => 'nullable|image',
        'cover_pic' => 'nullable|image',
        'education.*.name' =>
            'required_with:education.*.major,education.*.level,education.*.location|string',
        'education.*.major' =>
            'required_with:education.*.name,education.*.level,education.*.location|string',
        'education.*.level' => 'nullable|string',
        'education.*.location' => 'nullable|string',
        'neweducation.name' =>
            'required_with:neweducation.major,neweducation.level,neweducation.location|string',
        'neweducation.major' =>
            'required_with:neweducation.name,neweducation.level,neweducation.location|string',
        'neweducation.level' => 'nullable|string',
        'neweducation.location' => 'nullable|string',
        'workExperiences.*.employer_name' =>
            'required_with:workExperiences.*.employment_status,workExperiences.*.industry,workExperiences.*.experience|string',
        'workExperiences.*.employment_status' =>
            'required_with:workExperiences.*.employer_name,workExperiences.*.industry,workExperiences.*.experience|string',
        'workExperiences.*.industry' => 'nullable|string',
        'workExperiences.*.position' => 'nullable|string',
        'workExperiences.*.experience' => 'nullable|string',
        'workExperiences.*.location' => 'nullable|string',
        'workExperiences.*.url' => 'nullable|string',
        'workExperiences.*.start' => 'nullable|date',
        'workExperiences.*.end' => 'nullable|date',
        'newWorkExperiences.employer_name' =>
            'required_with:newWorkExperiences.employment_status,newWorkExperiences.industry,newWorkExperiences.experience|string',
        'newWorkExperiences.employment_status' =>
            'required_with:newWorkExperiences.employer_name,newWorkExperiences.industry,newWorkExperiences.experience|string',
        'newWorkExperiences.industry' => 'nullable|string',
        'newWorkExperiences.position' => 'nullable|string',
        'newWorkExperiences.experience' => 'nullable|string',
        'newWorkExperiences.location' => 'nullable|string',
        'newWorkExperiences.url' => 'nullable|string',
        'newWorkExperiences.start' => 'nullable|date',
        'newWorkExperiences.end' => 'nullable|date',
        'careerInformation.open_for_job' => 'nullable|boolean',
        'careerInformation.position' => 'nullable|string',
        'careerInformation.industry' => 'nullable|string',
        'careerInformation.skills' => 'nullable|string',
        'careerInformation.user_id' => 'nullable|integer',
        'socilaMedia.modelable_id' => 'nullable',
        'socilaMedia.modelable_type' => 'nullable',
        'socilaMedia.facebook' => 'nullable',
        'socilaMedia.twitter' => 'nullable',
        'socilaMedia.linkedin' => 'nullable',
        'socilaMedia.youtube' => 'nullable',
        'socilaMedia.whatsapp' => 'nullable',
        'socilaMedia.instagram' => 'nullable',
        'socilaMedia.pinterest' => 'nullable',
        'socilaMedia.snapchat' => 'nullable',
        'socilaMedia.vimeo' => 'nullable',
        'socilaMedia.telegram' => 'nullable',
    ];
    public array $timezones;
    protected $validationAttributes = [
        'education.*.name' => 'name',
        'education.*.major' => 'major',
        'education.*.level' => 'level',
        'education.*.location' => 'location',
        'workExperiences.*.employer_name' => 'employer name',
        'workExperiences.*.employment_status' => 'employment status',
        'workExperiences.*.industry' => 'industry',
        'workExperiences.*.position' => 'position',
        'workExperiences.*.experience' => 'experience',
        'workExperiences.*.location' => 'location',
        'workExperiences.*.url' => 'url',
        'workExperiences.*.start' => 'start Date',
        'workExperiences.*.end' => 'end Date',
    ];

    public function mount($id)
    {
        $this->user = User::with(['languages'])->find($id);
        $this->selectedLanguages = $this->user->languages->pluck('id')->toArray();
        $this->selectedLanguagesname = $this->user->languages->pluck('display_name')->toArray();
        $this->selectedIndustries = $this->user->industries->pluck('id')->toArray();
        $this->selectedIndustriesnames = $this->user->industries->pluck('en_name')->toArray();
        $this->selectedCategories = $this->user->categories->pluck('id')->toArray();
        $this->selectedCategoriesnames = $this->user->categories->pluck('category_name')->toArray();
        $this->deliverMode = $this->user->delivery_mode;
        $this->education = $this->user?->educationInformations;
        $this->workExperiences = $this->user?->workExperiences?->sortByDesc('id');
        $this->countries = Country::get();
        $this->languages = Language::all();
        $this->industries = Industry::all();
        $this->categories = Category::all();
        if ($this->user->careerInformation) {
            $this->careerInformation = $this->user->careerInformation;
        } else {
            $this->careerInformation = new UserCareerInformation();
            $this->careerInformation->user_id = (int) $id;
        }
        if ($this->user->socilaMedia) {
            $this->socilaMedia = $this->user->socilaMedia;
        } else {
            $this->socilaMedia = new SocilaMedia();
            $this->socilaMedia->modelable_id = $this->user->id;
            $this->socilaMedia->modelable_type = User::class;
        }

        $this->timezones = collect(timezone_identifiers_list())
            ->mapWithKeys(function ($tz) {
                return [$tz => str_replace('_', ' ', $tz)];
            })
            ->toArray();
    }
    public function updatedProfilePic($value)
    {
        if (!in_array($value->extension(), config('livewire.temporary_file_upload.preview_mimes'))) {
            $this->profile_pic = '';
            throw ValidationException::withMessages(['profile_pic' => 'must be image']);
        } else {
            $this->resetValidation('profile_pic');
        }
    }
    public function updatedCoverPic($value)
    {
        if (!in_array($value->extension(), config('livewire.temporary_file_upload.preview_mimes'))) {
            $this->cover_pic = '';
            throw ValidationException::withMessages(['cover_pic' => 'must be image']);
        } else {
            $this->resetValidation('cover_pic');
        }
    }
    public function AddMoreEducation()
    {
        $this->neweducation = new EducationInformation();
    }

    public function AddMorenewWorkExperiences()
    {
        $this->newWorkExperiences = new WorkExperience();
    }
    public function saveNewWorkExperience()
    {
        $this->validate([
            'newWorkExperiences.employer_name' =>
                'required_with:newWorkExperiences.employment_status,newWorkExperiences.industry,newWorkExperiences.experience|string',
            'newWorkExperiences.employment_status' =>
                'required_with:newWorkExperiences.employer_name,newWorkExperiences.industry,newWorkExperiences.experience|string',
            'newWorkExperiences.industry' => 'nullable|string',
            'newWorkExperiences.position' => 'nullable|string',
            'newWorkExperiences.experience' => 'nullable|string',
            'newWorkExperiences.location' => 'nullable|string',
            'newWorkExperiences.url' => 'nullable|string',
            'newWorkExperiences.start' => 'nullable|date',
            'newWorkExperiences.end' => 'nullable|date',
        ]);
        if ($this->newWorkExperiences) {
            $this->newWorkExperiences->user_id = auth()->id();
            $this->newWorkExperiences->save();
        }
        $this->workExperiences = $this->user
            ?->workExperiences()
            ->get()
            ->sortByDesc('id');
        $this->reset('newWorkExperiences');
        $this->newWorkExperiences = new WorkExperience();
    }

    public function save()
    {
        $this->validate();
        $this->user->name = $this->user->first_name . ' ' . $this->user->last_name;
        $this->user->save();
        if ($this->education->count() > 0) {
            foreach ($this->education as $educate) {
                $educate->save();
            }
        }

        if ($this->neweducation) {
            $this->neweducation->user_id = auth()->id();
            $this->neweducation->save();
        }
        if ($this->workExperiences->count() > 0) {
            foreach ($this->workExperiences as $workExperience) {
                $workExperience->save();
            }
        }

        if ($this->newWorkExperiences) {
            $this->newWorkExperiences->user_id = auth()->id();
            $this->newWorkExperiences->save();
        }
        if ($this->profile_pic) {
            //            $imageName = uniqid();
            //            $this->user->profile_pic = '/users/images/' . $imageName . '.' . $this->profile_pic->extension();
            //            $this->user->save();
            //            $img = Image::make($this->profile_pic);
            //            $img->save('users/images/' . $imageName . '.' . $this->profile_pic->extension());

            if ($this->user->hasMedia()) {
                if ($this->user->hasMedia()) {
                    $this->user->getFirstMedia()->delete();
                }
            }
            $this->user
                ->addMedia($this->profile_pic->getRealPath())
                ->preservingOriginal()
                ->toMediaCollection();
        }
        // if ($this->cover_pic)
        // {
        //     $imageName = uniqid();
        //     $this->user->cover_pic = '/users/images/'.$imageName.'.'.$this->cover_pic->extension();
        //     $this->user->save();
        //     $img =Image::make($this->cover_pic);
        //     $img->save('users/images/'.$imageName.'.'.$this->cover_pic->extension());
        // }
        if ($this->careerInformation->position) {
            $this->careerInformation->save();
        }
        $this->user->languages()->sync($this->selectedLanguages);
        $this->user->industries()->sync($this->selectedIndustries);
        $this->user->delivery_mode = $this->deliverMode;
        $this->user->save();

        $this->socilaMedia->save();
        return redirect(route('user-profile-social', auth()->id()));
    }

    public function saveNewEducation()
    {
        $this->validate([
            'neweducation.name' =>
                'required_with:neweducation.major,neweducation.level,neweducation.location|string',
            'neweducation.major' =>
                'required_with:neweducation.name,neweducation.level,neweducation.location|string',
            'neweducation.level' => 'nullable|string',
            'neweducation.location' => 'nullable|string',
        ]);
        if ($this->neweducation) {
            $this->neweducation->user_id = auth()->id();
            $this->neweducation->save();
        }
        $this->education = $this->user?->educationInformations()->get();
        $this->reset('neweducation');
        $this->neweducation = new EducationInformation();
    }

    public function render()
    {
        if (auth()->id() == $this->user->id) {
            $this->dispatchBrowserEvent('refresh-event');
            return view('livewire.profile.profile-card');
        } else {
            return view('livewire.profile.profile-card-for-public');
        }
    }
}
