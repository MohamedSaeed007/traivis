<?php

namespace App\Http\Controllers;

use App;
use Config;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        if (
            request()->route() &&
            !in_array(
                request()
                    ->route()
                    ->getName(),
                [
                    //                    'instructor-dashboard',
                    //                    'instructor-dashboard-courses',
                    //                    'instructor-dashboard-students',
                    //                    'instructor-dashboard-freelance',
                    //                    'instructor-dashboard-rewards',
                    //                    'instructor-dashboard-payments',
                    //                    'instructor-dashboard-help',
                    //                    'instructor-dashboard-calender',
                    //                    'instructor-dashboard-courseDetails',
                    //                    'enterprise-dashboard',
                    //                    'institute-dashboard',
                    'login',
                    'logout'
                ]
            )
        ) {
            $this->middleware('businessMiddleware');
        }

        view()->composer('*', function ($view) {
            $auth_user = Auth::user();
            $view->with(['auth_user' => $auth_user]);
        });
        // Language translation
        $this->middleware(function ($request, $next) {
            if (Session::has('locale')) {
                // dd(Session::get('locale'));
                App::setLocale(Session::get('locale'));
            } else {
                Session::put('locale', Config::get('app.locale'));
                App::setLocale(Session::get('locale'));
            }

            $configs['lang_str'] = [];
            $theme_slug = 'traivis';
            if ($theme_slug) {
                $local = Session::get('locale');
                $language_path = public_path("themes/{$theme_slug}/languages/{$local}.php");

                if (file_exists($language_path)) {
                    $configs['lang_str'] = include_once $language_path;
                }
                $configs = apply_filters('app_configs', $configs);
                config($configs);
            }

            return $next($request);
        });
    }
}
