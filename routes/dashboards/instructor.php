<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Business\InstructorController;
use App\Models\BusinessSocialKeys;
use App\Models\SocialPostDate;
use App\SocialPoster\LinkedInPoster;
use App\SocialPoster\PinterestPoster;
use Illuminate\Support\Facades\Http;

Route::group(['prefix' => 'instructor-dashboard'], function () {
    Route::get('/', [InstructorController::class, 'index'])->name('instructor-dashboard');
    Route::get('/courses', [InstructorController::class, 'courses'])->name(
        'instructor-dashboard-courses',
    );

    Route::get('/students', [InstructorController::class, 'students'])->name(
        'instructor-dashboard-students',
    );
    Route::get('/freelance', [InstructorController::class, 'freelance'])->name(
        'instructor-dashboard-freelance',
    );
    Route::get('/followers', [InstructorController::class, 'followers'])->name(
        'instructor-dashboard-followers',
    );
    Route::get('/rank', [InstructorController::class, 'rank'])->name('instructor-dashboard-rank');

    Route::get('/calendar', [InstructorController::class, 'calender'])->name(
        'instructor-dashboard-calender',
    );
    Route::get('/rewards', [InstructorController::class, 'rewards'])->name(
        'instructor-dashboard-rewards',
    );
    Route::get('/mkt_manager', [InstructorController::class, 'mkt_manager'])->name(
        'instructor-dashboard-mkt_manager',
    );
    Route::get('/help', [InstructorController::class, 'help'])->name('instructor-dashboard-help');

    Route::get('/privacy', [InstructorController::class, 'privacy'])->name(
        'instructor-dashboard-privacy',
    );

    Route::get('/courses/details/', [InstructorController::class, 'courseDetails'])->name(
        'instructor-dashboard-courseDetails',
    );
    //    Route::get('/courses/details/{id?}', [InstructorController::class, 'courseDetails'])->name(
    //        'instructor-dashboard-courseDetails'
    //    );

    Route::get('/courses/{id?}/assignments', [InstructorController::class, 'courseAssignments'])->name(
        'instructor-dashboard-courseAssignments',
    );

    Route::get('/courses/{id?}/lectures', [InstructorController::class, 'courseLectures'])->name(
        'instructor-dashboard-lectures',
    );

    Route::get('/courses/{id?}/sections', [InstructorController::class, 'courseSections'])->name(
        'instructor-dashboard-sections',
    );

    Route::get('/courses/{id?}/quizes', [InstructorController::class, 'courseQuizes'])->name(
        'instructor-dashboard-quizes',
    );
    //Twitter Integration
    Route::get('twitter/login', [
        'as' => 'twitter.login',
        static function () {
            $token = Twitter::getRequestToken(route('twitter.callback'));

            if (isset($token['oauth_token_secret'])) {
                $url = Twitter::getAuthenticateUrl($token['oauth_token']);

                Session::put('oauth_state', 'start');
                Session::put('oauth_request_token', $token['oauth_token']);
                Session::put('oauth_request_token_secret', $token['oauth_token_secret']);

                return Redirect::to($url);
            }

            return Redirect::route('twitter.error');
        },
    ]);
    Route::get('twitter/callback', [
        'as' => 'twitter.callback',
        static function () {
            // You should set this route on your Twitter Application settings as the callback
            // https://apps.twitter.com/app/YOUR-APP-ID/settings
            if (Session::has('oauth_request_token')) {
                $twitter = Twitter::usingCredentials(
                    session('oauth_request_token'),
                    session('oauth_request_token_secret'),
                );
                $token = $twitter->getAccessToken(request('oauth_verifier'));

                if (!isset($token['oauth_token_secret'])) {
                    return Redirect::route('twitter.error')->with(
                        'flash_error',
                        'We could not log you in on Twitter.',
                    );
                }

                // use new tokens
                $twitter = Twitter::usingCredentials(
                    $token['oauth_token'],
                    $token['oauth_token_secret'],
                );
                $credentials = $twitter->getCredentials();

                if (is_object($credentials) && !isset($credentials->error)) {
                    // $credentials contains the Twitter user object with all the info about the user.
                    // Add here your own user logic, store profiles, create new users on your tables...you name it!
                    // Typically you'll want to store at least, user id, name and access tokens
                    // if you want to be able to call the API on behalf of your users.

                    // This is also the moment to log in your users if you're using Laravel's Auth class
                    // Auth::login($user) should do the trick.

                    Session::put('access_token', $token);

                    return Redirect::to('/')->with(
                        'notice',
                        'Congrats! You\'ve successfully signed in!',
                    );
                }
            }

            return Redirect::route('twitter.error')->with(
                'error',
                'Crab! Something went wrong while signing you up!',
            );
        },
    ]);
    Route::get('twitter/error', [
        'as' => 'twitter.error',
        function () {
            // Something went wrong, add your own error handling here
        },
    ]);
    Route::get('twitter/logout', [
        'as' => 'twitter.logout',
        function () {
            Session::forget('access_token');

            return Redirect::to('/')->with('notice', 'You\'ve successfully logged out!');
        },
    ]);
    Route::post('twitter/webhook', [
        'as' => 'twitter.webhook',
        function () {
            if (request()->has('crc_token')) {
                return response()->json(
                    ['response_token' => Twitter::crcHash(request()->crc_token)],
                    200,
                );
            }

            // Your webhook logic goes here
        },
    ]);

    //LinkedIn Integration
    Route::get('linkedin/login', [LinkedInPoster::class, 'generateUrl'])->name('linkedin_url');
    Route::get('linkedin/textPost/{type?}', [LinkedInPoster::class, 'textPost'])->name(
        'linkedin_text_post',
    );
    Route::get('linkedin/imagePost/{type?}', [LinkedInPoster::class, 'imagePost'])->name(
        'linkedin_image_post',
    );
    Route::get('linkedin/companyPages', [LinkedInPoster::class, 'getCompanyPages'])->name(
        'linkedin_company_pages',
    );

    //Pinterest Integration
    Route::get('pinterest/login', [PinterestPoster::class, 'generateUrl'])->name('pinterest_url');
    Route::get('pinterest/boards', [PinterestPoster::class, 'getBoards'])->name('pinterest_boards');
    Route::get('pinterest/boards/{boardId}/sections', [
        PinterestPoster::class,
        'getBoardSections',
    ])->name('pinterest_boards_sections');
    // Route::post('pinterest/create/pin', [PinterestPoster::class, 'createPin'])->name('pinterest_createPin');
    Route::get('test/social', function () {
        $publishPost = function ($teaserSocialMedia) {
            /* if ($teaserSocialMedia->social->social_name == 'pinterest') {
                $pinterestPoster = new PinterestPoster();
                $pinterestPoster->createPin(
                    $teaserSocialMedia->originalPost->image,
                    $teaserSocialMedia->originalPost->post_txt,
                    $teaserSocialMedia->board_id,
                    $teaserSocialMedia->board_section_id
                );
            } */
            if ($teaserSocialMedia->social->social_name == 'linkedin') {
                $linkedinPoster = new LinkedInPoster();
                if ($teaserSocialMedia->originalPost->image) {
                    $linkedinPoster->imagePost(
                        $teaserSocialMedia->originalPost->image,
                        $teaserSocialMedia->originalPost->post_txt,
                    );
                } else {
                    $linkedinPoster->textPost($teaserSocialMedia->originalPost->post_txt);
                }
            }
        };
        $dates = SocialPostDate::where('publish_date', '<=', now())
            ->whereStatus('pending')
            ->get();
        foreach ($dates as $date) {
            $publishPost($date->teaserSocialMedia);
        }
    });
});
