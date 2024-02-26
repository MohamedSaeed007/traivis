<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Support\Facades\Auth;

class ImpersonateController extends Controller
{
    public function impersonate($userId, $businessId = null, $redirectToUrl = null, $whereWas = null)
    {
        $redirectToUrl = base64_decode($redirectToUrl);
        $whereWas = base64_decode($whereWas);

        abort_if(
            !filter_var($redirectToUrl, FILTER_VALIDATE_URL) ||
                !filter_var($whereWas, FILTER_VALIDATE_URL),
            404,
        );

        session(['super_admin_id' => auth()->user()->id]);
        if ($businessId && $businessId > 0) {
            $business = Business::find($businessId);
            session(['business_id' => $businessId]);
            setPermissionsTeamId(session('business_id'));
            return match ($business->business_type) {
                'instructor' => redirect(route('instructor-dashboard')),
                'institute' => redirect(route('institute-dashboard')),
                'enterprise' => redirect(route('enterprise-dashboard')),
            };
        } else {
            Auth::loginUsingId($userId);
            if ($redirectToUrl) {
                session(['where_was' => $whereWas]);
                return redirect($redirectToUrl);
            } else {
                return redirect(route('home'));
            }
        }
    }

    public function impersonateLeave()
    {
        if (auth()->user()->id != session('super_admin_id')) {
            Auth::loginUsingId(session('super_admin_id'));
            session()->forget('super_admin_id');
        } else {
            session()->forget(['super_admin_id', 'business_id']);
        }

        if (session('where_was')) {
            $redirect_to = session()->pull('where_was');
            return redirect($redirect_to);
        } else {
            return redirect(route('filament.pages.dashboard'));
        }
    }
}
