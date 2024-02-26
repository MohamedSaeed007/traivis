<?php

namespace App\Http\Middleware;

use App\Models\Business;
use Closure;
use Illuminate\Http\Request;

class BusinessPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && ($businessId = session('business_id'))) {
            setPermissionsTeamId($businessId);
            $request->attributes->set('actAsBusinessObject', Business::findOrFail($businessId));
        }
        return $next($request);
    }
}
