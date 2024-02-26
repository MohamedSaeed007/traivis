<?php

namespace App\Http\Livewire;

use App\Events\TeaserCampaignCreated;
use App\Models\BusinessSocialKeys;
use App\Models\Course;
use App\Models\SocialMedia;
use App\Models\SocialPostDate;
use App\Models\TeaserSocialMedia;
use Livewire\Component;
use App\Models\TeaserOriginalDraft;
use App\SocialPoster\FacebookRepository;
use App\SocialPoster\LinkedInPoster;
use App\SocialPoster\PinterestPoster;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use Usernotnull\Toast\Concerns\WireToast;

class PublishCourseTeaserCampaign extends ModalComponent
{
    use WithFileUploads;
    use WireToast;
    public $course;
    public $course_id;
    public $business_id;
    public $teaserOriginalDraftImage;
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
    public $openModal = false;
    public $socialMediaDate;
    // public $dateErrorMessage = [];
    public $posts;
    public $pinterestBoards;
    public $facebookPages;
    public $linkedinPages;
    public $board;
    public $checkConnection;
    public $postSavedMessage;
    // public $selectedChannelHasPublishedDateErrorMessage;
    public $stats = [];
    public $activeSocial = [];
    public $socialTab = [];
    protected $listeners = ['openModal'];

    public $rules = [
        'posts.*.image' => 'nullable|required_with:posts.*.social_channels.pinterest',
        'posts.*.text' => 'required|string',
        'posts.*.social_channels.traivis.dates' => 'required_with:posts.*.social_channels.traivis|array|min:1',
        'posts.*.social_channels.facebook.dates' => 'required_with:posts.*.social_channels.facebook|array|min:1',
        'posts.*.social_channels.linkedin.dates' => 'required_with:posts.*.social_channels.linkedin|array|min:1',
        'posts.*.social_channels.pinterest.dates' => 'required_with:posts.*.social_channels.pinterest|array|min:1',
        'posts.*.social_channels.pinterest.board' =>
        'required_with:posts.*.social_channels.pinterest|string',
        'posts.*.social_channels.facebook.page' =>
        'required_with:posts.*.social_channels.facebook|string',
        'posts.*.social_channels.linkedin.page' => 'nullable|string',
    ];
    protected $validationAttributes = [
        'posts.*.text' => 'Post Text',
        'posts.*.image' => 'Post Image',
    ];
    protected $messages = [
        'posts.*.image.image' =>
        'The Post Image must be a file of type: png, jpg, jpeg, mp4, mpeg, avi.',
        'posts.*.social_channels.traivis.dates.required_with' => 'You must add at least one date for Traivis social channel',
        'posts.*.social_channels.facebook.dates.required_with' => 'You must add at least one date for Facebook social channel',
        'posts.*.social_channels.linkedin.dates.required_with' => 'You must add at least one date for Linkedin social channel',
        'posts.*.social_channels.pinterest.dates.required_with' => 'You must add at least one date for Pinterest social channel',
        'posts.*.image.required_with' => 'You must upload image when choosing pinterest channel',
        'posts.*.social_channels.pinterest.board.required_with' => 'You must choose board for pinterest'
    ];

    public function checkConnection()
    {
        $facebook = BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'facebook')
            ->first();
        $this->checkConnection['facebook'] = $facebook;
        $twitter = BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'twitter')
            ->first();
        $this->checkConnection['twitter'] = $twitter;
        $pinterest = BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'pinterest')
            ->first();
        $this->checkConnection['pinterest'] = $pinterest;
        $linkedin = BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'linkedin')
            ->first();
        $this->checkConnection['linkedin'] = $linkedin;
        $twitter = BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'twitter')
            ->first();
        $this->checkConnection['twitter'] = $twitter;
    }

    public function getPinterestBoards()
    {
        $PinterestPoster = new PinterestPoster(session('business_id'));
        dd($PinterestPoster);
        if (array_key_exists('items', $PinterestPoster->getBoards())) {
            $this->pinterestBoards = $this->checkConnection['pinterest']
                ? array_map(function ($n) {
                    return [
                        'name' => $n['name'],
                        'value' => $n['id']
                    ];
                }, $PinterestPoster->getBoards()['items'])
                : null;
        }
    }

    public function getFacebookPages()
    {
        $facebookPoster = new FacebookRepository(session('business_id'));
        $this->facebookPages = $facebookPoster->getPages();
    }

    public function getLinkedinPages()
    {
        $linkedinPages = new LinkedInPoster(session('business_id'));
        $pages = $linkedinPages->getCompanyPages();
        foreach ($pages as $page) {
            $this->linkedinPages[$page->organization] = current($page)->localizedName;
        }
    }

    public function updateStats()
    {
        $dates = TeaserOriginalDraft::where('course_id', $this->course_id)
            ->withCount([
                'socialDates as in_progress_dates' => function ($query) {
                    $query->where('status', 'in_progress');
                },
                'socialDates as published_dates' => function ($query) {
                    $query->where('status', 'published');
                },
                'socialDates as declined_dates' => function ($query) {
                    $query->where('status', 'declined');
                }
            ])
            ->get();
        $this->stats['in_progress'] = $dates->sum('in_progress_dates');
        $this->stats['published'] = $dates->sum('published_dates');
        $this->stats['declined'] = $dates->sum('declined_dates');
    }

    public function openModal($id = null)
    {
        if ($id && is_string($id)) {
            return;
        }
        $this->course_id = $id['course_id'];
        if ($this->course_id) {
            $this->course = Course::find($this->course_id);
        }
        $this->fillPostsArray();
        $this->getSlots();
        $this->updateStats();
        $this->openModal = true;
    }

    public function addDateToSocialMedia($postKey, $socialMediaName)
    {
        $this->validate([
            'socialMediaDate' => 'nullable|date|after:now'
        ]);
        if (!$this->socialMediaDate) {
            toast()
                ->danger('Please choose date')
                ->push();
            // $this->dateErrorMessage[$postKey][$socialMediaName] = 'Please choose date';
        } else {
            if (
                !in_array(
                    $this->socialMediaDate,
                    array_column(
                        $this->posts[$postKey]['social_channels'][$socialMediaName]['dates'],
                        'value'
                    )
                )
            ) {
                // $this->dateErrorMessage[$postKey][$socialMediaName] = null;
                $this->posts[$postKey]['social_channels'][$socialMediaName]['dates'][] = [
                    'value' => $this->socialMediaDate,
                    'status' => null,
                    'color' => 'slate-500',
                ];
            } else {
                toast()
                    ->danger('You already added this date\time, please choose another one')
                    ->push();
                // $this->dateErrorMessage[$postKey][$socialMediaName] =
                //     'You already added this date\time, please choose another one';
            }
        }
        $this->socialMediaDate = null;
    }

    public function removeDateFromSocialMedia($postKey, $socialMediaName, $key)
    {
        if (
            $this->posts[$postKey]['social_channels'][$socialMediaName]['dates'][$key]['status'] !=
            'published'
        ) {
            unset($this->posts[$postKey]['social_channels'][$socialMediaName]['dates'][$key]);
        } else {
            toast()
                ->danger('You cannot remove published date')
                ->push();
            // $this->dateErrorMessage[$postKey][$socialMediaName] = 'You cannot remove published date';
        }
    }

    public function toggleSocialChannelToPost($postKey, $socialMediaName)
    {
        $hasPublished = 0;
        //remove case
        if (array_key_exists($socialMediaName, $this->posts[$postKey]['social_channels'])) {
            //prevent remove if the selected channel has published date
            if (!in_array('published', array_column($this->posts[$postKey]['social_channels'][$socialMediaName]['dates'], 'status'))) {
                unset($this->posts[$postKey]['social_channels'][$socialMediaName]);
                if ($this->posts[$postKey]['selectedSocialMedia'] == $socialMediaName) {
                    $this->posts[$postKey]['selectedSocialMedia'] = array_key_first($this->posts[$postKey]['social_channels']);
                    $this->socialTab[$postKey] = [
                        'traivis' => $this->posts[$postKey]['selectedSocialMedia'] == 'traivis' ? true : false,
                        'facebook' => $this->posts[$postKey]['selectedSocialMedia'] == 'facebook' ? true : false,
                        'twitter' => $this->posts[$postKey]['selectedSocialMedia'] == 'twitter' ? true : false,
                        'pinterest' => $this->posts[$postKey]['selectedSocialMedia'] == 'pinterest' ? true : false,
                        'linkedin' => $this->posts[$postKey]['selectedSocialMedia'] == 'linkedin' ? true : false,
                    ];
                }
                $this->posts[$postKey]['activeSocialCounts'] = count($this->posts[$postKey]['social_channels']);
            } else {
                $hasPublished = 1;
                toast()
                    ->danger('You Cannot Remove ' . $socialMediaName . ' channel because it has a published date')
                    ->push();
                // $this->selectedChannelHasPublishedDateErrorMessage = 'You Cannot Remove ' . $socialMediaName . ' channel because it has a published date';
            }
        }
        //add case
        else {
            $this->posts[$postKey]['social_channels'][$socialMediaName]['dates'] = [];
            $this->posts[$postKey]['activeSocialCounts'] = count($this->posts[$postKey]['social_channels']);
            if ($socialMediaName == 'pinterest') {
                $this->posts[$postKey]['social_channels'][$socialMediaName]['board'] = $this->pinterestBoards ? $this->pinterestBoards[0]['value'] : '';
            }
            if ($socialMediaName == 'facebook') {
                $this->posts[$postKey]['social_channels'][$socialMediaName]['page'] = $this->facebookPages ? $this->facebookPages[0]['id'] : '';
            }
            if ($socialMediaName == 'linkedin') {
                $this->posts[$postKey]['social_channels'][$socialMediaName]['page'] = '';
            }

            $this->posts[$postKey]['selectedSocialMedia'] = $socialMediaName;
            $this->socialTab[$postKey] = [
                'traivis' => $socialMediaName == 'traivis' ? true : false,
                'facebook' => $socialMediaName == 'facebook' ? true : false,
                'twitter' => $socialMediaName == 'twitter' ? true : false,
                'pinterest' => $socialMediaName == 'pinterest' ? true : false,
                'linkedin' => $socialMediaName == 'linkedin' ? true : false,
            ];
        }

        //toggle social channel in active array
        if (!$hasPublished) {
            $this->activeSocial[$postKey][$socialMediaName] = !$this->activeSocial[$postKey][$socialMediaName];
        }
        //open collabse if there one social channel & close it if no any social channels
        if ($this->posts[$postKey]['activeSocialCounts']) {
            $this->posts[$postKey]['postCollabseOpened'] = true;
        } else {
            $this->posts[$postKey]['postCollabseOpened'] = false;
        }
    }

    public function setActiveSocialMedia($postKey, $socialMediaName)
    {
        $this->posts[$postKey]['selectedSocialMedia'] = $socialMediaName;
    }

    public function addPost()
    {
        if (array_last($this->posts)['status'] != 'draft') {
            if ($this->getSlots() < 20) {
                $this->posts[] = [
                    'social_channels' => [],
                    'id' => '',
                    'text' => '',
                    'image' => '',
                    'status' => 'draft',
                    'hasPublished' => 0,
                    'activeSocialCounts' => 0,
                    'postCollabseOpened' => false,
                    'selectedSocialMedia' => '',
                    // 'errorMessage' => null,
                ];
                $this->activeSocial[array_key_last($this->posts)] = [
                    'traivis' => false,
                    'facebook' => false,
                    'twitter' => false,
                    'pinterest' => false,
                    'linkedin' => false
                ];
                $this->socialTab[array_key_last($this->posts)] = [
                    'traivis' => false,
                    'facebook' => false,
                    'twitter' => false,
                    'pinterest' => false,
                    'linkedin' => false
                ];
            }
        } else {
            toast()
                ->danger('You must save this post first before create a new one')
                ->push();
            // $this->posts[array_key_last($this->posts)]['errorMessage'] = 'You must save this post first before create a new one';
        }
    }

    public function savePost($postKey)
    {
        // $this->posts[$postKey]['errorMessage'] = null;
        $this->posts[$postKey]['status'] = '';
        if ($this->getSlots() < 20 || $this->posts[$postKey]['id']) {
            $this->posts[$postKey]['status'] = 'draft';
            $this->validate();
            // dd($validator);
            //Save Original Post
            $post = TeaserOriginalDraft::updateOrCreate(
                [
                    'id' => $this->posts[$postKey]['id'],
                ],
                [
                    'course_id' => $this->course_id,
                    'business_id' => $this->business_id,
                    'post_txt' => $this->posts[$postKey]['text']
                ]
            );
            //Save Original Post Image in media library
            if ($this->posts[$postKey]['image'] && !is_string($this->posts[$postKey]['image'])) {
                $post
                    ->addMedia($this->posts[$postKey]['image']->getRealPath())
                    ->usingName($this->posts[$postKey]['image']->getClientOriginalName())
                    ->preservingOriginal()
                    ->toMediaCollection();
            }
            //Remove Unused Social Posts
            $post->socialPosts()->whereHas('social', function ($q) use ($postKey) {
                $q->whereNotIn('social_name', array_keys($this->posts[$postKey]['social_channels']));
            })->delete();
            //Save Social Posts
            foreach ($this->posts[$postKey]['social_channels'] as $socialKey => $socialChannel) {
                $social = SocialMedia::where('social_name', $socialKey)->first();
                if ($social) {
                    if ($socialKey == 'facebook') {
                        //get page Access Token
                        $getFacebookPageAccessToken = null;
                        foreach ($this->facebookPages as $page) {
                            if (in_array($socialChannel['page'], $page)) {
                                $getFacebookPageAccessToken = $page['access_token'];
                            }
                        }
                    }
                    $socialPost = TeaserSocialMedia::updateOrCreate([
                        'post_id' => $post->id,
                        'social_media_id' => $social->id,
                    ], [
                        'post_id' => $post->id,
                        'social_media_id' => $social->id,
                        'board_id' => $socialKey == 'pinterest' ? $socialChannel['board'] : '',
                        'page_id' =>
                        $socialKey == 'facebook' || $socialKey == 'linkedin'
                            ? $socialChannel['page']
                            : '',
                        'facebook_page_access_token' =>
                        $socialKey == 'facebook' ? $getFacebookPageAccessToken : ''
                    ]);
                }
                //Remove Unused Social Post Dates
                $socialPost->postDates()->whereNotIn('publish_date', array_column($socialChannel['dates'], 'value'))->delete();
                //Save Social Post Dates
                foreach ($socialChannel['dates'] as $date) {
                    SocialPostDate::updateOrCreate(
                        [
                            'social_post_id' => $socialPost->id,
                            'publish_date' => $date['value']
                        ]
                    );
                }
            }
            $this->posts[$postKey]['id'] = $post->id;
            $this->posts[$postKey]['status'] = 'saved';
            toast()
                ->success('Your post saved successfully and will publish on the selected dates')
                ->push();
            TeaserCampaignCreated::dispatch($post);
            $this->getSlots();
        }
        $this->updateStats();
        // dd('t');
    }

    public function deletePost($postKey)
    {
        if (!$this->posts[$postKey]['hasPublished']) {
            if ($this->posts[$postKey]['id']) {
                TeaserOriginalDraft::find($this->posts[$postKey]['id'])->delete();
            }
            unset($this->posts[$postKey]);
            $this->getSlots();
            $this->updateStats();
        }
    }

    public function fillPostsArray()
    {
        $hasPublished = 0;
        $this->posts = [];
        $originalDrafts = TeaserOriginalDraft::whereCourseId($this->course_id)->get();
        if (count($originalDrafts) > 0) {
            //get course teaser posts from database
            foreach ($originalDrafts as $postKey => $originalDraft) {
                $this->activeSocial[$postKey] = [
                    'traivis' => false,
                    'facebook' => false,
                    'twitter' => false,
                    'pinterest' => false,
                    'linkedin' => false
                ];
                $this->socialTab[$postKey] = [
                    'traivis' => false,
                    'facebook' => false,
                    'twitter' => false,
                    'pinterest' => false,
                    'linkedin' => false
                ];
                $socialChannels = [];
                foreach ($originalDraft->socialPosts as $socialPost) {
                    $this->activeSocial[$postKey][$socialPost->social->social_name] = true;
                    // $this->socialTab[$postKey][$socialPost->social->social_name] = true;
                    $dates = [];
                    foreach ($socialPost->postDates as $date) {
                        //check if post has published date or not
                        if ($date->status == 'published') {
                            $hasPublished = 1;
                        }
                        $dates[] = [
                            'value' => $date->publish_date,
                            'status' => $date->status,
                            'color' =>
                            $date->status == 'published'
                                ? 'green-500'
                                : ($date->status == 'in_progress'
                                    ? 'slate-400'
                                    : 'red-500')
                        ];
                    }
                    if ($socialPost->social->social_name == 'pinterest') {
                        $socialChannels[$socialPost->social->social_name] = [
                            'dates' => $dates,
                            'board' => $socialPost->board_id
                        ];
                    } elseif ($socialPost->social->social_name == 'facebook') {
                        $socialChannels[$socialPost->social->social_name] = [
                            'dates' => $dates,
                            'page' => $socialPost->page_id,
                            'page_access_token' => $socialPost->facebook_page_access_token
                        ];
                    } elseif ($socialPost->social->social_name == 'linkedin') {
                        $socialChannels[$socialPost->social->social_name] = [
                            'dates' => $dates,
                            'page' => $socialPost->page_id
                        ];
                    } else {
                        $socialChannels[$socialPost->social->social_name] = [
                            'dates' => $dates
                        ];
                    }
                }
                $this->socialTab[$postKey][array_search(true, $this->activeSocial[$postKey])] = true;
                $this->posts[$postKey] = [
                    'id' => $originalDraft->id,
                    'text' => $originalDraft->post_txt,
                    'image' => $originalDraft->image,
                    'social_channels' => $socialChannels,
                    'status' => 'success',
                    'hasPublished' => $hasPublished,
                    'activeSocialCounts' => count($socialChannels),
                    'postCollabseOpened' => count($socialChannels) ? true : false,
                    'selectedSocialMedia' => array_key_first($socialChannels),
                    // 'errorMessage' => null
                ];
            }
        } else {
            //the first empty post created when you open modal for first time
            $this->posts[] = [
                'social_channels' => [],
                'id' => '',
                'text' => '',
                'image' => '',
                'status' => '',
                'hasPublished' => 0,
                'activeSocialCounts' => 0,
                'postCollabseOpened' => false,
                'selectedSocialMedia' => '',
                // 'errorMessage' => null,
            ];
            $this->activeSocial[0] = [
                'traivis' => false,
                'facebook' => false,
                'twitter' => false,
                'pinterest' => false,
                'linkedin' => false
            ];
            $this->socialTab[0] = [
                'traivis' => false,
                'facebook' => false,
                'twitter' => false,
                'pinterest' => false,
                'linkedin' => false
            ];
        }
    }

    public function mount()
    {
        $this->business_id = session('business_id');
        $this->checkConnection();
        if (
            optional(
                BusinessSocialKeys::where('business_id', $this->business_id)
                    ->where('social_type', 'pinterest')
                    ->first()
            )->oauth_token
        ) {
            $this->getPinterestBoards();
        }
        if (
            optional(
                BusinessSocialKeys::where('business_id', $this->business_id)
                    ->where('social_type', 'facebook')
                    ->first()
            )->oauth_token
        ) {
            $this->getFacebookPages();
        }
        if (
            optional(
                BusinessSocialKeys::where('business_id', $this->business_id)
                    ->where('social_type', 'linkedin')
                    ->first()
            )->oauth_token
        ) {
            $this->getLinkedinPages();
        }
        $this->postSavedMessage = 'Your post saved successfully and will publish on the selected dates';
    }

    public function getSlots()
    {
        $this->original_drafts = TeaserOriginalDraft::where('course_id', $this->course_id)
            ->orderBy('id', 'desc')
            ->get();
        //Slots Count
        $date_slot = 0;
        foreach ($this->original_drafts as $original_draft) {
            $social_posts = TeaserSocialMedia::where('post_id', $original_draft->id ?? '')
                ->whereRelation('social', 'social_name', '!=', 'traivis')
                ->get();
            foreach ($social_posts as $post) {
                $date_slot += SocialPostDate::where('social_post_id', $post->id)->count();
            }
        }
        $this->slots = $date_slot;
        //End Slots
    }

    public function render()
    {
        return view('livewire.publish-course-teaser-campaign');
    }
}
