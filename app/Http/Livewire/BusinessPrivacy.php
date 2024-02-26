<?php

namespace App\Http\Livewire;

use App\Models\Business;
use Livewire\Component;
use App\Models\BusinessAppSetting;
use App\Models\BusinessEducationInfo;
use App\Models\BusinessFollow;
use App\Models\BusinessProfessionalInformation;
use App\Models\BusinessWorkExperience;
use App\Models\Category;
use App\Models\Country;
use App\Models\Industry;
use App\Models\SocilaMedia;
use App\Models\User;

class BusinessPrivacy extends Component
{
    public $business;
    public $blocked = [];

    public ?bool $private_space;
    public ?string $private_space_link;
    public ?bool $restrict_comments;
    public ?bool $restrict_tagging;
    public ?bool $traivis_algorithms;

    public ?bool $show_analytics_public;
    public ?bool $show_analytics_followers;
    public ?bool $show_analytics_me;

    public ?bool $business_environment_public;
    public ?bool $business_environment_followers;
    public ?bool $business_environment_me;

    public ?bool $rewards_deals_public;
    public ?bool $rewards_deals_followers;
    public ?bool $rewards_deals_me;

    public ?bool $followers_visibility_public;
    public ?bool $followers_visibility_followers;
    public ?bool $followers_visibility_me;

    public ?bool $message_ability_public;
    public ?bool $message_ability_followers;
    public ?bool $message_ability_me;

    public ?bool $notes_visibility_public;
    public ?bool $notes_visibility_followers;
    public ?bool $notes_visibility_me;

    public ?bool $hint_visibility_public;
    public ?bool $hint_visibility_followers;
    public ?bool $hint_visibility_me;

    public ?bool $blog_visibility_public;
    public ?bool $blog_visibility_followers;
    public ?bool $blog_visibility_me;

    public $rolesAndPermissions = [];
    public $businessModel;
    public $businessCategories = [];
    public $businessIndustries = [];
    public $categories;
    public $industries;
    public $countries;
    public $profileInformation;
    public $education;
    public $neweducation;
    public $workExperiences;
    public $newWorkExperiences;
    public $socilaMedia;

    public $rules = [
        'private_space' => 'string',
        'restrict_comments' => 'string',
        'businessModel.business_name' => 'nullable|string|max:80',
        'businessModel.description' => 'nullable|string|max:155',
        'businessModel.business_email' => 'nullable|email',
        'businessModel.business_phone_one' => 'nullable|string',
        'businessModel.country_id' => 'nullable|numeric',
        'businessModel.city' => 'nullable|string',
        'businessCategories' => 'nullable|array',
        'businessIndustries' => 'nullable|array',
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
        'profileInformation.is_freelancer' => 'nullable|boolean',
        'profileInformation.show_email' => 'nullable|boolean',
        'profileInformation.show_phone' => 'nullable|boolean',
        'profileInformation.industry' => 'nullable|string',
        'profileInformation.teaching_years' => 'nullable|integer',
        'profileInformation.preferred_languages' => 'nullable|string',
        'profileInformation.preferred_subjects' => 'nullable|string',
        'profileInformation.preferred_teaching_mode' => 'nullable|string',
        'profileInformation.teaching_hourly_rate' => 'nullable|string',
        'profileInformation.personal_website' => 'nullable|string',
        'profileInformation.asscoited_link' => 'nullable|string',
        'profileInformation.accerditions' => 'nullable|string',
        'profileInformation.business_id' => 'nullable',
        'newWorkExperiences.business_id' => 'nullable',
        'neweducation.business_id' => 'nullable',
        'socilaMedia.modelable_type' => 'nullable',
        'socilaMedia.modelable_id' => 'nullable',
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
    protected $validationAttributes = [
        'education.*.name' => 'name',
        'education.*.major' => 'major',
        'education.*.level' => 'level',
        'education.*.location' => 'location',
        'neweducation.name' => 'name',
        'neweducation.major' => 'major',
        'neweducation.level' => 'level',
        'neweducation.location' => 'location',
        'workExperiences.*.employer_name' => 'employer name',
        'workExperiences.*.employment_status' => 'employment status',
        'workExperiences.*.industry' => 'industry',
        'workExperiences.*.position' => 'position',
        'workExperiences.*.experience' => 'experience',
        'workExperiences.*.location' => 'location',
        'workExperiences.*.url' => 'url',
        'workExperiences.*.start' => 'start date',
        'workExperiences.*.end' => 'end date',
        'newWorkExperiences.employer_name' => 'employer name',
        'newWorkExperiences.employment_status' => 'employment status',
        'newWorkExperiences.industry' => 'industry',
        'newWorkExperiences.position' => 'position',
        'newWorkExperiences.experience' => 'experience',
        'newWorkExperiences.location' => 'location',
        'newWorkExperiences.url' => 'url',
        'newWorkExperiences.start' => 'start date',
        'newWorkExperiences.end' => 'end date',
    ];

    public function mount()
    {
        $this->business = session('business_id');

        //0-1
        $this->private_space = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'private_space')
            ->first()->value;
        $this->private_space_link = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'private_space')
            ->first()->private_link;

        $this->restrict_comments = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'restrict_comments')
            ->first()->value;

        $this->restrict_tagging = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'restrict_tagging')
            ->first()->value;

        $this->traivis_algorithms = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'traivis_algorithms')
            ->first()->value;

        //public-followers-me
        $show_analytics = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'show_analytics')
            ->first()->value;
        if ($show_analytics == 'public') {
            $this->show_analytics_public = 1;
            $this->show_analytics_followers = 0;
            $this->show_analytics_me = 0;
        } elseif ($show_analytics == 'followers') {
            $this->show_analytics_followers = 1;
            $this->show_analytics_public = 0;
            $this->show_analytics_me = 0;
        } elseif ($show_analytics == 'me') {
            $this->show_analytics_me = 1;
            $this->show_analytics_followers = 0;
            $this->show_analytics_public = 0;
        }

        $business_environment = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'business_environment')
            ->first()->value;

        if ($business_environment == 'public') {
            $this->business_environment_public = 1;
            $this->business_environment_followers = 0;
            $this->business_environment_me = 0;
        } elseif ($business_environment == 'followers') {
            $this->business_environment_followers = 1;
            $this->business_environment_public = 0;
            $this->business_environment_me = 0;
        } elseif ($business_environment == 'me') {
            $this->business_environment_me = 1;
            $this->business_environment_followers = 0;
            $this->business_environment_public = 0;
        }

        $followers_visibility = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'followers_visibility')
            ->first()->value;

        if ($followers_visibility == 'public') {
            $this->followers_visibility_public = 1;
            $this->followers_visibility_followers = 0;
            $this->followers_visibility_me = 0;
        } elseif ($followers_visibility == 'followers') {
            $this->followers_visibility_followers = 1;
            $this->followers_visibility_public = 0;
            $this->followers_visibility_me = 0;
        } elseif ($followers_visibility == 'me') {
            $this->followers_visibility_me = 1;
            $this->followers_visibility_followers = 0;
            $this->followers_visibility_public = 0;
        }

        $message_ability = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'message_ability')
            ->first()->value;

        if ($message_ability == 'public') {
            $this->message_ability_public = 1;
            $this->message_ability_followers = 0;
            $this->message_ability_me = 0;
        } elseif ($message_ability == 'followers') {
            $this->message_ability_followers = 1;
            $this->message_ability_public = 0;
            $this->message_ability_me = 0;
        } elseif ($message_ability == 'me') {
            $this->message_ability_me = 1;
            $this->message_ability_followers = 0;
            $this->message_ability_public = 0;
        }

        $notes_visibility = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'notes_visibility')
            ->first()->value;

        if ($notes_visibility == 'public') {
            $this->notes_visibility_public = 1;
            $this->notes_visibility_followers = 0;
            $this->notes_visibility_me = 0;
        } elseif ($notes_visibility == 'followers') {
            $this->notes_visibility_followers = 1;
            $this->notes_visibility_public = 0;
            $this->notes_visibility_me = 0;
        } elseif ($notes_visibility == 'me') {
            $this->notes_visibility_me = 1;
            $this->notes_visibility_followers = 0;
            $this->notes_visibility_public = 0;
        }
        $hint_visibility = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'hint_visibility')
            ->first()->value;

        if ($hint_visibility == 'public') {
            $this->hint_visibility_public = 1;
            $this->hint_visibility_followers = 0;
            $this->hint_visibility_me = 0;
        } elseif ($hint_visibility == 'followers') {
            $this->hint_visibility_followers = 1;
            $this->hint_visibility_public = 0;
            $this->hint_visibility_me = 0;
        } elseif ($hint_visibility == 'me') {
            $this->hint_visibility_me = 1;
            $this->hint_visibility_followers = 0;
            $this->hint_visibility_public = 0;
        }
        $blog_visibility = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'blog_visibility')
            ->first()->value;

        if ($blog_visibility == 'public') {
            $this->blog_visibility_public = 1;
            $this->blog_visibility_followers = 0;
            $this->blog_visibility_me = 0;
        } elseif ($blog_visibility == 'followers') {
            $this->blog_visibility_followers = 1;
            $this->blog_visibility_public = 0;
            $this->blog_visibility_me = 0;
        } elseif ($blog_visibility == 'me') {
            $this->blog_visibility_me = 1;
            $this->blog_visibility_followers = 0;
            $this->blog_visibility_public = 0;
        }

        $rewards_deals = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'rewards_deals')
            ->first()->value;

        if ($rewards_deals == 'public') {
            $this->rewards_deals_public = 1;
            $this->rewards_deals_followers = 0;
            $this->rewards_deals_me = 0;
        } elseif ($rewards_deals == 'followers') {
            $this->rewards_deals_followers = 1;
            $this->rewards_deals_public = 0;
            $this->rewards_deals_me = 0;
        } elseif ($rewards_deals == 'me') {
            $this->rewards_deals_me = 1;
            $this->rewards_deals_followers = 0;
            $this->rewards_deals_public = 0;
        }
        $this->businessModel = Business::find(session('business_id'));
        if ($this->businessModel->business_type == 'enterprise') {
            $this->rolesAndPermissions = [
                'contractor_manger' => require base_path('database/permissions/contractor.php'),
                'training_manager' => require base_path('database/permissions/trainingManager.php'),
                'bidding_manager' => require base_path('database/permissions/biddingManager.php'),
                'project_manager' => require base_path('database/permissions/projectManager.php'),
                'internal_instracture' => require base_path(
                    'database/permissions/internalInstracture.php',
                ),
            ];
        } elseif ($this->businessModel->business_type == 'instructor') {
        } elseif ($this->businessModel->business_type == 'institute') {
        }
        $this->categories = Category::get(['id', 'category_name']);
        $this->industries = Industry::get(['id', 'en_name']);
        $this->businessCategories = $this->businessModel->categories->pluck('id');
        $this->businessIndustries = $this->businessModel->industries->pluck('id');
        $this->countries = Country::get();
        $this->education = $this->businessModel?->educationInfos;
        $this->workExperiences = $this->businessModel?->workExperiences?->sortByDesc('id');
        if ($this->businessModel?->professionalInformation) {
            $this->profileInformation = $this->businessModel?->professionalInformation;
        } else {
            $this->profileInformation = new BusinessProfessionalInformation();
            $this->profileInformation->business_id = session('business_id');
            $this->profileInformation->is_freelancer = 1;
            $this->profileInformation->show_email = 0;
            $this->profileInformation->show_phone = 0;
        }
        if ($this->businessModel?->socilaMedia) {
            $this->socilaMedia = $this->businessModel?->socilaMedia;
        } else {
            $this->socilaMedia = new SocilaMedia();
            $this->socilaMedia->modelable_id = session('business_id');
            $this->socilaMedia->modelable_type = Business::class;
        }
        if ($this->businessModel?->workExperiences->count() == 0) {
            $this->AddMoreEducation();
        }
        if ($this->businessModel?->workExperiences->count() == 0) {
            $this->AddMorenewWorkExperiences();
        }
        $this->blocked = BusinessFollow::where('business_id', session('business_id'))
            ->where('is_blocked', 1)
            ->with(['user'])
            ->get();
    }

    public function AddMoreEducation()
    {
        $this->neweducation = new BusinessEducationInfo();
    }

    public function AddMorenewWorkExperiences()
    {
        $this->newWorkExperiences = new BusinessWorkExperience();
    }

    public function updatedBusinessModel()
    {
        $this->validate([
            'businessModel.business_name' => 'nullable|string|max:80',
            'businessModel.description' => 'nullable|string|max:155',
            'businessModel.business_email' => 'nullable|email',
            'businessModel.business_phone_one' => 'nullable|string',
            'businessModel.country_id' => 'nullable|numeric',
            'businessModel.city' => 'nullable|string',
        ]);
        $this->businessModel->save();
    }

    public function updatedProfileInformation()
    {
        $this->profileInformation->save();
    }

    public function updatedBusinessCategories()
    {
        $this->businessModel->categories()->sync($this->businessCategories);
    }

    public function updatedBusinessIndustries()
    {
        $this->businessModel->industries()->sync($this->businessIndustries);
    }

    public function updatePrivacySpace()
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'private_space')
            ->first();
        $this->private_space = $getKey->value == 1 ? 0 : 1;
        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'private_space')
            ->update([
                'value' => $this->private_space,
            ]);
    }

    public function updateRestrictComment()
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'restrict_comments')
            ->first();
        $this->restrict_comments = $getKey->value == 1 ? 0 : 1;
        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'restrict_comments')
            ->update([
                'value' => $this->restrict_comments,
            ]);
    }

    public function updateRestrictTagging()
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'restrict_tagging')
            ->first();
        $this->restrict_tagging = $getKey->value == 1 ? 0 : 1;
        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'restrict_tagging')
            ->update([
                'value' => $this->restrict_tagging,
            ]);
    }

    public function updateShowAnalytics($type)
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'show_analytics')
            ->first();

        if ($type == 'public') {
            $value = $getKey->value == 'public' ? null : 'public';
            $this->show_analytics_followers = 0;
            $this->show_analytics_me = 0;
        } elseif ($type == 'followers') {
            $value = $getKey->value == 'followers' ? null : 'followers';
            $this->show_analytics_public = 0;
            $this->show_analytics_me = 0;
        } elseif ($type == 'me') {
            $value = $getKey->value == 'me' ? null : 'me';
            $this->show_analytics_followers = 0;
            $this->show_analytics_public = 0;
        }

        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'show_analytics')
            ->update([
                'value' => $value,
            ]);
    }

    public function updateBusinessEnvironment($type)
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'business_environment')
            ->first();

        if ($type == 'public') {
            $value = $getKey->value == 'public' ? null : 'public';
            $this->business_environment_followers = 0;
            $this->business_environment_me = 0;
        } elseif ($type == 'followers') {
            $value = $getKey->value == 'followers' ? null : 'followers';
            $this->business_environment_public = 0;
            $this->business_environment_me = 0;
        } elseif ($type == 'me') {
            $value = $getKey->value == 'me' ? null : 'me';
            $this->business_environment_followers = 0;
            $this->business_environment_public = 0;
        }

        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'business_environment')
            ->update([
                'value' => $value,
            ]);
    }

    public function updateRewardsDeals($type)
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'rewards_deals')
            ->first();

        if ($type == 'public') {
            $value = $getKey->value == 'public' ? null : 'public';
            $this->rewards_deals_followers = 0;
            $this->rewards_deals_me = 0;
        } elseif ($type == 'followers') {
            $value = $getKey->value == 'followers' ? null : 'followers';
            $this->rewards_deals_public = 0;
            $this->rewards_deals_me = 0;
        } elseif ($type == 'me') {
            $value = $getKey->value == 'me' ? null : 'me';
            $this->rewards_deals_followers = 0;
            $this->rewards_deals_public = 0;
        }

        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'rewards_deals')
            ->update([
                'value' => $value,
            ]);
    }

    public function updateFollowersVisibility($type)
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'followers_visibility')
            ->first();

        if ($type == 'public') {
            $value = $getKey->value == 'public' ? null : 'public';
            $this->followers_visibility_followers = 0;
            $this->followers_visibility_me = 0;
        } elseif ($type == 'followers') {
            $value = $getKey->value == 'followers' ? null : 'followers';
            $this->followers_visibility_public = 0;
            $this->followers_visibility_me = 0;
        } elseif ($type == 'me') {
            $value = $getKey->value == 'me' ? null : 'me';
            $this->followers_visibility_followers = 0;
            $this->followers_visibility_public = 0;
        }

        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'followers_visibility')
            ->update([
                'value' => $value,
            ]);
    }

    public function updateMessageAbility($type)
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'message_ability')
            ->first();

        if ($type == 'public') {
            $value = $getKey->value == 'public' ? null : 'public';
            $this->message_ability_followers = 0;
            $this->message_ability_me = 0;
        } elseif ($type == 'followers') {
            $value = $getKey->value == 'followers' ? null : 'followers';
            $this->message_ability_public = 0;
            $this->message_ability_me = 0;
        } elseif ($type == 'me') {
            $value = $getKey->value == 'me' ? null : 'me';
            $this->message_ability_followers = 0;
            $this->message_ability_public = 0;
        }

        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'message_ability')
            ->update([
                'value' => $value,
            ]);
    }

    public function updateNotesVisibility($type)
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'notes_visibility')
            ->first();

        if ($type == 'public') {
            $value = $getKey->value == 'public' ? null : 'public';
            $this->notes_visibility_followers = 0;
            $this->notes_visibility_me = 0;
        } elseif ($type == 'followers') {
            $value = $getKey->value == 'followers' ? null : 'followers';
            $this->notes_visibility_public = 0;
            $this->notes_visibility_me = 0;
        } elseif ($type == 'me') {
            $value = $getKey->value == 'me' ? null : 'me';
            $this->notes_visibility_followers = 0;
            $this->notes_visibility_public = 0;
        }

        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'notes_visibility')
            ->update([
                'value' => $value,
            ]);
    }

    public function updateHintsVisibility($type)
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'hint_visibility')
            ->first();

        if ($type == 'public') {
            $value = $getKey->value == 'public' ? null : 'public';
            $this->hint_visibility_followers = 0;
            $this->hint_visibility_me = 0;
        } elseif ($type == 'followers') {
            $value = $getKey->value == 'followers' ? null : 'followers';
            $this->hint_visibility_public = 0;
            $this->hint_visibility_me = 0;
        } elseif ($type == 'me') {
            $value = $getKey->value == 'me' ? null : 'me';
            $this->hint_visibility_followers = 0;
            $this->hint_visibility_public = 0;
        }

        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'hint_visibility')
            ->update([
                'value' => $value,
            ]);
    }

    public function updateBlogVisibility($type)
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'blog_visibility')
            ->first();

        if ($type == 'public') {
            $value = $getKey->value == 'public' ? null : 'public';
            $this->blog_visibility_followers = 0;
            $this->blog_visibility_me = 0;
        } elseif ($type == 'followers') {
            $value = $getKey->value == 'followers' ? null : 'followers';
            $this->blog_visibility_public = 0;
            $this->blog_visibility_me = 0;
        } elseif ($type == 'me') {
            $value = $getKey->value == 'me' ? null : 'me';
            $this->blog_visibility_followers = 0;
            $this->blog_visibility_public = 0;
        }

        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'blog_visibility')
            ->update([
                'value' => $value,
            ]);
    }

    public function updateTraivisAlgorithm()
    {
        $getKey = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'traivis_algorithms')
            ->first();
        $this->traivis_algorithms = $getKey->value == 1 ? 0 : 1;
        BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'traivis_algorithms')
            ->update([
                'value' => $this->traivis_algorithms,
            ]);
    }

    public function updatedWorkExperiences()
    {
        foreach ($this->workExperiences as $workExperience) {
            $workExperience->save();
        }
    }

    public function updatedEducation()
    {
        foreach ($this->education as $educate) {
            $educate->save();
        }
    }

    public function updatedNeweducation()
    {
        $this->neweducation->business_id = session('business_id');
        $this->neweducation->save();
        $this->reset('neweducation');
        $this->education = $this->businessModel?->educationInfos()->get();
    }

    public function updatedNewWorkExperiences()
    {
        $this->newWorkExperiences->business_id = session('business_id');
        $this->newWorkExperiences->save();
        $this->reset('newWorkExperiences');
        $this->workExperiences = $this->businessModel
            ?->workExperiences()
            ->get()
            ?->sortByDesc('id');
    }

    public function updatedSocilaMedia()
    {
        $this->socilaMedia->save();
    }

    public function CopyPrivateSpaceLink()
    {
        $setting = BusinessAppSetting::where('business_id', $this->business)
            ->where('key', 'private_space')
            ->first();
        if ($setting->private_link == null) {
            $setting->private_link = substr(sha1(time()), 0, 30);
            $setting->save();
        }
        $this->private_space_link = $setting->private_link;
        $this->emit(
            'copyToClipBoard',
            route('business-profile-social', [
                'id' => $this->business,
                'private' => $setting->private_link,
            ]),
        );
    }
    public function importEducational()
    {
        $educations = auth()->user()->educationInformations;
        if (count($educations)) {
            $data = $educations->map(function ($item) {
                $item->business_id = $this->businessModel->id;
                return $item->only(['name', 'major', 'level', 'location', 'business_id']);
            });
            // dd($data->toArray());
            BusinessEducationInfo::upsert($data->toArray(), ['name']);
            $this->education = $this->businessModel?->educationInfos()->get();
        }
    }
    public function importWork()
    {
        $works = auth()->user()->workExperiences;
        if (count($works)) {
            $data = $works->map(function ($item) {
                $item->business_id = $this->businessModel->id;
                return $item->only([
                    'employer_name',
                    'employment_status',
                    'industry',
                    'position',
                    'experience',
                    'location',
                    'url',
                    'start',
                    'end',
                    'business_id',
                ]);
            });
            // dd($data->toArray());
            BusinessWorkExperience::upsert($data->toArray(), ['employer_name']);
            $this->workExperiences = $this->businessModel
                ?->workExperiences()
                ->get()
                ?->sortByDesc('id');
        }
    }
    public function unblock($id)
    {
        $follow = BusinessFollow::findOrFail($id);
        $follow->is_blocked = 0;
        $follow->save();
        $this->blocked = BusinessFollow::where('business_id', session('business_id'))
            ->where('is_blocked', 1)
            ->with(['user'])
            ->get();
    }
    public function render()
    {
        setPermissionsTeamId(session('business_id'));
        if ($this->businessModel->business_type == 'enterprise') {
            $users = User::whereHas('roles', function ($query) {
                $query
                    ->whereIn('name', array_keys($this->rolesAndPermissions))
                    ->where('social_model_has_roles.business_id', session('business_id'));
            })
                ->with(['roles'])
                ->get();
        } elseif ($this->businessModel->business_type == 'instructor') {
            $users = [];
        } elseif ($this->businessModel->business_type == 'institute') {
            $users = [];
        }
        return view('livewire.business-privacy', compact('users'));
    }
}
