<?php

namespace App\SocialPoster;

use App\Models\Business;
use App\Models\BusinessSocialKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PinterestPoster
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
        $this->app_id = env('TRAIVIS_PINTEREST_API_KEY');
        $this->app_secret = env('TRAIVIS_PINTEREST_API_KEY_SECRET');
        $this->scopes = env('TRAIVIS_PINTEREST_SCOPES');
        $this->callback = env('TRAIVIS_PINTEREST_REDIRECT_URL');
        $this->csrf = random_int(111111, 99999999999);
        $this->ssl = false;
        // dd($this->app_id);
        //TODO: uncomment the below lines in production
        $this->access_token = optional(BusinessSocialKeys::where('business_id', $business_id)
            ->where('social_type', 'pinterest')->first())->oauth_token;

        //sandbox access token
        // $this->access_token = "pina_AMAQXIYWADVAAAQAGBAEODVICJJNPBQBACGSO7B6VLUI62PNV6RMF27U7KPSC7PKBZJFPKKLF4QW5AGS5MCDVFOVAGNFU7QA";
    }

    public function generateUrl()
    {
        session()->put('pinterest_csrf', $this->csrf);
        $authURL =  "https://www.pinterest.com/oauth/?response_type=code&client_id=" . $this->app_id . "&redirect_uri=" . $this->callback . "&state=" . $this->csrf . "&scope=" . $this->scopes;
        return redirect($authURL);
    }

    public function callback(Request $request)
    {
        if ($request->get('state') != session('pinterest_csrf')) {
            abort(404, 'Invalid Request');
        }
        $code = $request->get('code');
        $url = "https://api.pinterest.com/v5/oauth/token";
        $params = [
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $this->callback,
        ];
        $response = Http::asForm()
            ->withBasicAuth($this->app_id, $this->app_secret)
            ->post($url, $params);
        $accessToken = $response->json('access_token');
        //update access token in DB
        if ($key = BusinessSocialKeys::firstOrCreate([
            'business_id' => session('business_id'),
            'social_type' => 'pinterest',
        ])) {
            $key->update([
                'business_id' => session('business_id'),
                'social_type' => 'pinterest',
                'oauth_token' => $accessToken,
            ]);
        }
        if (!$accessToken) {
            abort(404, 'No Access Token Found');
        }
        //redirect to privacy page
        $business = Business::find(session('business_id'));
        return redirect(route($business->business_type . '-dashboard-privacy'));
    }

    public function getBoards()
    {
        $pinterestSocialKey = BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'pinterest')->first();
        if (!$pinterestSocialKey) {
            abort(404, 'Your Pinterest Account Not Connected');
        }
        $url = "https://api.pinterest.com/v5/boards";
        $response = Http::acceptJson()
            ->withToken($this->access_token)
            ->get($url);
        $boards = $response->json();
        return $boards;
    }

    public function getBoardSections($boardId)
    {
        $pinterestSocialKey = BusinessSocialKeys::where('business_id', session('business_id'))
            ->where('social_type', 'pinterest')->first();
        if (!$pinterestSocialKey) {
            abort(404, 'Your Pinterest Account Not Connected');
        }
        $url = "https://api.pinterest.com/v5/boards/" . $boardId . "/sections";
        $response = Http::acceptJson()
            ->withToken($this->access_token)
            ->get($url);
        $boards = $response->json();
        return $boards;
    }

    public function createPin($image, $content, $boardId, $boardSectionId = null)
    {
        /* TODO::
        1.handle image upload and get image_path from uploaded image
        2.comment testing data and use data that came from $request
        3.remove sandbox from url and change configuration in traivis Pinterest APP
        */
        // $image_path = public_path('/media/certificate/2021/1/download-1.png'); // this will be path of the uploaded image
        // $boardId = "1028861546061113818";
        // $boardSectionId = "5286427063916488481";
        // $title = 'Test';
        // $content = 'Test';
        $image = file_get_contents($image);
        $title = $content;

        $url = "https://api-sandbox.pinterest.com/v5/pins";
        $params = [
            "title" => $title,
            "description" => $content,
            "board_id" => $boardId,
            "board_section_id" => $boardSectionId,
            "media_source" => [
                "source_type" => "image_base64",
                "content_type" => "image/jpeg",
                "data" => base64_encode($image)
            ]
        ];
        $access_token = "pina_AMAQXIYWADVAAAQAGBAEODWZTCZZHBYBACGSPNESNQIKAHR2GN4CG5BJ6VEIG4H4YMHF3OFF2BF4EMZT2GSHIFJ3PJJJXGQA";
        $response = Http::acceptJson()
            ->withToken($access_token)
            ->post($url, $params);
        return $response->json();
    }
}
