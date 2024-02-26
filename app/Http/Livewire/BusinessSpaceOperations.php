<?php

namespace App\Http\Livewire;

use App\Mail\BusinessSpaceEmailVerification;
use App\Models\Business;
use App\Models\BusinessAppSetting;
use App\Models\BusinessFollow;
use App\Models\Category;
use App\Models\Industry;
use App\Models\Language;
use App\Models\Plan;
use App\Models\Transaction;
use App\Models\User;
use Aws\Credentials\Credentials;
use Aws\Sns\SnsClient;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use LucasDotVin\Soulbscription\Models\Feature;

class BusinessSpaceOperations extends Component
{
    use WithFileUploads;

    public $disableBackButton = 0;
    public $business;
    public $features;
    public $plans;
    public $enterprise_plan;
    public $spaceDetails = [];
    public $step, $navTab;
    public $SpaceName, $SpaceDescription, $SpaceWebsite, $step2_error_msg; //step 2 data
    public $course_categories = [], $course_industries = [], $course_languages = [], $step3_error_msg; //step 3 data
    public $contact_full_name, $contact_email, $contact_phone, $step4_error_msg; //step 4 data
    public $business_link; //step 5 data
    public $contact_email_code, $contact_phone_code, $correct_contact_phone_code, $correct_contact_email_code;
    public $sent_phone_verification, $sent_email_verification;
    public $categories, $industries, $languages;
    public $avatar;
    public $showPreviewImage = 1;

    protected $messages = [
        'contact_email_code.in' => 'The contact email code is wrong',
    ];

    /*protected function rules()
    {
        if ($this->step = 2) {
            $validate = [
                'avatar' => 'nullable|image|mimes:png,jpg,jpeg',
                'SpaceName' => 'required',
                'SpaceDescription' => 'required',
                'SpaceWebsite' => 'required',
            ];
        }
        if ($this->step = 3) {
            $validate = [
                'course_categories' => 'required|array|min:1',
                'course_industries' => 'required|array|min:1',
                'course_languages' => 'required|array|min:1',
            ];
        }
        return $validate;
    }*/

    public function updatedAvatar($value)
    {
//        $this->validateOnly($value);
        if ($value instanceof TemporaryUploadedFile) {
            $mimeType = $value->getMimeType();
            if (strpos($mimeType, 'image/') === 0) {
                $this->showPreviewImage = 1;
            } else {
                $this->showPreviewImage = 0;
            }
        }
    }

    public
    function mount()
    {
        $this->business = auth()->user()->businesses()->where('business_type', 'instructor')->first();
//        dd($this->business);
        $this->sent_email_verification = null;
        $this->sent_phone_verification = null;
        $this->step = 2;
        $this->spaceDetails['space_type'] = 'instructor';
        $this->categories = Category::all();
        $this->industries = Industry::all();
        $this->languages = Language::all();
    }


    public
    function goToProfile($id)
    {
        return redirect(route('business-profile-social', $id));
    }

    public
    function goToDashboard($id)
    {
        session(['business_id' => $id]);
        return redirect(route('instructor-dashboard'));
    }

    public
    function NavTab($type)
    {
        $this->navTab = $type;
    }

    public
    function chooseSpaceType($type)
    {
        $this->spaceDetails['space_type'] = $type;
        $this->enterprise_plan = "1";
        $this->step = 1;
        if ($type == "Confirminstructor") {
            $this->spaceDetails['space_type'] = substr($type, -10);
            $this->step = 2;
        } elseif ($type == "Confirminstitute") {
            $this->spaceDetails['space_type'] = substr($type, -9);
            $this->step = 2;
        }

        if ($type = 'enterprise') {
            $this->business = auth()->user()->businesses()->where('business_type', 'enterprise')->first();
            if ($this->business && $this->business->approved == 0) {
                $this->spaceDetails['space_type'] = "enterprise";
                $this->spaceDetails['plan'] = 1;
                $this->SpaceName = $this->business->business_name;
                $this->SpaceDescription = $this->business->description;
                $this->SpaceWebsite = $this->business->business_website;
                $this->contact_full_name = $this->business->contact_full_name;
                $this->contact_email = $this->business->business_email;
                $this->contact_phone = $this->business->business_phone_one;
                $this->course_languages = explode(",", $this->business->course_languages);
                $this->course_industries = explode(",", $this->business->course_industries);
                $this->course_categories = explode(",", $this->business->course_categories);
                $this->step = 2;
            } else {
                $this->step = 1;
                $this->plans = Plan::all();
                $this->features = Feature::all();
            }
        }
    }

    public
    function chooseEnterPrisePlan($type)
    {
        $this->spaceDetails['plan'] = $type;
        if ($type == 1) {
            $this->spaceDetails['space_type'] = "enterprise";
            $this->spaceDetails['plan'] = 1;
            $this->step = 2;
            if ($this->business) {
                $this->SpaceName = $this->business->business_name;
                $this->SpaceDescription = $this->business->description;
                $this->SpaceWebsite = $this->business->business_website;
                $this->contact_full_name = $this->business->contact_full_name;
                $this->contact_email = $this->business->business_email;
                $this->contact_phone = $this->business->business_phone_one;
                $this->course_languages = explode(",", $this->business->course_languages);
                $this->course_industries = explode(",", $this->business->course_industries);
                $this->course_categories = explode(",", $this->business->course_categories);
            }
        } else {
            return redirect(route('checkout.page', ['planId' => $type]));
        }
    }

    public
    function ContinueBtn()
    {

        if ($this->step == 2) {
            $this->validate([
                'avatar' => 'nullable|image|mimes:png,jpg,jpeg',
                'SpaceName' => 'required|string',
                'SpaceDescription' => 'required|string',
                'SpaceWebsite' => 'required|url',
            ]);
            $this->spaceDetails['space_name'] = $this->SpaceName;
            $this->spaceDetails['space_description'] = $this->SpaceDescription;
            $this->spaceDetails['space_website'] = $this->SpaceWebsite;
            $this->spaceDetails['avatar_url'] = $this->avatar?->temporaryUrl();

            $this->step = $this->step + 1;
        } elseif ($this->step == 3) {
            $this->validate([
                'course_categories' => 'required|array|min:1',
                'course_industries' => 'required|array|min:1',
                'course_languages' => 'required|array|min:1',
                'course_categories.*' => 'required',
                'course_industries.*' => 'required',
                'course_languages.*' => 'required',
            ]);
            $this->spaceDetails['course_categories'] = $this->course_categories;
            $this->spaceDetails['course_industries'] = $this->course_industries;
            $this->spaceDetails['course_languages'] = $this->course_languages;
            $this->step = $this->step + 1;
        } elseif ($this->step == 4) {
            $this->validate([
                'contact_email' => 'required|email',
                'contact_phone' => 'required|numeric',
                'contact_full_name' => 'required|string',
                'contact_email_code' => 'required|in:' . $this->correct_contact_email_code,
            ]);
            if (
                (
                    ($this->correct_contact_email_code != "" && $this->contact_email_code == $this->correct_contact_email_code)
                    || ($this->contact_email == optional($this->business)->business_email)
                )
            ) {
                $this->spaceDetails['contact_full_name'] = $this->contact_full_name;
                $this->spaceDetails['contact_email'] = $this->contact_email;
                $this->spaceDetails['contact_phone'] = $this->contact_phone;
                if (
                    $this->spaceDetails['contact_full_name'] != "" &&
                    $this->spaceDetails['contact_email'] != ""
//                    && $this->spaceDetails['contact_phone'] != ""
                ) {
                    //Create Business Account
                    $business = Business::updateOrCreate(
                        [
                            'created_by' => auth()->user()->id,
                            'business_type' => $this->spaceDetails['space_type']
                        ],
                        [
                            'business_type' => $this->spaceDetails['space_type'],
                            'description' => $this->SpaceDescription,
                            'business_website' => $this->SpaceWebsite,
                            'business_name' => $this->SpaceName,
                            'business_email' => $this->contact_email,
                            'business_phone_one' => $this->contact_phone,
                            'contact_full_name' => $this->contact_full_name,
                            'course_categories' => implode(",", $this->course_categories),
                            'course_industries' => implode(",", $this->course_industries),
                            'course_languages' => implode(",", $this->course_languages),
                            'created_by' => auth()->user()->id,
                            'approved' => 1,
                            'tier_id' => 1,
                        ]
                    );
                    if ($this->spaceDetails['avatar_url']) {
                        $business->addMedia($this->avatar->getRealPath())
                            ->preservingOriginal()
                            ->toMediaCollection();
                    }
                    // add Business Settings
                    $business_id = $business->id;
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'private_space',
                        'value' => '1',
                    ]);
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'restrict_comments',
                        'value' => '1',

                    ]);
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'restrict_tagging',
                        'value' => '1',

                    ]);
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'show_analytics',
                        'value' => 'public', //public-followers-me

                    ]);
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'business_environment',
                        'value' => 'followers',

                    ]);
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'rewards_deals',
                        'value' => 'me',

                    ]);

                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'followers_visibility',
                        'value' => 'public',

                    ]);
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'message_ability',
                        'value' => 'followers',

                    ]);
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'notes_visibility',
                        'value' => 'public',

                    ]);
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'hint_visibility',
                        'value' => 'followers',

                    ]);
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'blog_visibility',
                        'value' => 'public',

                    ]);
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'traivis_algorithms',
                        'value' => '1',

                    ]);
                    BusinessAppSetting::create([
                        'business_id' => $business_id,
                        'key' => 'social_media_slots',
                        'value' => 20,
                    ]);
                    // create user
                    $user = User::find(auth()->user()->id);
                    $user->businesses()->sync($business->id, ['role_id' => 1]);
//                    $business->users()->attach(auth()->user()->id);
                    //create subscription
                    /*$transaction = auth()->user()->payerTransactions()->where('productable_type', Plan::class)->latest()->first();
                    if ($transaction) {
                        //paid plan
                        $business->subscribeTo($transaction->productable);
                    } else {
                        //free plan
                        $business->subscription()->create([
                            'plan_id' => 1,
                            'started_at' => now()
                        ]);
                    }*/

                    if ($this->spaceDetails['space_type'] == "instructor") {
                        $this->business_link = "instructor-dashboard";
                    } elseif ($this->spaceDetails['space_type'] == "institute") {
                        $this->business_link = "institute-dashboard";
                    } else {
                        $this->business_link = "enterprise-dashboard";
                    }

                    //Set Act As
                    session(['business_id' => $business->id]);
//                    setPermissionsTeamId(session('business_id'));
                    //Return Confirmed Step
                    $this->step = $this->step + 1;

                }
            }
        }

    }

    public
    function PreviousBtn()
    {
        if ($this->business && $this->business->approved == 0 && $this->step == 2) {
            $this->step = $this->step - 2;
        } else {
            $this->step = $this->step - 1;
        }
    }

    public
    function verifyEmail()
    {
        $this->validate([
            'contact_email' => 'required|email',
        ]);
        $otp = mt_rand(100000, 999999);
        Mail::to($this->contact_email)->send(new BusinessSpaceEmailVerification($otp));
        $this->correct_contact_email_code = $otp;
        $this->sent_email_verification = true;
    }

    public
    function verifyPhone()
    {
        $otp = mt_rand(100000, 999999);
        $mobile = $this->contact_phone;

        $client = new SnsClient([
            'version' => 'latest',
            'region' => ENV('AWS_DEFAULT_REGION'),
            'credentials' => new Credentials(
                ENV('AWS_SNS_ACCESS_KEY_ID'),
                ENV('AWS_SNS_SECRET_ACCESS_KEY')
            )
        ]);

        $args = array(
            "MessageAttributes" => [
                'AWS.SNS.SMS.SMSType' => [
                    'DataType' => 'String',
                    'StringValue' => 'Transactional'
                ]
            ],
            "Message" => "This Is Your Traivis Verification Code" . $otp,
            "PhoneNumber" => $mobile,
        );

        $result = $client->publish($args);

        $this->correct_contact_phone_code = $otp;
        $this->sent_phone_verification = true;

    }

    public
    function render()
    {
        return view('livewire.business-space-operations');
    }
}