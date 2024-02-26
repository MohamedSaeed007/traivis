<?php

namespace App\SocialPoster;

use App\Models\Business;
use App\Models\BusinessSocialKeys;
use Exception;
use Facebook\Exception\ResponseException;
use Facebook\Exception\SDKException;
use Facebook\Facebook;

class FacebookRepository
{
    protected $access_token;
    protected $facebook;

    public function __construct($business_id = null)
    {
        $this->facebook = new Facebook([
            'app_id' => config('services.facebook.client_id'),
            'app_secret' => config('services.facebook.client_secret'),
            'default_graph_version' => config('services.facebook.DEFAULT_GRAPH_VERSION')
        ]);
        $this->access_token = optional(BusinessSocialKeys::where('business_id', $business_id)
            ->where('social_type', 'facebook')->first())->oauth_token;
    }

    public function redirectTo()
    {
        $helper = $this->facebook->getRedirectLoginHelper();

        $permissions = [
            'pages_manage_posts',
            'pages_read_engagement'
        ];

        $redirectUri = config('services.facebook.redirect');

        return $helper->getLoginUrl($redirectUri, $permissions);
    }

    public function handleCallback()
    {
        $helper = $this->facebook->getRedirectLoginHelper();

        if (request('state')) {
            $helper->getPersistentDataHandler()->set('state', request('state'));
        }

        try {
            $accessToken = $helper->getAccessToken();
        } catch (ResponseException $e) {
            throw new \Exception("Graph returned an error: {$e->getMessage()}");
        } catch (SDKException $e) {
            throw new \Exception("Facebook SDK returned an error: {$e->getMessage()}");
        }

        if (!isset($accessToken)) {
            throw new \Exception('Access token error');
        }

        if (!$accessToken->isLongLived()) {
            try {
                $oAuth2Client = $this->facebook->getOAuth2Client();
                $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
            } catch (SDKException $e) {
                throw new \Exception("Error getting a long-lived access token: {$e->getMessage()}");
            }
        }

        return $accessToken->getValue();

        //store acceess token in databese and use it to get pages
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

    public function getPages()
    {
        $pages = $this->facebook->get('/me/accounts', $this->access_token);
        $pages = $pages->getGraphEdge()->asArray();

        return array_map(function ($item) {
            return [
                'provider' => 'facebook',
                'access_token' => $item['access_token'],
                'id' => $item['id'],
                'name' => $item['name'],
                'image' => "https://graph.facebook.com/{$item['id']}/picture?type=large"
            ];
        }, $pages);
    }

    public function post($accountId, $accessToken, $content, $images = [])
    {
        $data = ['message' => $content];

        $attachments = $this->uploadImages($accountId, $accessToken, $images);

        foreach ($attachments as $i => $attachment) {
            $data["attached_media[$i]"] = "{\"media_fbid\":\"$attachment\"}";
        }

        return $this->postData($accessToken, "$accountId/feed", $data);
        try {
        } catch (\Exception $exception) {
            //notify user about error
            return false;
        }
    }

    private function uploadImages($accountId, $accessToken, $images = [])
    {
        $attachments = [];

        foreach ($images as $image) {
            if (!file_exists($image)) continue;

            $data = [
                'source' => $this->facebook->fileToUpload($image),
            ];

            $response = $this->postData($accessToken, "$accountId/photos?published=false", $data);
            try {
                if ($response) $attachments[] = $response->getFields()['id'];
            } catch (\Exception $exception) {
                throw new Exception("Error while posting: {$exception->getMessage()}", $exception->getCode());
            }
        }

        return $attachments;
    }

    private function postData($accessToken, $endpoint, $data)
    {
        try {
            $response = $this->facebook->post(
                $endpoint,
                $data,
                $accessToken
            );
            return $response->getGraphNode();
        } catch (FacebookResponseException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        } catch (FacebookSDKException $e) {
            throw new Exception($e->getMessage(), $e->getCode());
        }
    }
}
