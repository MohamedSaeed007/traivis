<?php

namespace App\Http\Livewire;

use App\Models\Business;
use App\Models\BusinessSocialKeys;
use Codebird\Codebird;
use Livewire\Component;

class SocialPoster extends Component
{
    public $business;
    public $facebookSocialKey;
    public $twitterSocialKey;
    public $linkedinSocialKey;
    public $pinterestSocialKey;
    public function mount()
    {
        $this->business = Business::find(session('business_id'));
        $this->linkedinSocialKey = BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'linkedin')->first();
        $this->pinterestSocialKey = BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'pinterest')->first();
        $this->facebookSocialKey = BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'facebook')->first();
        $this->twitterSocialKey = BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'twitter')->first();
    }

    public function connectFacebook()
    {
        return redirect(route('facebook_redirect'));
    }
    public function disconnectFacebook()
    {
        BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'facebook')->delete();
        $this->facebookSocialKey = null;
    }
    public function connectTwitter()
    {
        return redirect(route('twitter_redirect'));
    }
    public function disconnectTwitter()
    {
        BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'twitter')->delete();
        $this->twitterSocialKey = null;
    }
    public function connectLinkedin()
    {
        return redirect(route('linkedin_url'));
    }
    public function disconnectLinkedin()
    {
        BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'linkedin')->delete();
        $this->pinterestSocialKey = null;
    }
    public function connectPinterest()
    {
        return redirect(route('pinterest_url'));
    }
    public function disconnectPinterest()
    {
        BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'pinterest')->delete();
        $this->pinterestSocialKey = null;
    }
    /*  public function connectTwitter()
    {
        //traivis properties
        Codebird::setConsumerKey(env('TraivisKey'), env('TraivisSecret')); // static, see README
        $cb = Codebird::getInstance();
        $BSK = BusinessSocialKeys::where('social_type', 'twitter')
            ->where('business_id', session('business_id'))->first();
        //Auth
        if (!session()->has('oauth_token')) {
            // get the request token
            $reply = $cb->oauth_requestToken([
                'oauth_callback' => 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
            ]);

            // store the token
            $cb->setToken($reply->oauth_token, $reply->oauth_token_secret);

            session(['oauth_token' => $reply->oauth_token]);
            session(['oauth_token_secret' => $reply->oauth_token_secret]);
            session(['oauth_verify' => true]);

            //Store Keys
            BusinessSocialKeys::updateOrCreate(
                ['business_id' => session('business_id'), 'social_type' => 'twitter'],
                [
                    'business_id' => session('business_id'),
                    'social_type' => 'twitter',
                    'oauth_token_secret' => $reply->oauth_token_secret,
                    'oauth_token' => $reply->oauth_token,
                ]
            );
        } elseif (request()->has('oauth_verifier') && session()->has('oauth_verify')) {
            // verify the token
            $cb->setToken(session('oauth_token'), session('oauth_token_secret'));
            session()->forget('oauth_verify');

            // get the access token
            $reply = $cb->oauth_accessToken([
                'oauth_verifier' => request()->query('oauth_verifier')
            ]);

            // store the token (which is different from the request token!)
            session()->put('oauth_token', $reply->oauth_token);
            session()->put('oauth_token_secret', $reply->oauth_token_secret);
            //Store Keys
            BusinessSocialKeys::updateOrCreate(
                ['business_id' => session('business_id'), 'social_type' => 'twitter'],
                [
                    'business_id' => session('business_id'),
                    'social_type' => 'twitter',
                    'oauth_token_secret' => $reply->oauth_token_secret,
                    'oauth_token' => $reply->oauth_token,
                ]
            );
        }
        $cb->setToken(session('oauth_token'), session('oauth_token_secret'));
        //        dump(session('oauth_token'), session('oauth_token_secret'));
        $params = ['status' => 'Fish & chips ' . time()];
        $reply = $cb->statuses_update($params);

        //        dd($reply);

    } */
    public function render()
    {
        return view('livewire.social-poster');
    }
}
