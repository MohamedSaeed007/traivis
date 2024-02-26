<?php

namespace App\Http\Controllers\SocialAuth;

use App\Http\Controllers\Controller;
use App\SocialPoster\FacebookRepository;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    protected $facebook;

    public function __construct()
    {
        $this->facebook = new FacebookRepository();
    }

    public function redirectToProvider()
    {
        return redirect($this->facebook->redirectTo());
    }

    public function handleProviderCallback()
    {
        if (request('error') == 'access_denied')
            //handle error

            $accessToken = $this->facebook->handleCallback();

        //use token to get facebook pages
    }
}
