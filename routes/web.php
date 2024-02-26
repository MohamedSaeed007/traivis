<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\Admin\EmailTemplatesController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\WebsiteLanguageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BusinessSpaceController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Company\BiddingController;
use App\Http\Controllers\Company\CommonController;
use App\Http\Controllers\Company\CourseController;
use App\Http\Controllers\Company\DownloadGraphsController;
use App\Http\Controllers\Company\GraphsController;
use App\Http\Controllers\Company\ProfileController;
use App\Http\Controllers\Company\ProgressGraphController;
use App\Http\Controllers\Company\RequiredCourseController;
use App\Http\Controllers\Company\RewardsController;
use App\Http\Controllers\Company\SettingsController;
use App\Http\Controllers\Company\SubContractorController;
use App\Http\Controllers\Company\TrainingMatrixController;
use App\Http\Controllers\Company\UpcomingCoursesController;
use App\Http\Controllers\Company\WorkForceController;
use App\Http\Controllers\CompanyRequestController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\CustomFilepondController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\EarningController;
use App\Http\Controllers\ExtendController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FunctionalityController;
use App\Http\Controllers\GatewayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImpersonateController;
use App\Http\Controllers\InstallationController;
use App\Http\Controllers\IPNController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LectureMeetingController;
use App\Http\Controllers\LiveScheduleController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SearchController;

//use App\Http\Controllers\SocialAuth\LinkedInPoster;
use App\Http\Controllers\SocialAuth\SocialController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrainersController;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VimeoController;
use App\Http\Livewire\Login;
use App\Http\Livewire\Register;
use App\Http\Livewire\StudentCertificateView;
use App\Models\Bidding;
use App\Models\Business;
use App\Models\Lecture;
use Atymic\Twitter\Facade\Twitter;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Models\BusinessCalenderEvent;
use App\Models\BusinessSocialKeys;
use App\Models\SocialPostDate;
use App\SocialPoster\FacebookPoster;
use App\SocialPoster\FacebookRepository;
use Illuminate\Support\Facades\Auth;
use App\SocialPoster\LinkedInPoster;
use App\SocialPoster\PinterestPoster;
use App\SocialPoster\TwitterPoster;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('register', 'AuthController@register');
//Route::get('testtt', function () {
//    $user = \App\Models\User::with('businesses')->find(1);
//
//    $roleIDs = collect($user->businesses()->get())
//        ->pluck('pivot.role_id')
//        ->unique()
//        ->toArray();
//
//    $roles = \Spatie\Permission\Models\Role::whereIn('id', $roleIDs)->pluck('name', 'id');
//    //    $roles = \Spatie\Permission\Models\Role::wherein($roleIDs);
//
//    return $roles;
//});

//Route::get('testid3', function () {
//    $id3 = new getID3();
//    $data = $id3->analyze(app_path('test.mp4'));
//    return $data;
//});

Route::withoutMiddleware('businessMiddleware')->group(function () {
    Route::get('certificate/{certificate}', StudentCertificateView::class)->name('certificate.view');
    Route::get('text-linkedin', function () {
        $business_id = 1;
        $linkedinPoster = new LinkedInPoster($business_id);
        $linkedinPoster->post('without mage', null, 'urn:li:organization:91024389');
    });
    Route::get('/tweet', function () {
        $business_id = 1;
        $twitterPoster = new TwitterPoster($business_id);
        // $image_path = public_path('\uploads\placeholder-image.png');
        $image_path = null;
        $content = 'without mage';
        $twitterPoster->tweet($content, $image_path);
    });
    Route::get('session-flush', function () {
        session()->flush();
        return redirect()->route('home');
    });
});

//FilePond Restore
Route::middleware(['auth'])->get(config('filepond.route_prefix') . '/api/restore', [
    CustomFilepondController::class,
    'restoreMedia',
]);

//My Space
Route::get('business-space', [BusinessSpaceController::class, 'choose'])->name('business-space');

//Route::get('testid3', function () {
//    $id3 = new getID3();
//    $data = $id3->analyze(app_path('test.mp4'));
//    return $data;
//});

//Common Routes
//Route::get('saveCalenderEvent', function (Request $request) {
//    $event_hour = $request->eventTime == '' ? '1' : $request->eventTime;
//    BusinessCalenderEvent::create([
//        'event_type' => $request->eventType,
//        'name' => $request->eventTitle,
//        'description' => $request->eventDesc,
//        'event_date' => $request->eventDate,
//        'event_hour' => $event_hour,
//        'business_id' => session('business_id'),
//    ]);
//});
//End Common Routes
Route::post('/tinyMCE/upload', [UploadImageController::class, 'tinyMCEUpload'])->name(
    'tinyMCEUpload_upload',
);

Route::get('educators', [HomeController::class, 'educators'])->name('educators');
//Facebook Callback
Route::get('facebook/callback', [FacebookPoster::class, 'callback'])->name('facebook_callback');
//Twitter Callback
Route::get('twitter/callback', [TwitterPoster::class, 'callback'])->name('twitter_callback');
//Linkedin Callback
Route::get('linkedin/callback', [LinkedInPoster::class, 'callback'])->name('linkedin_callback');
//Pinterest Callback
Route::get('pinterest/callback', [PinterestPoster::class, 'callback'])->name('pinterest_callback');
//My Space
Route::get('business-space', [BusinessSpaceController::class, 'choose']);

Route::get('register/{userType?}', Register::class)
    ->name('register')
    ->middleware('guest');

//impersonate
Route::get('impersonate/{userId}/{businessId?}/{url?}/{whereWas?}', [
    ImpersonateController::class,
    'impersonate',
])->name('impersonate');
Route::get('impersonate-leave', [ImpersonateController::class, 'impersonateLeave'])->name(
    'impersonate-leave',
);

Route::group(['prefix' => 'payments'], function () {
    //invoices
    Route::get('/order/{order}/invoice', [PaymentController::class, 'orderInvoice'])->name(
        'order-invoice',
    );
    Route::get('/transaction/{transaction}/invoice', [
        PaymentController::class,
        'transactionInvoice',
    ])->name('transaction-invoice');
    Route::get('/transaction/invoice/{transaction}', [
        PaymentController::class,
        'transactionInvoiceForUser',
    ])->name('transaction-invoice-for-user');
});
Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'payments'], function () {
        Route::get('/', [PaymentController::class, 'studentPayments'])->name('student-payments');
        Route::get('/checkout/{planId?}', [PaymentController::class, 'checkoutPage'])->name(
            'checkout.page',
        );
        Route::post('/stripe/purchase', [PaymentController::class, 'purchase'])->name(
            'checkout.purchase',
        );
        Route::get('/stripe/purchase/free', [PaymentController::class, 'purchaseFree'])->name(
            'checkout.purchase_free',
        );
        Route::get('/success/{order}', [PaymentController::class, 'successPage'])->name(
            'checkout.success',
        );
        Route::get('/stripe/payout', [PaymentController::class, 'stripePayout'])->name(
            'stripe.payout',
        );
        Route::get('/stripe/account/create', [PaymentController::class, 'stripeCreateConnectedAccount'])->name(
            'stripe.account.create',
        );
        Route::get('/stripe/account/return', [PaymentController::class, 'stripeAccountLinkReturn'])->name(
            'stripe.account.return',
        );
        Route::get('/stripe/account/reauth', [PaymentController::class, 'stripeAccountLinkReauth'])->name(
            'stripe.account.reauth',
        );
        Route::get('/stripe/{transaction}/transfer', [PaymentController::class, 'stripeTransfer'])->name(
            'stripe.transfer',
        );
    });
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/business-space', [BusinessSpaceController::class, 'choose'])->name('business-space');
    Route::group(['prefix' => 'checkout'], function () {
        /* Route::post('bank-transfer', [GatewayController::class, 'bankPost'])->name(
            'bank_transfer_submit'
            );
            Route::post('paypal', [GatewayController::class, 'paypalRedirect'])->name('paypal_redirect');
            Route::post('offline', [GatewayController::class, 'payOffline'])->name('pay_offline'); */
    });
    Route::group(['prefix' => 'create'], function () {
        Route::view('/blog', 'homes.social.blog.create')->name('create-blog');
    });
});

Route::get('clear', [HomeController::class, 'clearCache'])->name('clear_cache');
// Route::get('/loginas/{key}', [\App\Http\Controllers\LoginController::class,'loginasadmin']);

Route::get('installations', [InstallationController::class, 'installations'])->name('installations');
Route::get('installations/step/2', [InstallationController::class, 'installationsTwo'])->name(
    'installations_step_two',
);
Route::post('installations/step/2', [InstallationController::class, 'installationPost']);
Route::get('installations/step/final', [InstallationController::class, 'installationFinal'])->name(
    'installation_final',
);

/**
 * Authentication
 */

Route::post('logout', [AuthController::class, 'logoutPost'])->name('logout');

/*Route::get('register/{user_type?}', [AuthController::class, 'register'])
    ->name('user_register')
    ->middleware('guest');*/
Route::post('register', [AuthController::class, 'registerPost'])->name('register');

Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot_password');
Route::post('forgot-password', [AuthController::class, 'sendResetToken'])->name('forgot-password-post');
Route::get('forgot-password/reset/{token}', [AuthController::class, 'passwordResetForm'])->name(
    'reset_password_link',
);
Route::post('forgot-password/reset/{token}', [AuthController::class, 'passwordReset']);

//New Profiles
Route::get('p/{id}', [UserController::class, 'userProfile'])->name('user-profile-social'); //User Profile
Route::get('b/{id}', [UserController::class, 'businessProfile'])->name('business-profile-social'); //Business Profile

//posts
Route::get('post/{id}', [PostController::class, 'post'])->name('post.show');

//Businesses Dashboards-------------------------------------/////////////////////////////

//Instructor Dashboard
Route::group([], base_path('routes/dashboards/instructor.php'));

//Institute Dashboard
Route::group([], base_path('routes/dashboards/institute.php'));

//Enterprise Dashboard
Route::group([], base_path('routes/dashboards/enterprise.php'));
//End Businesses Dashboards-------------------------------------/////////////////////////////

////Common
//Route::get('/profile/{id}/', [\App\Http\Controllers\UserController::class,'profile'])->name('profile');

//User
Route::get('/p/{id}/courses', [UserController::class, 'profileUserCourses'])->name(
    'user-profile-courses',
);
Route::get('/p/{id}/rewards', [UserController::class, 'profileUserRewards'])->name(
    'user-profile-rewards',
);
Route::get('/p/{id}/analytics', [UserController::class, 'profileUserAnalytics'])->name(
    'user-profile-analytics',
);
Route::get('/p/{id}/businesses', [UserController::class, 'profileUserBusinesses'])->name(
    'user-profile-businesses',
);
Route::get('/p/{id}/karma', [UserController::class, 'profileUserKarma'])->name('user-profile-karma');
Route::get('/p/{id}/influencer', [UserController::class, 'profileUserInfluencer'])->name(
    'user-profile-influencer',
);

Route::get('/p/{id}/connections', [UserController::class, 'profileUserConnections'])->name(
    'user-profile-connections',
);
Route::get('/b/{id}/followers', [UserController::class, 'busunessFollowers'])->name(
    'busuness-followers',
);
Route::get('/p/{id}/BookMark', [UserController::class, 'profileUserBookMark'])->name(
    'user-profile-book-mark',
);

//Instructor
Route::get('/profile/{id}/instructor-courses', [
    UserController::class,
    'profileInstructorCourses',
])->name('profile-instructor-courses');
Route::get('/profile/{id}/instructor-institutes', [
    UserController::class,
    'profileInstructorInstitutes',
])->name('profile-instructor-institutes');

//Institute
Route::get('/profile/{id}/institute-courses', [UserController::class, 'profileInstituteCourses'])->name(
    'profile-institute-courses',
);
Route::get('/profile/{id}/institute-instructors', [
    UserController::class,
    'profileInstituteInstructors',
])->name('profile-institute-instructors');

//Enterprise
Route::get('/profile/{id}/employees', [UserController::class, 'profileEnterpriseEmployees'])->name(
    'profile-enterprise-employees',
);
Route::get('/profile/{id}/tenders', [UserController::class, 'profileEnterpriseTenders'])->name(
    'profile-enterprise-tenders',
);

Route::get('review/{id}', [UserController::class, 'review'])->name('review');

Route::get('courses', [HomeController::class, 'courses'])->name('courses');
Route::get('featured-courses', [HomeController::class, 'courses'])->name('featured_courses');
Route::get('popular-courses', [HomeController::class, 'courses'])->name('popular_courses');

Route::get('courses/{slug?}', [\App\Http\Controllers\CourseController::class, 'view'])
    //    ->middleware(['auth'])
    ->name('course');
Route::get('courses/{slug}/lecture/{lecture_id}', [
    \App\Http\Controllers\CourseController::class,
    'lectureView',
])->name('single_lecture');
Route::get('courses/{slug}/assignment/{assignment_id}', [
    \App\Http\Controllers\CourseController::class,
    'assignmentView',
])->name('single_assignment');
Route::get('courses/{slug}/quiz/{quiz_id}', [QuizController::class, 'quizView'])->name('single_quiz');

Route::get('topics', [CategoriesController::class, 'home'])->name('categories');
Route::get('topics/{category_slug}', [CategoriesController::class, 'show'])->name('category_view');
//Get Topics Dropdown for course creation category select
Route::post('get-topic-options', [CategoriesController::class, 'getTopicOptions'])->name(
    'get_topic_options',
);

Route::post('courses/free-enroll', [\App\Http\Controllers\CourseController::class, 'freeEnroll'])->name(
    'free_enroll',
);
Route::get('search', [SearchController::class, 'index'])->name('search');
Route::middleware(['auth'])->group(function () {
    Route::view('/conversations', 'homes.social.layouts.chat-conversations')->name('chat-conversations');
});

//Attachment Download
Route::get('attachment-download/{hash}', [
    \App\Http\Controllers\CourseController::class,
    'attachmentDownload',
])->name('attachment_download');

Route::get('payment-thank-you', [PaymentController::class, 'thankYou'])->name('payment_thank_you_page');

Route::get('user-profile/{user_id}', [HomeController::class, 'userProfile'])->name('user_profile');

Route::group(['prefix' => 'login'], function () {
    Route::view('popup-success', 'login-popup')->name('login-popup-success');
    Route::get('/', Login::class)
        ->name('login')
        ->middleware('guest');
    Route::post('/', [AuthController::class, 'loginPost']);
    //Social login route
    Route::get('facebook', [FacebookPoster::class, 'generateUrl'])->name('facebook_redirect');

    Route::get('google', [AuthController::class, 'redirectGoogle'])->name('google_redirect');
    Route::get('google/callback', [AuthController::class, 'callbackGoogle'])->name('google_callback');

    Route::get('twitter', [TwitterPoster::class, 'generateUrl'])->name('twitter_redirect');

    //    Route::get('/auth/redirect', function () {
    //
    //        if (!is_null(session('facebook_token'))) {
    //            return redirect()->route('post');
    //        }
    //
    //        return Socialite::driver('facebook')
    //            ->usingGraphVersion('v15.0')
    //            ->scopes([
    //                'pages_show_list',
    //                'pages_read_engagement',
    //                'pages_read_user_content',
    //                'pages_manage_posts',
    //                'public_profile'
    //            ])
    //            ->redirect();
    //    });
    //
    //    Route::get('/auth/callback', function () {
    //
    //        $user = Socialite::driver('facebook')->user();
    //        session(['facebook_token' => $user->token]);
    //        return redirect()->route('post');
    //    });
    //    Route::get('/auth/post', function () {
    //
    //        $fb = app(Facebook::class);
    //
    //
    //        if (!is_null(session('facebook_token'))) {
    ////        $response = $fb->get('/me/accounts', session('facebook_token'));
    ////        print_r($response->getGraphEdge()->asArray());
    //
    //            $message = time();
    //            $page_id = 165805020293093;
    //            $page_access_token = 'EABSi6abtA1YBACC0zZAPkPn2uOHKCl669IMo9FVSfgNNgQUi3nA4yVw78AZBm8iZC5h2ziyOrApYekSVmc5nZCVI1hqim0VRohDhDfjZBlXO28lstsi0rCOS4O2IHR2K9zSBO5NbJyDasb5WyNqW2coZC2gR5KyzCpBzVdjpYMPHQAg5i6cvooDA6r0b0AsNZB8kpjZAnoiGgAZDZD';
    //
    //            $post = $fb->post('/'.$page_id.'/feed', array('message' => $message), $page_access_token);
    //            dd($post);
    //
    //            $fb->setDefaultAccessToken(session('facebook_token'));
    //            dd($fb->getDefaultAccessToken());
    //        }
    //
    //    })->name('post');

    // Route::get('linkedin', [AuthController::class, 'redirectLinkedIn'])->name('linkedin_redirect');
    // Route::get('linkedin/callback', [AuthController::class, 'callbackLinkedIn'])->name(
    //     'linkin_callback'
    // );
});

Route::group(['middleware' => ['auth']], function () {
    Route::post('change_business_img', [BusinessController::class, 'changeImage'])->name(
        'post.business.image',
    );
    //    Route::get('join-lecture/{lecture:url_lecture}', function (Lecture $lecture) {
    Route::get('join-lecture/{lecture:url_lecture}', LectureMeetingController::class)->name(
        'join_url_lecture',
    );
    Route::get('join-lecture11/{lecture}', function ($lecture) {
        abort(
            401,
            __(
                'You do not have access to this lecture. Please contact the instructor for further information.',
            ),
        );
        //        abort(
        //            403,
        //            __(
        //                'This lecture has not started yet. Please check back in X minutes for the lecture to begin.'
        //            )
        //        );
        //        abort(419, __('This lecture has ended. Thank you for attending!'));

        $business_id = session('business_id');
        $is_instructor = !is_null($business_id) && $business_id == $lecture->course->business_id;

        if ($lecture->course->students->where('id', Auth::user()->id)->first() || $is_instructor) {
            return view('homes.social.layouts.lecture-meeting', compact('lecture'));

            //            $business_id = session('business_id');
            //            if (!is_null($business_id) && $business_id == $lecture->course->business_id) {
            //                dd('this is instructor interface');
            //            }

            dd($lecture->userAttributes(Auth::user()->id));

            //            $lecture->users()->syncWithoutDetaching([
            //                Auth::user()->id => ['mute' => false]
            //            ]);

            dump(
                $lecture
                    ->load([
                        'users' => function ($query) {
                            $query->select('users.id', 'users.name');
                            $query->withPivot('muted');
                        },
                    ])
                    ->toArray(),
            );

            $lecture->muteUser(Auth::user());

            dd(
                $lecture
                    ->load([
                        'users' => function ($query) {
                            $query->select('users.id', 'users.name');
                            $query->withPivot('muted');
                        },
                    ])
                    ->toArray(),
            );

            //
            //            dump($lecture);

            //            $lecture->users()->syncWithoutDetaching([
            //                Auth::user()->id => ['mute' => false]
            //            ]);

            dd([
                'course' => $lecture->course->title,
                'lecture' => $lecture->title,
                'status' => 'User is enrolled in the course',
            ]);
            $now = Carbon::createFromTime();
            dd(
                $now->toDateTimeString(),
                $now
                    ->clone()
                    ->addMinutes($lecture->drip_days * 60)
                    ->toDateTimeString(),
            );
            dd($lecture->drip_datetime->isAfter(now()));
            dd('the user is a student in this course');
        } else {
            abort(401);
        }
    })->name('join_url_lecture22');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('no-access', [\App\Http\Controllers\Admin\UserController::class, 'noAcess'])->name(
        'no-access',
    );

    Route::get('messages', [MessageController::class, 'index'])->name('messages');
    Route::post('get_messages', [MessageController::class, 'getMessages'])->name('get_messages');
    Route::post('search-result', [MessageController::class, 'searchResult']);
    Route::post('send_message', [MessageController::class, 'sendMessage'])->name('send_message');
    Route::post('search-user', [MessageController::class, 'searchUser']);

    Route::post('courses/{slug}/assignment/{assignment_id}', [
        \App\Http\Controllers\CourseController::class,
        'assignmentSubmitting',
    ]);
    Route::get('content_complete/{content_id}', [
        \App\Http\Controllers\CourseController::class,
        'contentComplete',
    ])->name('content_complete');
    Route::post('courses-complete/{course_id}', [
        \App\Http\Controllers\CourseController::class,
        'complete',
    ])->name('course_complete');

    // Route::post('coupon-apply', [\App\Http\Controllers\CartController::class,'couponApply']);
    Route::post('save-review/{course_id?}', [
        \App\Http\Controllers\CourseController::class,
        'writeReview',
    ])->name('save_review');
    Route::post('update-wishlist', [UserController::class, 'updateWishlist'])->name('update_wish_list');

    Route::post('discussion/ask-question', [DiscussionController::class, 'askQuestion'])->name(
        'ask_question',
    );
    Route::post('discussion/reply/{id}', [DiscussionController::class, 'replyPost'])->name(
        'discussion_reply_student',
    );

    Route::post('quiz-start', [QuizController::class, 'start'])->name('start_quiz');
    Route::get('quiz/{id}', [QuizController::class, 'quizAttempting'])->name('quiz_attempt_url');
    Route::post('quiz/{id}', [QuizController::class, 'answerSubmit']);

    //Route::get('quiz/answer/submit', [\App\Http\Controllers\QuizController::class,'answerSubmit'])->name('quiz_answer_submit');
});
// %4!q9)nhYsTT5XR
/**
 * Add and remove to Cart
 */
// Route::post('add-to-cart', [\App\Http\Controllers\CartController::class,'addToCart'])->name('add_to_cart');
// Route::post('remove-cart', [\App\Http\Controllers\CartController::class,'removeCart'])->name('remove_cart');

/**
 * Payment Gateway Silent Notification
 * CSRF verification skipped
 */
Route::group(['prefix' => 'gateway-ipn'], function () {
    Route::post('stripe', [GatewayController::class, 'stripeCharge'])->name('stripe_charge');
    Route::any('paypal/{transaction_id?}', [IPNController::class, 'paypalNotify'])->name(
        'paypal_notify',
    );
});

/**
 * Users,Instructor dashboard area
 */

//test route group
// Route::get('my-courses', [\App\Http\Controllers\CourseController::class,'myCourses'])->name('my_courses');
// Route::get('a-bid/{id}', [\App\Http\Controllers\BiddingController::class,'show'])->name('');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('notification/view', [DashboardController::class, 'view']);
    Route::get('/notifications', [DashboardController::class, 'notifications'])->name('notifications');
    Route::get('/rewards', [\App\Http\Controllers\RewardsController::class, 'index']);

    // trainers

    // Route::get('/message', [\App\Http\Controllers\MessageController::class,'inbox'])->name('message');
    /**
     * Only instructor has access in this group
     */
    Route::group(['middleware' => ['instructor']], function () {
        Route::get('certificate', [CertificateController::class, 'index'])->name('certificate');
        Route::get('certificate/Upload/{id}', [CertificateController::class, 'uploadCertificate'])->name(
            'certificate_upload',
        );
        Route::post('certificate/Upload/{id}', [
            CertificateController::class,
            'uploadCertificateCreate',
        ]);

        Route::post('update-section/{id}', [
            \App\Http\Controllers\CourseController::class,
            'updateSection',
        ])->name('update_section');
        Route::post('delete-section', [
            \App\Http\Controllers\CourseController::class,
            'deleteSection',
        ])->name('delete_section');

        Route::get('coupon/create', [CouponController::class, 'createCoupon'])->name('create_coupon');
        Route::post('coupon/create', [CouponController::class, 'saveCoupon'])->name('save_coupon');
        Route::get('coupons', [CouponController::class, 'index'])->name('coupons');

        Route::get('assingned-courses', [
            \App\Http\Controllers\CourseController::class,
            'assignedCourse',
        ])->name('assingned_courses');
        Route::get('requested-trainer', [
            \App\Http\Controllers\CourseController::class,
            'requestTrainer',
        ])->name('requested-trainer');
        Route::post('status-chage-training-center', [
            \App\Http\Controllers\CourseController::class,
            'statusChageTrainingcenter',
        ]);

        Route::post('status-chage-assigned-user', [
            \App\Http\Controllers\CourseController::class,
            'statusChangesAssignedCourse',
        ]);

        Route::group(['prefix' => 'courses'], function () {
            Route::get('new', [\App\Http\Controllers\CourseController::class, 'create'])->name(
                'create_course',
            );
            Route::post('new', [\App\Http\Controllers\CourseController::class, 'store']);

            Route::get('{course_id}/information', [
                \App\Http\Controllers\CourseController::class,
                'information',
            ])->name('edit_course_information');
            Route::post('{course_id}/information', [
                \App\Http\Controllers\CourseController::class,
                'informationPost',
            ]);

            Route::get('live-schedule/{slug}', [LiveScheduleController::class, 'index']);
            Route::get('create-live-schedule/{slug}', [
                LiveScheduleController::class,
                'createForm',
            ])->name('create_live_schedule');
            Route::post('create-live-schedule/{slug}', [LiveScheduleController::class, 'create'])->name(
                'create_live_schedule_post',
            );
            Route::get('live-schedule/edit/{id}', [LiveScheduleController::class, 'edit']);
            Route::post('live-schedule/edit/{id}', [LiveScheduleController::class, 'update']);

            Route::group(['prefix' => '{course_id}/curriculum'], function () {
                Route::get('', [\App\Http\Controllers\CourseController::class, 'curriculum'])->name(
                    'edit_course_curriculum',
                );
                Route::get('new-section', [
                    \App\Http\Controllers\CourseController::class,
                    'newSection',
                ])->name('new_section');
                Route::post('new-section', [
                    \App\Http\Controllers\CourseController::class,
                    'newSectionPost',
                ]);

                Route::post('new-lecture', [
                    \App\Http\Controllers\CourseController::class,
                    'newLecture',
                ])->name('new_lecture');
                Route::post('update-lecture/{id}', [
                    \App\Http\Controllers\CourseController::class,
                    'updateLecture',
                ])->name('update_lecture');

                Route::post('new-assignment', [CurriculumController::class, 'newAssignment'])->name(
                    'new_assignment',
                );
                Route::post('update-assignment/{id}', [
                    CurriculumController::class,
                    'updateAssignment',
                ])->name('update_assignment');

                Route::group(['prefix' => 'quiz'], function () {
                    Route::post('create', [QuizController::class, 'newQuiz'])->name('new_quiz');
                    Route::post('update/{id}', [QuizController::class, 'updateQuiz'])->name(
                        'update_quiz',
                    );

                    Route::post('{quiz_id}/create-question', [
                        QuizController::class,
                        'createQuestion',
                    ])->name('create_question');
                });
            });

            Route::post('quiz/edit-question', [QuizController::class, 'editQuestion'])->name(
                'edit_question_form',
            );
            Route::post('quiz/update-question', [QuizController::class, 'updateQuestion'])->name(
                'edit_question',
            );
            Route::post('load-quiz-questions', [QuizController::class, 'loadQuestions'])->name(
                'load_questions',
            );
            Route::post('sort-questions', [QuizController::class, 'sortQuestions'])->name(
                'sort_questions',
            );
            Route::post('delete-question', [QuizController::class, 'deleteQuestion'])->name(
                'delete_question',
            );
            Route::post('delete-option', [QuizController::class, 'deleteOption'])->name('option_delete');

            Route::post('edit-item', [\App\Http\Controllers\CourseController::class, 'editItem'])->name(
                'edit_item_form',
            );
            Route::post('delete-item', [
                \App\Http\Controllers\CourseController::class,
                'deleteItem',
            ])->name('delete_item');
            Route::post('curriculum_sort', [CurriculumController::class, 'sort'])->name(
                'curriculum_sort',
            );

            Route::post('delete-attachment', [CurriculumController::class, 'deleteAttachment'])->name(
                'delete_attachment_item',
            );

            Route::post('load-section-items', [
                \App\Http\Controllers\CourseController::class,
                'loadContents',
            ])->name('load_contents');

            Route::get('{id}/pricing', [\App\Http\Controllers\CourseController::class, 'pricing'])->name(
                'edit_course_pricing',
            );
            Route::post('{id}/pricing', [\App\Http\Controllers\CourseController::class, 'pricingSet']);
            Route::get('{id}/drip', [\App\Http\Controllers\CourseController::class, 'drip'])->name(
                'edit_course_drip',
            );
            Route::post('{id}/drip', [\App\Http\Controllers\CourseController::class, 'dripPost']);
            Route::get('{id}/publish', [\App\Http\Controllers\CourseController::class, 'publish'])->name(
                'publish_course',
            );
            Route::post('{id}/publish', [\App\Http\Controllers\CourseController::class, 'publishPost']);
        });
        //instructor bidding request
        Route::get('bidding-request', [
            \App\Http\Controllers\Admin\BiddingController::class,
            'index',
        ])->name('bidding_request');
        Route::post('accept-bidding-request/{id}', [
            \App\Http\Controllers\Admin\BiddingController::class,
            'acceptRequest',
        ]);
        Route::post('coupon-code-create', [
            \App\Http\Controllers\Admin\BiddingController::class,
            'couponCodeCreate',
        ]);
        Route::get('bidding-status-change/{id}', [
            \App\Http\Controllers\Admin\BiddingController::class,
            'statusChange',
        ]);
        Route::get('category-base-course', [
            \App\Http\Controllers\Admin\BiddingController::class,
            'catgoryCourse',
        ]);

        Route::get('my-courses', [\App\Http\Controllers\CourseController::class, 'myCourses'])->name(
            'my_courses',
        );
        Route::get('my-courses-reviews', [
            \App\Http\Controllers\CourseController::class,
            'myCoursesReviews',
        ])->name('my_courses_reviews');
        Route::get('vimeo-manager', [VimeoController::class, 'index'])->name('vimeo_manager');
        Route::post('vimeo-upload', [VimeoController::class, 'postVimeoUploadsApi'])->name(
            'vimeo_upload',
        );

        Route::get('my-biddings', [\App\Http\Controllers\BiddingController::class, 'myBiddings'])->name(
            'my_biddings',
        );

        //  Route::get('biddings',ShowBiddings::class);
        //calendar
        Route::group(['prefix' => 'calender'], function () {
            Route::get('/', [CalenderController::class, 'index'])->name('calender');
            Route::get('get-list', [CalenderController::class, 'getList'])->name('get-list-calender');
        });

        Route::get('free-resources', [\App\Http\Controllers\ResourceController::class, 'index'])->name(
            'free_resourses',
        );
        Route::get('get-free-resources', [
            \App\Http\Controllers\ResourceController::class,
            'getFreeResources',
        ]);
        Route::get('free-resources/create', [
            \App\Http\Controllers\ResourceController::class,
            'createForm',
        ]);
        Route::post('free-resources/create', [
            \App\Http\Controllers\ResourceController::class,
            'create',
        ]);
        Route::get('free-resources/edit/{id}', [
            \App\Http\Controllers\ResourceController::class,
            'updateForm',
        ]);
        Route::post('free-resources/edit/{id}', [
            \App\Http\Controllers\ResourceController::class,
            'update',
        ]);
        Route::get('free-resources/view/{id}', [
            \App\Http\Controllers\ResourceController::class,
            'viewForm',
        ]);

        Route::group(['prefix' => 'trainers'], function () {
            Route::get('/', [TrainersController::class, 'index'])->name('trainers');
            Route::get('request', [TrainersController::class, 'requestedTrainer'])->name(
                'request_trainer',
            );
            Route::post('search-trainer', [TrainersController::class, 'searchTrainer']);
            Route::post('request-to-another-trainer', [
                TrainersController::class,
                'requestAnotherTrainer',
            ]);
        });

        Route::group(['prefix' => 'courses-has-quiz'], function () {
            Route::get('/', [QuizController::class, 'quizCourses'])->name('courses_has_quiz');
            Route::get('quizzes/{id}', [QuizController::class, 'quizzes'])->name('courses_quizzes');
            Route::get('attempts/{quiz_id}', [QuizController::class, 'attempts'])->name('quiz_attempts');
            Route::get('attempt/{attempt_id}', [QuizController::class, 'attemptDetail'])->name(
                'attempt_detail',
            );
            Route::post('attempt/{attempt_id}', [QuizController::class, 'attemptReview']);
        });

        Route::group(['prefix' => 'assignments'], function () {
            Route::get('/', [AssignmentController::class, 'index'])->name('courses_has_assignments');
            Route::get('course/{course_id}', [AssignmentController::class, 'assignmentsByCourse'])->name(
                'courses_assignments',
            );
            Route::get('submissions/{assignment_id}', [
                AssignmentController::class,
                'submissions',
            ])->name('assignment_submissions');
            Route::get('submission/{submission_id}', [AssignmentController::class, 'submission'])->name(
                'assignment_submission',
            );
            Route::post('submission/{submission_id}', [AssignmentController::class, 'evaluation']);
        });

        Route::group(['prefix' => 'earning'], function () {
            Route::get('/', [EarningController::class, 'earning'])->name('earning');
            Route::get('report', [EarningController::class, 'earningReport'])->name('earning_report');
        });
        Route::group(['prefix' => 'withdraw'], function () {
            Route::get('/', [EarningController::class, 'withdraw'])->name('withdraw');
            Route::post('/', [EarningController::class, 'withdrawPost']);

            Route::get('preference', [EarningController::class, 'withdrawPreference'])->name(
                'withdraw_preference',
            );
            Route::post('preference', [EarningController::class, 'withdrawPreferencePost']);
        });

        Route::group(['prefix' => 'discussions'], function () {
            Route::get('/', [DiscussionController::class, 'index'])->name('instructor_discussions');
            Route::get('reply/{id}', [DiscussionController::class, 'reply'])->name('discussion_reply');
            Route::post('reply/{id}', [DiscussionController::class, 'replyPost']);
        });
    });

    Route::group(['prefix' => 'media'], function () {
        Route::post('upload', [MediaController::class, 'store'])->name('post_media_upload');
        Route::get('load_filemanager', [MediaController::class, 'loadFileManager'])->name(
            'load_filemanager',
        );
        Route::post('delete', [MediaController::class, 'delete'])->name('delete_media');
    });

    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', [DashboardController::class, 'profileSettings'])->name('profile_settings');
        Route::post('/', [DashboardController::class, 'profileSettingsPost']);
        Route::post('/tc-profile', [DashboardController::class, 'tCProfileSettingsPost']);
        Route::post('/tr-profile', [DashboardController::class, 'tRProfileSettingsPost']);

        Route::get('reset-password', [DashboardController::class, 'resetPassword'])->name(
            'profile_reset_password',
        );
        Route::post('reset-password', [DashboardController::class, 'resetPasswordPost']);
    });
    //indidual certificate list
    Route::get('certificate', [CertificateController::class, 'index'])->name('certificate');
    Route::get('certificate/Upload/{id}', [CertificateController::class, 'uploadCertificate'])->name(
        'certificate_upload',
    );
    Route::post('certificate/Upload/{id}', [CertificateController::class, 'uploadCertificateCreate']);

    Route::get('company-request', [CompanyRequestController::class, 'index'])->name('company_request');

    Route::post('status-chage-assigned-individual', [
        CompanyRequestController::class,
        'statusChangeIndividual',
    ]);
    Route::get('student-portal', [CompanyRequestController::class, 'studentPortal'])->name(
        'my_student_portal',
    );

    Route::get('enrolled-courses', [DashboardController::class, 'enrolledCourses'])->name(
        'enrolled_courses',
    );
    Route::get('reviews-i-wrote', [DashboardController::class, 'myReviews'])->name('reviews_i_wrote');
    Route::get('wishlist', [DashboardController::class, 'wishlist'])->name('wishlist');

    Route::get('my-quiz-attempts', [QuizController::class, 'myQuizAttempts'])->name('my_quiz_attempts');

    Route::group(['prefix' => 'purchases'], function () {
        Route::get('/', [DashboardController::class, 'purchaseHistory'])->name('purchase_history');
        Route::get('view/{id}', [DashboardController::class, 'purchaseView'])->name('purchase_view');
    });
});

/**
 * Admin Area
 */

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::post('users/login', [\App\Http\Controllers\Admin\UserController::class, 'userLogin']);
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('view-details/{id}', [UserController::class, 'viewDetails'])->name('admin_users');
    Route::post('company-status-change', [UserController::class, 'statusChange'])->name(
        'admin_users_post',
    );
    /********** Email templates *********/
    Route::get('email-templates', [EmailTemplatesController::class, 'index'])->name('email_template');
    Route::get('email-templates-data', [EmailTemplatesController::class, 'getEmailtemplatesData']);
    Route::get('email-templates/create', [EmailTemplatesController::class, 'create_form']);
    Route::post('email-templates/create', [EmailTemplatesController::class, 'create']);
    Route::get('email-templates/edit/{id}', [EmailTemplatesController::class, 'edit_form'])->name(
        'email_template_edit',
    );
    Route::post('email-templates/edit/{id}', [EmailTemplatesController::class, 'edit']);
    Route::post('email-templates/delete', [EmailTemplatesController::class, 'delete']);

    /********** testimonials*********/
    Route::get('testimonials', [TestimonialController::class, 'index']);
    Route::get('testimonial_data', [TestimonialController::class, 'get_testimonial_data']);
    Route::get('testimonials/create', [TestimonialController::class, 'create_form']);
    Route::post('testimonials/create', [TestimonialController::class, 'create']);
    Route::post('testimonials/media', [TestimonialController::class, 'rtestimonialMedia'])->name(
        'testimonial-images.testimonialMedia',
    );
    Route::get('testimonials/edit/{id}', [TestimonialController::class, 'editTestimonial']);
    Route::post('testimonials/edit/{id}', [TestimonialController::class, 'updateTestimonial']);
    Route::post('testimonials/delete', [TestimonialController::class, 'deleteTestimonial']);
    Route::post('/ajax/changeTestimonialStatus', [
        TestimonialController::class,
        'changeTestimonialStatus',
    ]);

    Route::get('free-resources', [ResourceController::class, 'index'])->name('free_resourses');
    Route::get('get-free-resources', [ResourceController::class, 'getFreeResources']);
    Route::get('free-resources/create', [ResourceController::class, 'createForm']);
    Route::post('free-resources/create', [ResourceController::class, 'create']);
    Route::get('free-resources/edit/{id}', [ResourceController::class, 'updateForm']);
    Route::post('free-resources/edit/{id}', [ResourceController::class, 'update']);
    Route::get('free-resources/view/{id}', [ResourceController::class, 'viewForm']);

    Route::get('add-items', [ItemController::class, 'addItem'])->name('add_items');

    /* Manage CMS page Content */
    Route::get('home-page-sections', [CmsController::class, 'homeSectionIndex']);
    Route::get('home-page-sections/get-data', [CmsController::class, 'homeSection_getdata']);
    Route::get('home-page-sections/create', [CmsController::class, 'homeSectionCreate']);
    Route::post('home-page-sections/url-slug', [CmsController::class, 'homeSectionUrl_slug']);
    Route::get('home-page-sections/view/{id}', [CmsController::class, 'homeSectionView']);
    Route::post('home-page-sections/view/{id}', [CmsController::class, 'homeSectionEdit']);
    Route::post('home-page-sections/create', [CmsController::class, 'homeSectionDo_create']);
    //		Route::post('/ajax/changehomeSectionStatus', [\App\Http\Controllers\Admin\AjaxController::class,'changeHomeSectionStatus']);

    /**********  Directory category *********/
    Route::get('home-banner-images', [BannerController::class, 'homeBannerIndex']);
    Route::get('home_banner_images_data', [BannerController::class, 'homeGetBannerData']);
    Route::get('home-banner-images/create', [BannerController::class, 'homeCreateBanner']);
    Route::post('home-banner-images/create', [BannerController::class, 'homeSaveBanner']);
    Route::get('home-banner-images/edit/{id}', [BannerController::class, 'homeEditBanner']);
    Route::post('home-banner-images/edit/{id}', [BannerController::class, 'homeUpdateBanner']);
    Route::post('/ajax/changeBannerStatus', [BannerController::class, 'changeHomeBannerStatus']);

    /********** CMS *********/

    Route::group(['prefix' => 'cms'], function () {
        Route::get('/', [PostController::class, 'posts'])->name('posts');
        Route::get('post/create', [PostController::class, 'createPost'])->name('create_post');
        Route::post('post/create', [PostController::class, 'storePost']);
        Route::get('post/edit/{id}', [PostController::class, 'editPost'])->name('edit_post');
        Route::post('post/edit/{id}', [PostController::class, 'updatePost']);

        // Route::get('page', [\App\Http\Controllers\PostController::class,'index'])->name('pages');
        // Route::get('page/create', [\App\Http\Controllers\PostController::class,'create'])->name('create_page');
        // Route::post('page/create', [\App\Http\Controllers\PostController::class,'store']);
        // Route::get('page/edit/{id}', [\App\Http\Controllers\PostController::class,'edit'])->name('edit_page');
        // Route::post('page/edit/{id}', [\App\Http\Controllers\PostController::class,'updatePage']);
    });

    /* Manage CMS page Content */
    // Route::get('pages', [\App\Http\Controllers\Admin\CmsController::class,'index'])->name('pages');
    // Route::get('pages/get-data', [\App\Http\Controllers\Admin\CmsController::class,'cms_getdata']);
    // Route::get('pages/create', [\App\Http\Controllers\Admin\CmsController::class,'create']);
    // Route::post('pages/url-slug', [\App\Http\Controllers\Admin\CmsController::class,'url_slug']);
    // Route::get('pages/view/{id}', [\App\Http\Controllers\Admin\CmsController::class,'view']);
    // Route::post('pages/view/{id}', [\App\Http\Controllers\Admin\CmsController::class,'edit']);
    // Route::post('pages/create', [\App\Http\Controllers\Admin\CmsController::class,'do_create']);
    // Route::post('/ajax/changePageStatus', [\App\Http\Controllers\Admin\AjaxController::class,'changePageStatus']);

    Route::group(['prefix' => 'media_manager'], function () {
        Route::get('/', [MediaController::class, 'mediaManager'])->name('media_manager');
        Route::post('media-update', [MediaController::class, 'mediaManagerUpdate'])->name(
            'media_update',
        );
    });

    // Roles management section
    Route::group(['module' => 'roles'], function () {
        Route::get('roles', [RoleController::class, 'index'])->name('roles');
        Route::get('role/create', [
            'permission' => 'add',
            'uses' => '\App\Http\Controllers\Admin\RoleController@createForm',
        ]);
        Route::post('role/create', [
            'permission' => 'add',
            'uses' => '\App\Http\Controllers\Admin\RoleController@create',
        ]);
        Route::get('role/edit/{id}', [
            'permission' => 'edit',
            'uses' => '\App\Http\Controllers\Admin\RoleController@updateForm',
        ]);
        Route::post('role/edit/{id}', [
            'permission' => 'edit',
            'uses' => '\App\Http\Controllers\Admin\RoleController@update',
        ]);
        Route::post('role/change_status/{id}', [
            'permission' => 'edit',
            'uses' => '\App\Http\Controllers\Admin\RoleController@changeStatus',
        ]);
        Route::post('role/delete/{id}', [
            'permission' => 'delete',
            'uses' => '\App\Http\Controllers\Admin\RoleController@delete',
        ]);
    });

    // Module management section
    Route::group(['module' => 'module'], function () {
        Route::get('module', [ModuleController::class, 'index'])->name('module');
        Route::get('module/create', [
            'permission' => 'add',
            'uses' => '\App\Http\Controllers\Admin\ModuleController@createForm',
        ]);
        Route::post('module/create', [
            'permission' => 'add',
            'uses' => '\App\Http\Controllers\Admin\ModuleController@create',
        ]);
        Route::get('module/edit/{id}', [
            'permission' => 'edit',
            'uses' => '\App\Http\Controllers\Admin\ModuleController@updateForm',
        ]);
        Route::post('module/edit/{id}', [
            'permission' => 'edit',
            'uses' => '\App\Http\Controllers\Admin\ModuleController@update',
        ]);
    });
    //chat  in admin dashboard
    // Route::get('chats', [\App\Http\Controllers\Admin\ChatController::class,'index'])->name('chats');
    // Route::post('get_messages', [\App\Http\Controllers\Admin\ChatController::class,'getMessages'])->name('get_messages');
    // Route::post('search-result', [\App\Http\Controllers\Admin\ChatController::class,'searchResult']);
    // Route::post('send_message', [\App\Http\Controllers\Admin\ChatController::class,'sendMessage'])->name('send_message');
    Route::get('contact', [CategoriesController::class, 'contact'])->name('contact-list');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoriesController::class, 'index'])->name('category_index');
        Route::get('create', [CategoriesController::class, 'create'])->name('category_create');
        Route::post('create', [CategoriesController::class, 'store']);
        Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('category_edit');
        Route::post('edit/{id}', [CategoriesController::class, 'update']);
        Route::post('delete', [CategoriesController::class, 'destroy'])->name('delete_category');
    });

    //packages
    Route::group(['prefix' => 'packages'], function () {
        Route::get('/', [PackagesController::class, 'index'])->name('packages');
        Route::get('create', [PackagesController::class, 'createForm'])->name('create_package');
        Route::post('create', [PackagesController::class, 'create']);
        Route::get('edit/{id}', [PackagesController::class, 'edit']);
        Route::post('edit/{id}', [PackagesController::class, 'update']);
        Route::get('functionality/{id}', [PackagesController::class, 'functionality']);
        Route::post('functionality/{id}', [PackagesController::class, 'functionalityCreate']);
        Route::get('subscription', [PackagesController::class, 'subscription'])->name(
            'package_subscription',
        );
    });
    // functionality
    Route::group(['prefix' => 'functionality'], function () {
        Route::get('/', [FunctionalityController::class, 'index'])->name('functionality');
        Route::get('create', [FunctionalityController::class, 'createForm'])->name(
            'create_functionality',
        );
        Route::post('create', [FunctionalityController::class, 'create']);
        Route::get('edit/{id}', [FunctionalityController::class, 'edit']);
        Route::post('edit/{id}', [FunctionalityController::class, 'update']);
    });
    Route::group(['prefix' => 'courses'], function () {
        Route::get('/', [AdminController::class, 'adminCourses'])->name('admin_courses');
        Route::get('popular', [AdminController::class, 'popularCourses'])->name('admin_popular_courses');
        Route::get('featured', [AdminController::class, 'featureCourses'])->name(
            'admin_featured_courses',
        );
    });

    Route::group(['prefix' => 'pages'], function () {
        Route::get('/', [AdminController::class, 'adminPages'])->name('admin_pages');
        Route::get('pages/view/{id}', [CmsController::class, 'view'])->name('edit.admin_pages');
        Route::post('pages/view/{id}', [CmsController::class, 'edit']);
    });

    /**********  Directory category *********/
    Route::get('banner-images', [AdminController::class, 'bannerIndex'])->name('admin_banners');
    Route::get('banner_images_data', [BannerController::class, 'getBannerData']);
    Route::get('banner-images/create', [BannerController::class, 'createBanner']);
    Route::post('banner-images/create', [BannerController::class, 'saveBanner']);
    Route::get('banner-images/edit/{id}', [BannerController::class, 'editBanner'])->name('edit.banners');
    Route::post('banner-images/edit/{id}', [BannerController::class, 'updateBanner']);
    Route::post('/ajax/changeBannerStatus', [BannerController::class, 'changeBannerStatus']);

    Route::get('free-resources', [ResourceController::class, 'index']);
    Route::get('get-free-resources', [ResourceController::class, 'getFreeResources']);
    Route::get('free-resources/create', [ResourceController::class, 'createForm'])->middleware([
        'permission:add',
    ]);
    Route::post('free-resources/create', [ResourceController::class, 'create'])->middleware([
        'permission:add',
    ]);
    Route::get('free-resources/edit/{id}', [ResourceController::class, 'updateForm'])->middleware([
        'permission:edit',
    ]);
    Route::post('free-resources/edit/{id}', [ResourceController::class, 'update'])->middleware([
        'permission:edit',
    ]);
    Route::get('free-resources/view/{id}', [ResourceController::class, 'viewForm'])->middleware([
        'permission:edit',
    ]);
    Route::group(['prefix' => 'plugins'], function () {
        Route::get('/', [ExtendController::class, 'plugins'])->name('plugins');
        Route::get('find', [ExtendController::class, 'findPlugins'])->name('find_plugins');
        Route::get('action', [ExtendController::class, 'pluginAction'])->name('plugin_action');
    });
    Route::group(['prefix' => 'themes'], function () {
        Route::get('/', [ExtendController::class, 'themes'])->name('themes');
        Route::post('activate', [ExtendController::class, 'activateTheme'])->name('activate_theme');
        Route::get('find', [ExtendController::class, 'findThemes'])->name('find_themes');
    });

    Route::group(['prefix' => 'settings'], function () {
        Route::get('theme-settings', [
            \App\Http\Controllers\SettingsController::class,
            'ThemeSettings',
        ])->name('theme_settings');
        Route::get('invoice-settings', [
            \App\Http\Controllers\SettingsController::class,
            'invoiceSettings',
        ])->name('invoice_settings');
        Route::get('general', [
            \App\Http\Controllers\SettingsController::class,
            'GeneralSettings',
        ])->name('general_settings');
        Route::get('lms-settings', [
            \App\Http\Controllers\SettingsController::class,
            'LMSSettings',
        ])->name('lms_settings');

        Route::get('social', [\App\Http\Controllers\SettingsController::class, 'SocialSettings'])->name(
            'social_settings',
        );
        //Save settings / options
        Route::post('save-settings', [\App\Http\Controllers\SettingsController::class, 'update'])->name(
            'save_settings',
        );
        Route::get('payment', [PaymentController::class, 'PaymentSettings'])->name('payment_settings');
        Route::get('storage', [
            \App\Http\Controllers\SettingsController::class,
            'StorageSettings',
        ])->name('storage_settings');
    });

    Route::get('gateways', [PaymentController::class, 'PaymentGateways'])->name('payment_gateways');
    Route::get('withdraw', [\App\Http\Controllers\SettingsController::class, 'withdraw'])->name(
        'withdraw_settings',
    );
    Route::get('live-schedule', [LiveScheduleController::class, 'adminLiveIndex'])->name(
        'live_schedule',
    );
    Route::group(['prefix' => 'payments'], function () {
        //Route::get('/', [PaymentController::class, 'index'])->name('payments');
        Route::get('view/{id}', [PaymentController::class, 'view'])->name('payment_view');
        Route::get('delete/{id}', [PaymentController::class, 'delete'])->name('payment_delete');

        Route::post('update-status/{id}', [PaymentController::class, 'updateStatus'])->name(
            'update_status',
        );
    });

    Route::group(['prefix' => 'withdraws'], function () {
        Route::get('/', [AdminController::class, 'withdrawsRequests'])->name('withdraws');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'users'])->name('users');
        Route::get('create', [UserController::class, 'addAdministrator'])->name('add_administrator');
        Route::post('create', [UserController::class, 'storeAdministrator']);
        Route::post('block-unblock', [UserController::class, 'administratorBlockUnblock'])->name(
            'administratorBlockUnblock',
        );
    });

    /* Website Languages */
    Route::get('website-languages/', [WebsiteLanguageController::class, 'translations'])->name(
        'translation',
    );
    Route::post('website-languages/', [WebsiteLanguageController::class, 'save_translations']);

    /**
     * Change Password route
     */
    Route::group(['prefix' => 'account'], function () {
        Route::get('change-password', [UserController::class, 'changePassword'])->name(
            'change_password',
        );
        Route::post('change-password', [UserController::class, 'changePasswordPost']);
    });
});

// Route::get('getSection/', [\App\Http\Controllers\Admin\PageController::class,'getSection']);

/**
 * Single Page
 */
//Route::get('{slug}', [\App\Http\Controllers\PostController::class,'singlePage'])->name('page');

Route::get('blog', [PostController::class, 'blog'])->name('blog');
//Route::get('{slug}', [\App\Http\Controllers\PostController::class,'postSingle'])->name('post');
Route::get('post/{id?}', [PostController::class, 'postProxy'])->name('post_proxy');

Route::get('/change-language/{code}', [FrontController::class, 'changeLanguage']);
Route::get('for-enterprises', [FrontController::class, 'enterprise']);
Route::get('download-resourses', [FrontController::class, 'downloadResourses']);
Route::get('free-resource-detail/{id}', [FrontController::class, 'resourceDetail']);
Route::get('course-detail/{id}', [FrontController::class, 'courseDetail']);
Route::post('resource/rating', [FrontController::class, 'setRating']);
Route::get('courses-listing', [FrontController::class, 'listCourses']);
Route::get('course/all-rating', [FrontController::class, 'allCourseRating']);
Route::get('checkout/{id}', [PaymentController::class, 'checkout']);
Route::get('complete-payment', [PaymentController::class, 'completePayment']);
Route::get('payment-success', [PaymentController::class, 'successPayment'])->name('payment_success');
Route::post('ajax/addToWishlist', [FrontController::class, 'addToWishlist']);

// Route::get('{slug}', [\App\Http\Controllers\PostController::class,'postSingle'])->name('post');

// ****************************************************************************
// *                           COMPANY SECTION                                  *
// ****************************************************************************

Route::get('biddings/single-bidding/{id}', function ($id) {
    $singleBid = Bidding::find($id);
})->name('biddingLink');

Route::group(['prefix' => 'company'], function () {
    Route::get('/login', function () {
        return view('company.company-login');
    });
    //No controller found
    //    Route::post('sign-in', [\App\Http\Controllers\Auth\AuthController::class,'loginFn'])->name('sign-in');

    // Route::post('sign-out', [\App\Http\Controllers\Auth\AuthController::class,'logoutFn'])->name('logout');

    Route::name('company')->group(function () { });

    Route::group(['middleware' => ['auth', 'company']], function () {
        Route::post('set-language', [CommonController::class, 'setLanguage'])->name('set-language');

        Route::get('/', function () {
            return view('company.company-dashboard');
        })->name('company');

        Route::get('/rewards', [RewardsController::class, 'index']);

        Route::get('/', [GraphsController::class, 'index'])->name('company');
        Route::get('/positions/{id}', [GraphsController::class, 'show'])->name('positions.show');
        Route::get('/projects/{id}', [GraphsController::class, 'showProject'])->name('projects.show');
        Route::get('/departments/{id}', [GraphsController::class, 'showDepartment'])->name(
            'departments.show',
        );
        Route::get('/download-graphs', [DownloadGraphsController::class, 'index'])->name(
            'graphs.download',
        );
        Route::get('/departments_download/{id}', [GraphsController::class, 'downloadDepartment'])->name(
            'departments.download',
        );
        Route::get('/positions_download/{id}', [GraphsController::class, 'downloadPosition'])->name(
            'positions.download',
        );
        Route::get('/projects_download/{id}', [GraphsController::class, 'downloadProject'])->name(
            'projects.download',
        );

        Route::get('request-individual-user', [WorkForceController::class, 'requestForm']);

        Route::post('search-indidual', [WorkForceController::class, 'searchIndidual']);
        Route::post('request-to-individual', [WorkForceController::class, 'individualStatus']);

        Route::post('set-language', [CommonController::class, 'setLanguage'])->name('set-language');
        Route::get('workforces', [WorkForceController::class, 'index'])->name('workforces');
        Route::get('get-workforce-data', [WorkForceController::class, 'getWorkforceData'])->name(
            'get-workforce-data',
        );
        Route::post('add-workforce', [WorkForceController::class, 'addWorkforceFn'])->name(
            'add-workforce',
        );
        Route::post('user/checkemail', [WorkForceController::class, 'userEmailCheck'])->name(
            'check-mail',
        );
        // sub contractor
        Route::group(['prefix' => 'sub-contractor'], function () {
            Route::get('/', [SubContractorController::class, 'index'])->name('sub-contractor');
            Route::get('get-contractor-data', [SubContractorController::class, 'getContractorData']);
        });
        Route::group(['prefix' => 'project-manager'], function () {
            Route::get('/', [SubContractorController::class, 'projectManagerIndex'])->name(
                'project-manager',
            );
            Route::get(
                'get-project-manager-data',
                '\App\Http\Controllers\Company\SubContractorController@getProjectManagerData',
            );
        });

        Route::get('positions', [SettingsController::class, 'positions'])->name('positions');
        Route::get('get-company-positions', [SettingsController::class, 'getPositionsFn'])->name(
            'get-company-positions',
        );
        Route::post('save-company-positions', [SettingsController::class, 'saveCompanyPosition'])->name(
            'save-company-positions',
        );
        Route::post('delete-company-positions', [SettingsController::class, 'deletePosition'])->name(
            'delete-company-positions',
        );

        Route::get('departments', [SettingsController::class, 'departments'])->name('departments');
        Route::get('get-company-departments', [SettingsController::class, 'getDepartmentsFn'])->name(
            'get-company-departments',
        );
        Route::post(
            'save-company-departments',
            '\App\Http\Controllers\Company\SettingsController@saveCompanyDepartment',
        )->name('save-company-departments');
        Route::post('delete-company-departments', [SettingsController::class, 'deleteDepartment'])->name(
            'delete-company-departments',
        );

        Route::get('projects', [SettingsController::class, 'projects'])->name('projects');
        Route::get('get-company-projects', [SettingsController::class, 'getProjectsFn'])->name(
            'get-company-projects',
        );
        Route::post('save-company-projects', [SettingsController::class, 'saveCompanyProject'])->name(
            'save-company-projects',
        );
        Route::post('delete-company-projects', [SettingsController::class, 'deleteProject'])->name(
            'delete-company-projects',
        );

        Route::get('profile', [ProfileController::class, 'profileViewPage'])->name('company-profile');
        Route::get('get-profile-data', [ProfileController::class, 'getProfileData'])->name(
            'get-profile-data',
        );

        Route::get('add-profile', [ProfileController::class, 'getProfile'])->name('add-profile');
        Route::post('create-profile', [ProfileController::class, 'createProfile'])->name(
            'create-profile',
        );
        Route::get('edit-profile', [ProfileController::class, 'getProfile'])->name('edit-profile');
        Route::post('update-profile', [ProfileController::class, 'updateProfile'])->name(
            'update-profile',
        );
        // ************testGraphs*************************
        // ***********************************************
        Route::get('graphs-sheet', [GraphsController::class, 'index']);
        // ***********************************************
        // ************End testGraphs*********************
        Route::get(
            'training-matrix-structure',
            '\App\Http\Controllers\Company\TrainingMatrixController@matrixStructure',
        )->name('training-matrix-structure');
        Route::get(
            'get-training-matrix-structure',
            '\App\Http\Controllers\Company\TrainingMatrixController@getMatrixStructureFn',
        )->name('get-training-matrix-structure');
        Route::post(
            'save-training-matrix-structure',
            '\App\Http\Controllers\Company\TrainingMatrixController@saveMatrixStructure',
        )->name('save-training-matrix-structure');
        Route::post(
            'delete-training-matrix-structure',
            '\App\Http\Controllers\Company\TrainingMatrixController@deleteMatrixStructure',
        )->name('delete-training-matrix-structure');

        Route::get('training-matrix', [TrainingMatrixController::class, 'trainingMatrix'])->name(
            'training-matrix',
        );
        Route::get('get-training-matrix-data', [TrainingMatrixController::class, 'getMatrixData'])->name(
            'get-training-matrix-data',
        );
        Route::post(
            'assign-required-course',
            '\App\Http\Controllers\Company\TrainingMatrixController@assignRequiredCourse',
        )->name('assign-required-course');

        Route::get('course-bulk-assign', [RequiredCourseController::class, 'bulkAssignCourses'])->name(
            'course-bulk-assign',
        );
        //Route::post('add-workforce', [\App\Http\Controllers\Company\WorkForceController::class,'addWorkforceFn'])->name('add-workforce');

        Route::get('progress-report', [ProgressGraphController::class, 'progressTable'])->name(
            'progress-report',
        );
        Route::get('get-progress-report-data', [
            ProgressGraphController::class,
            'getProgressData',
        ])->name('get-progress-report-data');

        Route::get('upcoming-courses', [UpcomingCoursesController::class, 'upcomingCourses'])->name(
            'upcoming-courses',
        );
        Route::get(
            'get-upcoming-courses-data',
            '\App\Http\Controllers\Company\UpcomingCoursesController@getUpcomingCoursesData',
        )->name('get-upcoming-courses-data');

        Route::get('graphs', [ProgressGraphController::class, 'graphs'])->name('graphs');
        Route::get('get-graph-2-data', [ProgressGraphController::class, 'getGraph2Data'])->name(
            'get-graph-2-data',
        );
        Route::get('get-graph-1-data', [ProgressGraphController::class, 'getGraph1Data'])->name(
            'get-graph-1-data',
        );
        Route::get('get-graph-3-data', [ProgressGraphController::class, 'getGraph3Data'])->name(
            'get-graph-3-data',
        );
        Route::get(
            'get-graph-4-data/{category}/{id}',
            '\App\Http\Controllers\Company\ProgressGraphController@getGraph4Data',
        )->name('get-graph-4-data');
        Route::get('get-graph-02-data', [ProgressGraphController::class, 'getGraph02Data'])->name(
            'get-graph-02-data',
        );
        Route::get('get-graph-03-data', [ProgressGraphController::class, 'getGraph03Data'])->name(
            'get-graph-03-data',
        );
        Route::get('get-graph-04-data', [ProgressGraphController::class, 'getGraph04Data1'])->name(
            'get-graph-04-data',
        );
        Route::get('get-graph-04-data-2', [ProgressGraphController::class, 'getGraph04Data2'])->name(
            'get-graph-04-data-2',
        );
        Route::get('get-graph-04-data-3', [ProgressGraphController::class, 'getGraph04Data3'])->name(
            'get-graph-04-data-3',
        );

        //Download graph
        Route::get(
            'download-expired-totalCerit',
            '\App\Http\Controllers\Company\ProgressGraphController@dowloadExpiredTotalCerrtificate',
        )->name('download-expired-totalCerit');
        Route::get(
            'download-expired-certificate',
            '\App\Http\Controllers\Company\ProgressGraphController@dowloadExpiredCerrtificate',
        )->name('download-expired-certificate');
        Route::get(
            'download-expired-certificate-project',
            '\App\Http\Controllers\Company\ProgressGraphController@dowloadExpiredCerrtificateProject',
        )->name('download-expired-certificate-project');
        Route::get('download-cost-spend', [ProgressGraphController::class, 'downloadCostSpend'])->name(
            'download-cost-spend',
        );
        Route::get('course-department', [ProgressGraphController::class, 'courseDepartment'])->name(
            'course-department',
        );
        Route::get('certificate-status', [ProgressGraphController::class, 'certificateStatus'])->name(
            'certificate-status',
        );

        Route::post(
            'get-positions-with-selected',
            '\App\Http\Controllers\Company\CommonController@getPositionsSelected',
        )->name('get-positions-with-selected');
        Route::post(
            'get-departments-with-selected',
            '\App\Http\Controllers\Company\CommonController@getDepartmentsSelected',
        )->name('get-departments-with-selected');
        Route::post('get-projects-with-selected', [
            CommonController::class,
            'getProjectsSelected',
        ])->name('get-projects-with-selected');
        Route::post('get-courses-with-selected', [CommonController::class, 'getCoursesSelected'])->name(
            'get-courses-with-selected',
        );
        Route::post('get-employee-with-filters', [CommonController::class, 'getEmployees'])->name(
            'get-employee-with-filters',
        );
        Route::post('get-skills-with-selected', [CommonController::class, 'getSkillsSelected'])->name(
            'get-skills-with-selected',
        );
        Route::post(
            'get-occupations-with-selected',
            '\App\Http\Controllers\Company\CommonController@getOccupationsSelected',
        )->name('get-occupations-with-selected');
        Route::post(
            'get-industries-with-selected',
            '\App\Http\Controllers\Company\CommonController@getIndustriesSelected',
        )->name('get-industries-with-selected');

        //list category
        Route::post('get-category', [CommonController::class, 'getCategory']);
        Route::post('get-category-course', [CommonController::class, 'getCategoryCourse']);
        Route::post('get-category-course-type', [CommonController::class, 'getCategoryCourseType']);

        Route::get('search-courses', [CourseController::class, 'searchCourses'])->name('search-courses');
        Route::get('bidding', [BiddingController::class, 'index'])->name('bidding');
        Route::get('bidding-list', [BiddingController::class, 'list'])->name('bidding_list');
        Route::get('get-bidding-list', [BiddingController::class, 'getBiddingList']);
        Route::get('bidding-list-result/{id}', [BiddingController::class, 'resultBidding']);
        Route::get('get-bidding-list-result', [BiddingController::class, 'getBiddingListResult']);
        Route::get(
            'bidding-list-result/status-change-company/{id}',
            '\App\Http\Controllers\Company\BiddingController@statusChangeCompany',
        );

        // project manager request to bidding
        Route::get('bidding-request-list', [BiddingController::class, 'requestList'])->name(
            'bidding_request_list',
        );
        Route::get('get-bidding-list-detail', [BiddingController::class, 'requestBiddingList']);
        Route::post(
            'accept-project-manager-bidding-request',
            '\App\Http\Controllers\Company\BiddingController@acceptBiddingRequest',
        );

        Route::post('search-course-items', [CourseController::class, 'searchCourseItems'])->name(
            'search_course_items',
        );
        Route::post(
            'save-purchase-course-relation',
            '\App\Http\Controllers\Company\CourseController@saveCoursePurchaseRelation',
        )->name('save-purchase-course-relation');
        Route::get('course-payment', [CourseController::class, 'coursePayment'])->name('course-payment');
        Route::post('save-purchase-course-payment', [
            CourseController::class,
            'saveCoursePayment',
        ])->name('save-purchase-course-payment');

        Route::get('purchased-courses', [CourseController::class, 'purchasedCourses'])->name(
            'purchased-courses',
        );
        Route::get('get-purchased-courses', [CourseController::class, 'getPurchasedCourses'])->name(
            'get-purchased-courses',
        );

        Route::post('save-bidding-price', [CourseController::class, 'saveBiddingPrice'])->name(
            'save-bidding-price',
        );
        Route::get('enrolled-courses', [CourseController::class, 'enrolledCourses'])->name(
            'company-enrolled-course',
        );

        // certificate
        Route::get('certificate', [CertificateController::class, 'certificateView'])->name(
            'certificate-view',
        );
        Route::get('get-certified-courses', [CertificateController::class, 'getCertifiedCourse']);
        Route::get('get-entrolled-course', [CourseController::class, 'getEnrolledCourses']);
        Route::post('certificate-approve', [CertificateController::class, 'approveCertificate']);
        // exam result
        Route::get('exam-result', [CertificateController::class, 'examResult'])->name('exam-result');
        Route::get('get-result', [CertificateController::class, 'getResult']);

        Route::get('change-password', [ProfileController::class, 'changePassword']);
        Route::post('change-password', [ProfileController::class, 'updateChangePassword']);
        // Route::get('logout', [\App\Http\Controllers\Institute\CourseController::class,'logout']);
    });
    // End : CHECKING AUTHENTICATION //
});
Route::get('{slug}', [FrontController::class, 'viewPage'])->name('page');
Route::get('subscription/{packageId}', [FrontController::class, 'packageId'])->name('subscription');
Route::post('contact', [FrontController::class, 'contact']);

// $2y$10$tdIN0OB9NFNxyvRcT/6UkuGjk2b4pmF5RZPNnjApX.D363sTHE.HG

Route::post('admin/save-token', [App\Repositories\Firebase\FcmNotification::class, 'saveToken'])->name(
    'save-token',
);

Route::get('admin/testFCM', function () {
    $title = 'test ' . rand(1000, 10000);
    $body = 'Notification Content ' . rand(1000, 10000);

    $notification = [
        'note_type' => $body,
        'note_time' => now(),
        'note_status' => '1',
        'user_id' => auth()->user()->id,
    ];

    App\Repositories\Firebase\FcmNotification::sendNotification(['title' => $title, 'body' => $body]);

    App\Models\Notification::create($notification);
});

Route::prefix('paypal')
    ->as('paypal.')
    ->group(function () {
        Route::view('payment', 'paypal.index')->name('create.payment');
        Route::get('handle-payment', [PaymentController::class, 'handlePaypalPayment'])->name('make.payment');
        Route::get('cancel-payment', [PaymentController::class, 'paypalPaymentCancel'])->name('cancel.payment');
        Route::get('payment-success', [PaymentController::class, 'paypalPaymentSuccess'])->name('success.payment');
        Route::get('payout/{transaction}', [PaymentController::class, 'paypalPayout'])->name('payout');
    });


//test Facebook
// Route::group(['prefix' => 'auth/facebook', 'middleware' => 'auth'], function () {
//    Route::get('/', [SocialController::class, 'redirectToProvider']);
//    Route::get('/callback', [SocialController::class, 'handleProviderCallback']);
// });

//Linkedin
//Route::get('login/linkedin/link', [App\SocialPoster\LinkedInPoster::class, 'sendPost']);
////Linkedin Authentication Routes
//Route::get('auth/linkedin', [LinkedInPoster::class, 'linkedinRedirect'])->name('login.linkedin');
//Route::get('auth/linkedin/callback', [LinkedInPoster::class, 'linkedinCallback']);
