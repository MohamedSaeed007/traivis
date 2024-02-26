<?php

namespace App\Repositories\Views;

use App\Models\BusinessProfileView;
use App\Models\UserProfileView;
use App\Repositories\Views\CustomerDeviceInfo;
use Illuminate\Http\Request;
use App\Models\PostView;
use App\Models\CourseView;

class ViewsRepository
{

    public static function createUserProfileView($profileId)
    {
        if (auth()->check()) {
            $user_id = auth()->user()->id;

        } else {
            $user_id = null;
        }
        $ip = CustomerDeviceInfo::get_ip();
        UserProfileView::create([
            'profile_id' => $profileId,
            'user_id' => $user_id,],
            [
            'ip' => $ip,
            'type' => CustomerDeviceInfo::get_device(),
            'device' => CustomerDeviceInfo::get_os(),
        ]);
    }

    public static function createBusinessProfileView($profileId)
    {
        if (auth()->check()) {
            $user_id = auth()->user()->id;
        } else {
            $user_id = null;
        }
        $ip = CustomerDeviceInfo::get_ip();
        BusinessProfileView::create([
            'business_profile_id' => $profileId,
            'user_id' => $user_id,],
            [
            'ip' => $ip,
            'type' => CustomerDeviceInfo::get_device(),
            'device' => CustomerDeviceInfo::get_os(),
        ]);
    }

    public static function createPostView($posts)
    {
        if (auth()->check()) {

            $user_id = auth()->user()->id;
        } else {
            $user_id = null;
        }

        $ip = CustomerDeviceInfo::get_ip();
        foreach ($posts as $post) {
            PostView::create([
                'post_id' => $post,
                'user_id' => $user_id,],
                [
                'ip' => $ip,
                'type' => CustomerDeviceInfo::get_device(),
                'device' => CustomerDeviceInfo::get_os(),
            ]);
        }
    }

    public static function createCourseView($courses)
    {
        if (auth()->check()) {

            $user_id = auth()->user()->id;
        } else {
            $user_id = null;
        }


        $ip = CustomerDeviceInfo::get_ip();
        foreach ($courses as $course) {
            CourseView::create([
                'course_id' => $course,
                'user_id' => $user_id,],
                [
                'ip' => $ip,
                'type' => CustomerDeviceInfo::get_device(),
                'device' => CustomerDeviceInfo::get_os(),
            ]);
        }
    }
}
