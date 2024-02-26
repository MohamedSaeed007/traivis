<?php

namespace App\SocialPoster;

use App\Models\Business;
use App\Models\BusinessSocialKeys;
use App\Models\User;
use App\Services\LinkedIn;
use Config;
use Illuminate\Http\Request;
// use League\OAuth2\Client\Grant\AuthorizationCode as Linkedin;
use Symfony\Component\Console\Input\Input;
use GuzzleHttp\Client;

class LinkedInPoster
{
    protected $app_id;
    protected $app_secret;
    protected $callback;
    protected $csrf;
    protected $scopes;
    protected $ssl;
    protected $access_token;
    public function __construct($business_id = null)
    {
        $this->app_id = env('TRAIVIS_LINKEDIN_API_KEY');
        $this->app_secret =  env('TRAIVIS_LINKEDIN_API_KEY_SECRET');
        $this->scopes = env('TRAIVIS_LINKEDIN_SCOPES');
        $this->callback = env('TRAIVIS_LINKEDIN_REDIRECT_URL');
        $this->csrf = random_int(111111, 99999999999);
        $this->ssl = false; // ALWAYS TRUE FOR PRODUCTION USE
        $this->access_token = optional(BusinessSocialKeys::where('business_id', $business_id)
            ->where('social_type', 'linkedin')->first())->oauth_token;
        // dd($this->app_id);
    }
    public function generateUrl()
    {
        session()->put('linkedin_csrf', $this->csrf);
        $authURL =  "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=" . $this->app_id . "&redirect_uri=" . $this->callback . "&state=" . $this->csrf . "&scope=" . $this->scopes;
        return redirect($authURL);
    }

    public function callback(Request $request)
    {
        if ($request->get('state') != session('linkedin_csrf')) {
            abort(404, 'Invalid Request');
        }
        $code = $request->get('code');
        $url = "https://www.linkedin.com/oauth/v2/accessToken";
        $params = [
            'client_id' => $this->app_id,
            'client_secret' => $this->app_secret,
            'redirect_uri' => $this->callback,
            'code' => $code,
            'grant_type' => 'authorization_code',
        ];
        $response = $this->curl($url, http_build_query($params), "application/x-www-form-urlencoded");
        $this->access_token = json_decode($response)->access_token;

        BusinessSocialKeys::updateOrCreate([
            'business_id' => session('business_id'),
            'social_type' => 'linkedin',
        ], [
            'business_id' => session('business_id'),
            'social_type' => 'linkedin',
            'oauth_token' => $this->access_token,
        ]);
        $business = Business::find(session('business_id'));
        //TODO::return View to till user that account connected
        if (!$this->access_token) {
            abort(404, 'No Access Token Found');
        }
        return redirect(route($business->business_type . '-dashboard-privacy'));
    }

    public function getProfile()
    {
        if (!$this->access_token) {
            abort(404, 'Your Linkedin Account Not Connected');
        }
        $url = "https://api.linkedin.com/v2/me?projection=(id,firstName,lastName,profilePicture(displayImage~:playableStreams))&oauth2_access_token=" . $this->access_token;
        $params = [];
        $response = $this->curl($url, http_build_query($params), "application/x-www-form-urlencoded", false);
        $person = json_decode($response);
        return $person;
    }
    public function getOrganizationProfile($id)
    {
        if (!$this->access_token) {
            abort(404, 'Your Linkedin Account Not Connected');
        }
        $url = "https://api.linkedin.com/v2/organizations?ids=List(" . $id . ")&oauth2_access_token=" . trim($this->access_token);
        $params = [];
        $response = $this->curl($url, http_build_query($params), "application/x-www-form-urlencoded", false);
        $organization = json_decode($response);
        return $organization;
    }
    public function getCompanyPages()
    {
        if (!$this->access_token) {
            abort(404, 'Your Linkedin Account Not Connected');
        }
        $company_pages = "https://api.linkedin.com/v2/organizationAcls?q=roleAssignee&role=ADMINISTRATOR&projection=(elements*(*,roleAssignee~(localizedFirstName,localizedLastName),organization~(localizedName)))&oauth2_access_token=" . trim($this->access_token);
        $pages = $this->curl($company_pages, json_encode([
            'role' => 'DIRECT_SPONSORED_CONTENT_POSTER'
        ]), "application/json", false);
        return json_decode($pages)->elements;
    }

    public function post($message, $image = null, $organization = null)
    {
        if ($image) {
            $this->imagePost($image, $message, $organization);
        } else {
            $this->textPost($message, $organization);
        }
    }

    public function textPost($message, $organization = null)
    {
        if (!$this->access_token) {
            abort(404, 'Your Linkedin Account Not Connected');
        }
        if ($organization) {
            $author = $organization;
        } else {
            $person_id = $this->getProfile()->id;
            $author = "urn:li:person:" . $person_id;
        }
        $post_url = "https://api.linkedin.com/v2/ugcPosts?oauth2_access_token=" . $this->access_token;
        $request = [
            "author" => $author,
            "lifecycleState" => "PUBLISHED",
            "specificContent" => [
                "com.linkedin.ugc.ShareContent" => [
                    "shareCommentary" => [
                        "text" => $message
                    ],
                    "shareMediaCategory" => "NONE",
                ],

            ],
            "visibility" => [
                "com.linkedin.ugc.MemberNetworkVisibility" => "PUBLIC",
            ]
        ];
        $post = $this->curl($post_url, json_encode($request), "application/json", true);
        $post = json_decode($post);
        // dd($post);
        if (isset($post->id)) {
            info('Linkedin Post Success');
            return 'Success';
        } else {
            // info($post[0]);
            return 'Failed';
        }
    }
    public function imagePost($image_path, $message, $organization = null)
    {
        if (!$this->access_token) {
            info('no access token');
            abort(404, 'Your Linkedin Account Not Connected');
        }
        if ($organization) {
            $author = $organization;
        } else {
            $person_id = $this->getProfile()->id;
            $author = "urn:li:person:" . $person_id;
        }
        $image_title = 'Image';
        $image_description = "Image Description";
        $prepareUrl = "https://api.linkedin.com/v2/assets?action=registerUpload&oauth2_access_token=" . $this->access_token;
        $prepareRequest = [
            "registerUploadRequest" => [
                "recipes" => [
                    "urn:li:digitalmediaRecipe:feedshare-image"
                ],
                "owner" => $author,
                "serviceRelationships" => [
                    [
                        "relationshipType" => "OWNER",
                        "identifier" => "urn:li:userGeneratedContent"
                    ],
                ],
            ],
        ];
        $prepareReponse = $this->curl($prepareUrl, json_encode($prepareRequest), "application/json");
        $uploadURL = json_decode($prepareReponse)->value->uploadMechanism->{"com.linkedin.digitalmedia.uploading.MediaUploadHttpRequest"}->uploadUrl;
        $asset_id = json_decode($prepareReponse)->value->asset;
        $client = new Client();
        $client->request('PUT', $uploadURL, [
            'headers' => ['Authorization' => 'Bearer ' . $this->access_token],
            'body' => fopen($image_path, 'r'),
            'verify' => $this->ssl
        ]);

        $post_url = "https://api.linkedin.com/v2/ugcPosts?oauth2_access_token=" . $this->access_token;
        $request = [
            "author" => $author,
            "lifecycleState" => "PUBLISHED",
            "specificContent" => [
                "com.linkedin.ugc.ShareContent" => [
                    "shareCommentary" => [
                        "text" => $message
                    ],
                    "shareMediaCategory" => "IMAGE",
                    "media" => [
                        [
                            "status" => "READY",
                            "description" => [
                                "text" => substr($image_description, 0, 200),
                            ],
                            "media" => $asset_id,

                            "title" => [
                                "text" => $image_title,
                            ],
                        ]
                    ],
                ],

            ],
            "visibility" => [
                "com.linkedin.ugc.MemberNetworkVisibility" => "PUBLIC",
            ]
        ];
        $post = $this->curl($post_url, json_encode($request), "application/json");
        $post = json_decode($post);
        if (isset($post->id)) {
            info('Linkedin Post Success');
            return 'Success';
        } else {
            info($post->message);
            return 'Failed';
        }
    }

    public function curl($url, $parameters, $content_type, $post = true)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->ssl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if ($post) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
        }
        curl_setopt($ch, CURLOPT_POST, $post);
        $headers = [];
        $headers[] = "Content-Type: {$content_type}";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        return $result;
    }
}
