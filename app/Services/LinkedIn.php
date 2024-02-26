<?php

namespace App\Services;

use GuzzleHttp\Client;

class LinkedIn
{
    protected $app_id;
    protected $app_secret;
    protected $callback;
    protected $csrf;
    protected $scopes;
    protected $ssl;

    public function __construct(string $app_id, string $app_secret, string $callback, string $scopes, bool $ssl = true)
    {
        $this->app_id = $app_id;
        $this->app_secret = $app_secret;
        $this->scopes = $scopes;
        $this->csrf = random_int(111111, 99999999999);
        $this->callback = $callback;
        $this->ssl = $ssl;
    }
    public function getAuthUrl()
    {
        session()->put('linkedin_csrf', $this->csrf);
        // $_SESSION['linkedin_csrf'] = $this->csrf;
        return "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=" . $this->app_id . "&redirect_uri=" . $this->callback . "&state=" . $this->csrf . "&scope=" . $this->scopes;
    }
    public function getAccessToken($code)
    {
        $url = "https://www.linkedin.com/oauth/v2/accessToken";
        $params = [
            'client_id' => $this->app_id,
            'client_secret' => $this->app_secret,
            'redirect_uri' => $this->callback,
            'code' => $code,
            'grant_type' => 'authorization_code',
        ];
        $response = $this->curl($url, http_build_query($params), "application/x-www-form-urlencoded");
        $accessToken = json_decode($response)->access_token;
        return $accessToken;
    }
    public function getPerson($accessToken)
    {
        $url = "https://api.linkedin.com/v2/me?projection=(id,firstName,lastName,profilePicture(displayImage~:playableStreams))&oauth2_access_token=" . $accessToken;
        $params = [];
        $response = $this->curl($url, http_build_query($params), "application/x-www-form-urlencoded", false);
        // dd($accessToken,$response);
        $person = json_decode($response);
        return $person;
    }
    public function getPersonID($accessToken)
    {
        $url = "https://api.linkedin.com/v2/me?oauth2_access_token=" . $accessToken;
        $params = [];
        $response = $this->curl($url, http_build_query($params), "application/x-www-form-urlencoded", false);
        // dd($accessToken,$response);
        $personID = json_decode($response)->id;
        return $personID;
    }
    public function getCompanyPages($accessToken)
    {
        // $company_pages = "https://api.linkedin.com/v1/companies?format=json&is-company-admin=true&oauth2_access_token=" . trim($accessToken);
        $company_pages = "https://api.linkedin.com/v2/organizationAcls?q=roleAssignee&oauth2_access_token=" . trim($accessToken);
        $pages = $this->curl($company_pages, json_encode([
            'role' => 'DIRECT_SPONSORED_CONTENT_POSTER'
        ]), "application/json", false);
        return json_decode($pages);
    }
    public function linkedInTextPost($accessToken, $author, $message, $visibility = "PUBLIC")
    {
        $post_url = "https://api.linkedin.com/v2/ugcPosts?oauth2_access_token=" . $accessToken;
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
                "com.linkedin.ugc.MemberNetworkVisibility" => $visibility,
            ]
        ];
        $post = $this->curl($post_url, json_encode($request), "application/json", true);
        return $post;
    }
    public function linkedInLinkPost($accessToken, $author, $message, $link_title, $link_desc, $link_url, $visibility = "PUBLIC")
    {
        $post_url = "https://api.linkedin.com/v2/ugcPosts?oauth2_access_token=" . $accessToken;
        $request = [
            "author" => $author,
            "lifecycleState" => "PUBLISHED",
            "specificContent" => [
                "com.linkedin.ugc.ShareContent" => [
                    "shareCommentary" => [
                        "text" => $message
                    ],
                    "shareMediaCategory" => "ARTICLE",
                    "media" => [
                        [
                            "status" => "READY",
                            "description" => [
                                "text" => substr($link_desc, 0, 200),
                            ],
                            "originalUrl" => $link_url,

                            "title" => [
                                "text" => $link_title,
                            ],
                        ]
                    ],
                ],

            ],
            "visibility" => [
                "com.linkedin.ugc.MemberNetworkVisibility" => $visibility,
            ]
        ];

        $post = $this->curl($post_url, json_encode($request), "application/json", true);
        return $post;
    }

    public function linkedInPhotoPost($accessToken, $author, $message, $image_path, $image_title, $image_description, $visibility = "PUBLIC")
    {

        $prepareUrl = "https://api.linkedin.com/v2/assets?action=registerUpload&oauth2_access_token=" . $accessToken;
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
            'headers' => ['Authorization' => 'Bearer ' . $accessToken],
            'body' => fopen($image_path, 'r'),
            'verify' => $this->ssl
        ]);

        $post_url = "https://api.linkedin.com/v2/ugcPosts?oauth2_access_token=" . $accessToken;
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
                "com.linkedin.ugc.MemberNetworkVisibility" => $visibility,
            ]
        ];
        $post = $this->curl($post_url, json_encode($request), "application/json");
        return $post;
    }
    public function linkedInMultiplePhotosPost($accessToken,$author, $message, array $images, $visibility = "PUBLIC")
    {
        // Posting
        $post_url = "https://api.linkedin.com/v2/ugcPosts?oauth2_access_token=" . $accessToken;
        $request = [
            "author" => $author,
            "lifecycleState" => "PUBLISHED",
            "specificContent" => [
                "com.linkedin.ugc.ShareContent" => [
                    "shareCommentary" => [
                        "text" => $message
                    ],
                    "shareMediaCategory" => "IMAGE",
                    "media" => [],
                ],

            ],
            "visibility" => [
                "com.linkedin.ugc.MemberNetworkVisibility" => $visibility,
            ]
        ];


        // Adding Medias
        $media = [];
        foreach ($images as $key => $image) {
            // Preparing Request
            $prepareUrl = "https://api.linkedin.com/v2/assets?action=registerUpload&oauth2_access_token=" . $accessToken;
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
            $images[$key]['asset_id'] = $asset_id;
            $client = new Client();
            $client->request('PUT', $uploadURL, [
                'headers' => ['Authorization' => 'Bearer ' . $accessToken],
                'body' => fopen($image['image_path'], 'r'),
                'verify' => $this->ssl
            ]);
            $media[$key]["status"] = "READY";
            $media[$key]["description"]["text"] = substr($image["desc"], 0, 200);
            $media[$key]["media"] = $asset_id;
            $media[$key]["title"]["text"] = substr($image["title"], 0, 200);
        }
        $request['specificContent']['com.linkedin.ugc.ShareContent']["media"] = array_values($media);
        $post = $this->curl($post_url, json_encode($request), "application/json");
        return $post;
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