<?php

namespace App\Http\Controllers;

use App\Models\AllLanguage;
use App\Models\Bidding;
use App\Models\Bookmark;
use App\Models\Company;
use App\Models\CompanyContactDetail;
use App\Models\CompanyIndustry;
use App\Models\CompanyLanguage;
use App\Models\CompanyOccupation;
use App\Models\CompanyUser;
use App\Models\Country;
use App\Models\Industry;
use App\Models\InfluencerCampaign;
use App\Models\InfluencerInformation;
use App\Models\InfluencerOffer;
use App\Models\KarmaEarning;
use App\Models\Occupation;
use App\Models\Review;
use App\Models\User;
use App\Models\Post;
use App\Models\Business;
use App\Models\BusinessAppSetting;
use App\Models\BusinessFollow;
use App\Models\ContractorEmployee;
use App\Models\Course;
use App\Models\InstituteWorkPlace;
use App\Models\PostView;
use App\Models\UserConnection;
use App\Models\UserKarmaShare;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Repositories\Views\CustomerDeviceInfo;
use App\Repositories\Views\ViewsRepository;
use Spatie\Permission\Models\Role;
use App\Models\EnterpriseWorkforce;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    use SEOToolsTrait;

    public function userProfile($id)
    {
        if ($user = User::with('userPrivacy')->find($id)) {
            $block_privat = true;
            if ($user->userPrivacy && $user->userPrivacy->general_account_privacy == 1) {
                $connected = UserConnection::where('from_user_id', auth()->id())->where('to_user_id', $id)->where('status', 1)->first();

                if ($id != auth()->id() && is_null($connected)) {
                    $block_privat = false;
                }
            }
            //Store Posts Views
            $userPosts = Post::where('user_id', $id)
                ->pluck('id')
                ->toArray();
            if ($id != auth()->id()) {
                ViewsRepository::createUserProfileView($id);
                ViewsRepository::createPostView($userPosts);
            }
            $this->seo()
                ->setTitle($user->name)
                ->setDescription($user->job_title);


            return view('homes.social.profile.user.social', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'user',
                'title' => $user->name,
                'block_privat' => $block_privat
            ]);
        } else {
            abort(404);
        }
    }

    public function businessProfile($id)
    {
        if ($user = Business::find($id)) {
            $showNotes = $this->checkBusinessField($id, $user, auth()->id(), 'notes_visibility');;
            $showHints = $this->checkBusinessField($id, $user, auth()->id(), 'hint_visibility');;
            $showBlogs = $this->checkBusinessField($id, $user, auth()->id(), 'blog_visibility');;
            $block_privat = $this->checkPrivacyPage($id, $user, auth()->id());
            //Store Posts Views
            $businessPosts = Post::where('business_id', $id)
                ->pluck('id')
                ->toArray();
            if (!auth()->user()?->businesses?->contains($id)) {
                ViewsRepository::createBusinessProfileView($id);
                ViewsRepository::createPostView($businessPosts);
            }
            /////////check if this page is all to all or followers only
            return view("homes.social.profile.{$user->business_type}.social", [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => $user->business_type,
                'title' => $user->business_name,
                'block_privat' => $block_privat,
                'showNotes' => $showNotes,
                'showHints' => $showHints,
                'showBlogs' => $showBlogs,
            ]);
        } else {
            abort(404);
        }
    }

    public function profileUserCourses($id)
    {
        if ($user = User::find($id)) {
            $block_privat = true;
            if ($user->userPrivacy && $user->userPrivacy->general_account_privacy == 1) {
                $connected = UserConnection::where('from_user_id', auth()->id())->where('to_user_id', $id)->where('status', 1)->first();

                if ($id != auth()->id() && is_null($connected)) {
                    $block_privat = false;
                }
            }
            $this->seo()
                ->setTitle($user->name)
                ->setDescription($user->job_title);
            return view('homes.social.profile.user.courses', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'user',
                'title' => $user->name,
                'block_privat' => $block_privat
            ]);
        } else {
            abort(404);
        }
    }

    public function profileUserRewards($id)
    {
        if ($user = User::find($id)) {
            $block_privat = true;
            if ($user->userPrivacy && $user->userPrivacy->general_account_privacy == 1) {
                $connected = UserConnection::where('from_user_id', auth()->id())->where('to_user_id', $id)->where('status', 1)->first();

                if ($id != auth()->id() && is_null($connected)) {
                    $block_privat = false;
                }
            }
            $this->seo()
                ->setTitle($user->name)
                ->setDescription($user->job_title);
            return view('homes.social.profile.user.rewards', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'user',
                'title' => $user->name,
                'block_privat' => $block_privat
            ]);
        } else {
            abort(404);
        }
    }

    public function profileUserAnalytics($id)
    {
        if ($user = User::find($id)) {
            $block_privat = true;
            if ($user->userPrivacy && $user->userPrivacy->general_account_privacy == 1) {
                $connected = UserConnection::where('from_user_id', auth()->id())->where('to_user_id', $id)->where('status', 1)->first();

                if ($id != auth()->id() && is_null($connected)) {
                    $block_privat = false;
                }
            }
            $this->seo()
                ->setTitle($user->name)
                ->setDescription($user->job_title);
            return view('homes.social.profile.user.analytics', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'user',
                'title' => $user->name,
                'block_privat' => $block_privat
            ]);
        } else {
            abort(404);
        }
    }

    public function profileUserBusinesses($id)
    {
        if ($user = User::find($id)) {
            //            $businesses = $user->businesses()->get();
            $businesses = $user->businesses()->get();
            $roleIDs = collect($businesses)
                //                ->pluck('pivot.role_id')
                //                ->unique()
                //                ->toArray();
                ->pluck('pivot.role_id')
                ->unique()
                ->toArray();

            $roles = Role::whereIn('id', $roleIDs)->pluck('name', 'id');
            $block_privat = true;
            if ($user->userPrivacy && $user->userPrivacy->general_account_privacy == 1) {
                $connected = UserConnection::where('from_user_id', auth()->id())->where('to_user_id', $id)->where('status', 1)->first();

                if ($id != auth()->id() && is_null($connected)) {
                    $block_privat = false;
                }
            }
            $this->seo()
                ->setTitle($user->name)
                ->setDescription($user->job_title);
            return view('homes.social.profile.user.businesses', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'user',
                'title' => $user->name,
                'businesses' => $user->businesses()->withCount('posts')->withCount('followers')->get(),
                'roles' => $roles,
                'block_privat' => $block_privat
            ]);
        } else {
            abort(404);
        }
    }


    private function karmaStudentsCourses($student, $user): array
    {
        $courses = [];
        $karmaEarning = KarmaEarning::where('earning_type', 1)
            ->where('karma_user_id', $user->id)
            ->where('student_user_id', $student->id)
            ->with('course')->get();
        $totalEarning = 0;
        foreach ($karmaEarning as $earning) {
            $course = $earning->course;
            $course->earnings = $earning->earnings;
            $totalEarning += $earning->earnings;
            $courses[] = $course;
        }
        return ['courses' => $courses, 'totalEarning' => $totalEarning];
    }

    public function profileUserKarma($id)
    {
        if ($user = User::find($id)) {
            $shareCourses = UserKarmaShare::where('user_id', $user->id)->with('course')->get();
            $karmaEarningUsers = KarmaEarning::where('earning_type', 1)->where('karma_user_id', $user->id)->pluck('student_user_id');
            $karmaStudents = User::whereIn('id', $karmaEarningUsers)->get();
            $karmaStudents = $karmaStudents->map(function ($student) use ($user) {
                $student->earnings = $this->karmaStudentsCourses($student, $user);
                return $student;
            });
            $this->seo()
                ->setTitle($user->name)
                ->setDescription($user->job_title);
            return view('homes.social.profile.user.karma', [
                'user' => $user,
                'title' => $user->name,
                'userType' => 'user',
                'block_privat' => true,
                'shareCourses' => $shareCourses,
                'karmaStudents' => $karmaStudents,
            ]);
        } else {
            abort(404);
        }
    }

    public function profileUserInfluencer($id)
    {
        // Gate::authorize('update', $post);
        $user = User::find($id);
        if ($user && InfluencerInformation::where('user_id', $id)->where('status', 2)->exists()) {
            $this->seo()
                ->setTitle($user->name)
                ->setDescription($user->job_title);
            return view('homes.social.profile.user.influencer', [
                'user' => $user,
                'title' => $user->name,
                'userType' => 'user',
                'block_privat' => true
            ]);
        } else {
            abort(404);
        }
    }

    public function profileUserConnections($id)
    {
        if ($user = User::find($id)) {
            $block_privat = true;
            if ($user->userPrivacy && $user->userPrivacy->general_account_privacy == 1) {
                $connected = UserConnection::where('from_user_id', auth()->id())->where('to_user_id', $id)->where('status', 1)->first();

                if ($id != auth()->id() && is_null($connected)) {
                    $block_privat = false;
                }
            }
            $this->seo()
                ->setTitle($user->name)
                ->setDescription($user->job_title);
            return view('homes.social.profile.user.connections', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'user',
                'title' => $user->name,
                'block_privat' => $block_privat,
            ]);
        } else {
            abort(404);
        }
    }
    public function busunessFollowers($id)
    {
        if ($business = Business::find($id)) {
            $block_privat = true;

            $this->seo()
                ->setTitle($business->business_name)
                ->setDescription($business->business_type);
            return view("homes.social.profile.$business->business_type.connection", [
                'user' => $business,
                'selectedUser' => $business,
                'userType' => $business->business_type,
                'title' => $business->business_name,
                'block_privat' => $block_privat,
            ]);
        } else {
            abort(404);
        }
    }

    public function profileInstructorCourses($id)
    {
        if ($user = Business::find($id)) {
            $block_privat = $this->checkPrivacyPage($id, $user, auth()->id());
            $courses = Course::whereHas('maker', function ($query) use ($id) {
                $query->where('business_id', $id);
            })->with(['maker'])->withCount('courseViews')->get();
            return view('homes.social.profile.instructor.courses', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'instructor',
                'block_privat' => $block_privat,
                'courses' => $courses,
                'title' => $user->name
            ]);
        } else {
            abort(404);
        }
    }

    public function profileInstructorInstitutes($id)
    {
        if ($user = Business::find($id)) {
            $block_privat = $this->checkPrivacyPage($id, $user, auth()->id());
            $block_env = $this->checkBusinessField($id, $user, auth()->id(), 'business_environment');
            $instractors = InstituteWorkPlace::where('institute_id', $id)->where('worker_type', 'staff')
                ->with('instructor')->get();
            return view('homes.social.profile.instructor.institutes', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'instructor',
                'block_privat' => $block_privat,
                'block_env' => $block_env,
                'instractors' => $instractors,
                'title' => $user->business_name
            ]);
        } else {
            abort(404);
        }
    }

    public function profileInstituteCourses($id)
    {
        if ($user = Business::find($id)) {
            $block_privat = $this->checkPrivacyPage($id, $user, auth()->id());
            $courses = Course::whereHas('maker', function ($query) use ($id) {
                $query->where('business_id', $id);
            })->with(['maker'])->withCount('courseViews')->get();
            return view('homes.social.profile.institute.courses', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'institute',
                'title' => $user->business_name,
                'block_privat' => $block_privat,
                'courses' => $courses
            ]);
        } else {
            abort(404);
        }
    }

    public function profileInstituteInstructors($id)
    {
        if ($user = Business::find($id)) {
            $block_privat = $this->checkPrivacyPage($id, $user, auth()->id());
            $block_env = $this->checkBusinessField($id, $user, auth()->id(), 'business_environment');
            $instructors = InstituteWorkPlace::where('institute_id', $id)->where('worker_type', 'staff')->with(['instructor'])->get();
            // dd( $instructors);
            return view('homes.social.profile.institute.instructors', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'institute',
                'block_privat' => $block_privat,
                'block_env' => $block_env,
                'title' => $user->business_name,
                'instructors' => $instructors
            ]);
        } else {
            abort(404);
        }
    }

    public function profileEnterpriseEmployees($id)
    {
        if ($user = Business::find($id)) {
            $block_privat = $this->checkPrivacyPage($id, $user, auth()->id());
            $block_env = $this->checkBusinessField($id, $user, auth()->id(), 'business_environment');
            $notStaffIds = ContractorEmployee::where('business_id', $id)->get()->pluck('employee_id')->toArray();
            $employees = EnterpriseWorkforce::whereHas(
                'user',
                function ($q) use ($notStaffIds) {
                    $q->whereNotIn('id', $notStaffIds);
                }
            )->where('company_id', $id)->where('status', 1)
                ->with(['user', 'position'])->get();
            return view('homes.social.profile.enterprise.employees', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'enterprise',
                'block_privat' => $block_privat,
                'block_env' => $block_env,
                'title' => $user->business_name,
                'employees' => $employees
            ]);
        } else {
            abort(404);
        }
    }

    public function profileEnterpriseTenders($id)
    {
        if ($user = Business::find($id)) {
            $block_privat = $this->checkPrivacyPage($id, $user, auth()->id());
            $block_env = $this->checkBusinessField($id, $user, auth()->id(), 'business_environment');
            $biddings = Bidding::where('business_id', $id)->where('status', 1)->with('categories', 'industries', 'language')->get();
            // dd($biddings);
            return view('homes.social.profile.enterprise.tenders', [
                'user' => $user,
                'selectedUser' => $user,
                'userType' => 'enterprise',
                'block_privat' => $block_privat,
                'block_env' => $block_env,
                'biddings' => $biddings,
                'title' => $user->business_name
            ]);
        } else {
            abort(404);
        }
    }

    public function review($id)
    {
        $review = Review::find($id);
        $title = '';
        if (isset($review->user)) {
            $title = 'Review by ' . $review->user->name;
        }

        return view(theme('review'), compact('review', 'title'));
    }

    public function updateWishlist(Request $request)
    {
        $course_id = $request->course_id;

        $user = Auth::user();
        if (!$user->wishlist->contains($course_id)) {
            $user->wishlist()->attach($course_id);
            $response = ['success' => 1, 'state' => 'added'];
        } else {
            $user->wishlist()->detach($course_id);
            $response = ['success' => 1, 'state' => 'removed'];
        }

        $addedWishList = DB::table('wishlists')
            ->where('user_id', $user->id)
            ->pluck('course_id');

        $user->update_option('wishlists', $addedWishList);

        return $response;
    }

    public function changePassword()
    {
        $title = __a('change_password');

        return view('admin.change_password', compact('title'));
    }

    public function changePasswordPost(Request $request)
    {
        if (config('app.is_demo')) {
            return redirect()
                ->back()
                ->with('error', 'This feature has been disable for demo');
        }
        $rules = [
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required'
        ];
        $this->validate($request, $rules);

        $old_password = $request->old_password;
        $new_password = $request->new_password;

        if (Auth::check()) {
            $logged_user = Auth::user();

            if (Hash::check($old_password, $logged_user->password)) {
                $logged_user->password = Hash::make($new_password);
                $logged_user->save();

                return redirect()
                    ->back()
                    ->with('success', __a('password_changed_msg'));
            }

            return redirect()
                ->back()
                ->with('error', __a('wrong_old_password'));
        }
    }

    public function users(Request $request)
    {
        $userType = $request->filter_user_group;
        $ids = (array)$request->bulk_ids;

        if (is_array($ids) && in_array(1, $ids)) {
            return back()->with('error', __a('admin_non_removable'));
        }

        //Update
        if (
            $request->bulk_action_btn === 'update_status' &&
            $request->status &&
            is_array($ids) &&
            count($ids)
        ) {
            User::whereIn('id', $ids)->update([
                'active_status' => $request->status
            ]);

            return back()->with('success', __a('bulk_action_success'));
        }

        if ($request->bulk_action_btn === 'delete' && is_array($ids) && count($ids)) {
            if (config('app.is_demo')) {
                return back()->with('error', __a('demo_restriction'));
            }

            $userDelete = User::whereIn('id', $ids)->get();
            if ($userDelete) {
                foreach ($userDelete as $deleteUser) {
                    $deleteUser->email = $deleteUser->email . '-delete';
                    $deleteUser->save();
                }
            }
            User::whereIn('id', $ids)->delete();

            return back()->with('success', __a('bulk_action_success'));
        }

        $users = User::where('active_status', 1);
        // ->where('user_type','!=','company');
        if ($request->q) {
            $users = $users->where(function ($q) use ($request) {
                $q->where('name', 'like', "%{$request->q}%")->orWhere(
                    'email',
                    'like',
                    "%{$request->q}%"
                );
            });
        }

        if ($request->filter_user_group) {
            $users = $users->where('user_type', $request->filter_user_group);
        }
        if ($request->filter_status) {
            $users = $users->where('active_status', $request->filter_status);
        }

        $title = __a('users');
        $users = $users->orderBy('id', 'desc')->paginate(100);

        return view('admin.users.index', compact('title', 'users', 'userType'));
    }

    public function viewDetails(Request $request, $id)
    {
        $countries = Country::get();
        $industries = Industry::get();
        $occupations = Occupation::get();
        $all_languages = AllLanguage::where('active', 1)->get();

        $checkCompany = CompanyUser::where('user_id', $id)->first();

        if ($checkCompany == null) {
            return redirect()->back();
        }

        $company = Company::find($checkCompany->company_id);

        $companyLanguages = CompanyLanguage::where('company_id', $company->id)
            ->pluck('language_id')
            ->toArray();
        $companyIndustries = CompanyIndustry::where('company_id', $company->id)
            ->pluck('industry_id')
            ->toArray();
        $companyOccupations = CompanyOccupation::where('company_id', $company->id)
            ->pluck('occupation_id')
            ->toArray();
        $contact_details = CompanyContactDetail::where('company_id', $company->id)->first();

        return view('admin.users.view-details')->with([
            'company' => $company,
            'countries' => $countries,
            'industries' => $industries,
            'occupations' => $occupations,
            'all_languages' => $all_languages,
            'contact_details' => $contact_details,
            'companyLanguages' => $companyLanguages,
            'companyIndustries' => $companyIndustries,
            'companyOccupations' => $companyOccupations,
            'id' => $id
        ]);
    }

    public function statusChange(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        $user = User::find($id);

        if ($status == 1) {
            $user->verification_status = 1;
            $user->save();

            return response()->json(
                [
                    'status' => true,
                    'message' => 'Successfully Approved As Company Admin'
                ],
                200
            );
        } elseif ($status == 0) {
            $user->verification_status = 0;
            $user->save();

            return response()->json(
                [
                    'status' => true,
                    'message' => 'Request Rejected'
                ],
                200
            );
        }
    }

    protected function checkPrivacyPage($id, $user, $user_id)
    {
        $block_privat = true;
        $key = BusinessAppSetting::where('business_id', $id)
            ->where('key', 'private_space')
            ->first();
        if ($key && $key->value == 1) {
            ////////check this space belong to user
            //////// check this user is a folower
            if (!BusinessFollow::where('business_id', $id)->where('user_id', $user_id)->exists()) {
                ////////////need ui page for not allowed
                $block_privat = false;
            };
            if (in_array($user_id, $user->users->pluck('id')->toArray())) {
                $block_privat = true;
            }
        }
        ////////////////check if private key in prams equal to private_link in DB BusinessAppSetting
        if (request()->private && $key && request()->private == $key->private_link) {
            $block_privat = true;
        }
        if ($user->created_by == $user_id) {
            $block_privat = true;
        }
        return $block_privat;
    }

    protected function checkBusinessField($id, $user, $user_id, $field = 'business_environment')
    {
        $result = true;
        $key = BusinessAppSetting::where('business_id', $id)
            ->where('key', $field)
            ->first();
        if ($key && $key->value != 'public') {
            ////////check this space belong to user
            //////// check this user is a folower
            if (!BusinessFollow::where('business_id', $id)->where('user_id', $user_id)->exists()) {
                ////////////need ui page for not allowed
                $result = false;
            };
            if (in_array($user_id, $user->users->pluck('id')->toArray())) {
                $result = true;
            }
        }
        ////////////////check if private key in prams equal to private_link in DB BusinessAppSetting
        if (request()->private && $key && request()->private == $key->private_link) {
            $result = true;
        }
        if ($key && $key->value == 'me') {
            $result = false;
        }
        if ($user->created_by == $user_id) {
            $result = true;
        }
        return $result;
    }
    public function profileUserBookMark($id)
    {
        if ($id != auth()->id()) {
            abort(403);
        }
        $post_ids = Bookmark::where('bookmarkable_type', User::class)->where('bookmarkable_id', auth()->id())->select('post_id')->get()->pluck('post_id')->toArray();
        $posts = Post::whereIn('id', $post_ids)->get();
        $user = auth()->user();
        return view('homes.social.profile.user.bookmark', [
            'user' => $user,
            'selectedUser' => $user,
            'userType' => 'user',
            'title' => $user->name,
            'block_privat' => true,
            'posts' => $posts
        ]);
    }
}
