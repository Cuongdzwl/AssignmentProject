<?php

namespace App\Http\Middleware;

use Closure;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IsAdmin
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
        $id = auth()->user()->id;
        if ($id) {
            if (DB::table('model_has_roles')->leftJoin('roles', 'model_has_roles.role_id', '=', 'roles.id')->where('model_id', $id)->where('name', 'admin')->first()) {
                return $next($request);
            }
        }
        if (!$request->expectsJson()) {
            return route('login');
        }
        
        return response()->json(
            [
                'success' => false,
                'message' => 'Permission denied'
            ]
        );
    }
}
