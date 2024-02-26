<?php

namespace App\SocialPoster;

use App\Models\Business;
use App\Models\BusinessSocialKeys;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookPoster
{
    public function generateUrl()
    {
        // session()->put('facebook_csrf', $this->csrf);
        return Socialite::driver('facebook')->scopes([
            'public_profile',
            'pages_manage_posts',
            'pages_read_engagement'
        ])->redirect();
    }
    public function callback(Request $request)
    {
        $socialUser = Socialite::driver('facebook')->stateless()->user();
        $accessToken = $socialUser->token;
        if (!$accessToken) {
            abort(404, 'No Access Token Found');
        }
        //update access token in DB
        if ($key = BusinessSocialKeys::firstOrCreate([
            'business_id' => session('business_id'),
            'social_type' => 'facebook',
        ])) {
            $key->update([
                'business_id' => session('business_id'),
                'social_type' => 'facebook',
                'oauth_token' => $accessToken,
            ]);
        }
        //redirect to privacy page
        $business = Business::find(session('business_id'));
        return redirect(route($business->business_type . '-dashboard-privacy'));
    }
}
