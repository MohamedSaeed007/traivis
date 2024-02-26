<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Business;
use Illuminate\Support\Facades\Auth;

class BusinessRouteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            //from BusinessPermissionMiddleware

            if (
                $request->routeIs([
                    'instructor-dashboard*',
                    'institute-dashboard*',
                    'enterprise-dashboard*'
                ])
            ) {
                if ($request->attributes->has('actAsBusinessObject')) {
                    /** @var Business $actAsBusinessObject */
                    $actAsBusinessObject = $request->attributes->get('actAsBusinessObject');
                    switch ($actAsBusinessObject->business_type) {
                        case 'instructor':
                            if (!$request->routeIs('instructor-dashboard*')) {
                                return redirect(route('instructor-dashboard'));
                            }
                            break;
                        case 'institute':
                            if (!$request->routeIs('institute-dashboard*')) {
                                return redirect(route('institute-dashboard'));
                            }
                            break;
                        case 'enterprise':
                            if (!$request->routeIs('enterprise-dashboard*')) {
                                return redirect(route('enterprise-dashboard'));
                            }
                            break;
                    }
                } else {
                    return redirect(route('home'));
                }
            }
            return $next($request);
        }
        return $next($request);
    }
}
