<?php

namespace App\Console\Commands;

use App\Models\SocialPostDate;
use App\SocialPoster\FacebookRepository;
use App\SocialPoster\LinkedInPoster;
use App\SocialPoster\PinterestPoster;
use App\SocialPoster\TwitterPoster;
use Exception;
use Illuminate\Console\Command;

class PostScheduleJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to post schedules posts';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $publishPost = function ($date) {
            if ($date->teaserSocialMedia->social->social_name == 'facebook') {
                $business_id = $date->teaserSocialMedia->originalPost->business->id;
                $facebookPoster = new FacebookRepository($business_id);
                $facebookPoster->post(
                    $date->teaserSocialMedia->page_id,
                    $date->teaserSocialMedia->facebook_page_access_token,
                    $date->teaserSocialMedia->originalPost->post_txt,
                    [optional($date->teaserSocialMedia->originalPost->getFirstMedia())->getPath()]
                );
            }
            if ($date->teaserSocialMedia->social->social_name == 'pinterest') {
                $business_id = $date->teaserSocialMedia->originalPost->business->id;
                $pinterestPoster = new PinterestPoster($business_id);
                $pinterestPoster->createPin(
                    $date->teaserSocialMedia->originalPost->image,
                    $date->teaserSocialMedia->originalPost->post_txt,
                    $date->teaserSocialMedia->board_id,
                    $date->teaserSocialMedia->board_section_id
                );
            }
            if ($date->teaserSocialMedia->social->social_name == 'linkedin') {
                $business_id = $date->teaserSocialMedia->originalPost->business->id;
                $linkedinPoster = new LinkedInPoster($business_id);
                $linkedinPoster->post(
                    $date->teaserSocialMedia->originalPost->post_txt,
                    $date->teaserSocialMedia->originalPost->image,
                    $date->teaserSocialMedia->page_id
                );
            }
            if ($date->teaserSocialMedia->social->social_name == 'twitter') {
                $business_id = $date->teaserSocialMedia->originalPost->business->id;
                $twitterPoster = new TwitterPoster($business_id);
                $twitterPoster->tweet(
                    $date->teaserSocialMedia->originalPost->post_txt,
                    optional($date->teaserSocialMedia->originalPost->getFirstMedia())->getPath()
                );
            }
        };
        $dates = SocialPostDate::where('publish_date', '<=', now())->whereStatus('in_progress')->get();
        foreach ($dates as $date) {
            try {
                $publishPost($date);
                $date->status = 'published';
                $date->save();
            } catch (Exception $e) {
                $date->response_code = $e->getMessage();
                $date->status = 'declined';
                $date->save();
            }
        }
    }
}
