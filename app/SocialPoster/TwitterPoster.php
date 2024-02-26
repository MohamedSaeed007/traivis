<?php

namespace App\SocialPoster;

use App\Models\Business;
use App\Models\BusinessSocialKeys;

use Atymic\Twitter\Facade\Twitter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Laravel\Socialite\Facades\Socialite;

class TwitterPoster
{
    protected $access_token;
    protected $access_token_secret;
    public function __construct($business_id = null)
    {
        $this->access_token = optional(BusinessSocialKeys::where('business_id', $business_id)
            ->where('social_type', 'twitter')->first())->oauth_token;
        $this->access_token_secret = optional(BusinessSocialKeys::where('business_id', $business_id)
            ->where('social_type', 'twitter')->first())->oauth_token_secret;
    }
    public function generateUrl()
    {
        return Socialite::driver('twitter')->redirect();
    }
    public function callback(Request $request)
    {
        $socialUser = Socialite::driver('twitter')->user();
        $accessToken = $socialUser->token;
        $accessTokenSecret = $socialUser->tokenSecret;
        if (!$accessToken) {
            abort(404, 'No Access Token Found');
        }
        //update access token in DB
        if ($key = BusinessSocialKeys::firstOrCreate([
            'business_id' => session('business_id'),
            'social_type' => 'twitter',
        ])) {
            $key->update([
                'business_id' => session('business_id'),
                'social_type' => 'twitter',
                'oauth_token' => $accessToken,
                'oauth_token_secret' => $accessTokenSecret,
            ]);
        }
        //redirect to privacy page
        $business = Business::find(session('business_id'));
        return redirect(route($business->business_type . '-dashboard-privacy'));
    }

    public function tweet($content, $image_path = null)
    {
        if ($image_path) {
            $uploaded_media = Twitter::usingCredentials($this->access_token, $this->access_token_secret)
                ->uploadMedia(['media' => File::get($image_path)]);
            Twitter::usingCredentials($this->access_token, $this->access_token_secret)
                ->postTweet(['status' => $content, 'media_ids' => $uploaded_media->media_id_string]);
        } else {
            Twitter::usingCredentials($this->access_token, $this->access_token_secret)
                ->postTweet(['status' => $content]);
        }
    }
}
