<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class isAdmin
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
            if (DB::table('model_has_roles')->leftJoin('roles', 'model_has_roles.role_id', '=', 'roles.id')->where('model_id', $id)->where('roles.name', '=', 'admin')->first()) {
                return $next($request);
            }
        }
        return response()->json([
            'success' => false,
            'message' => 'Unauthorized',
            'admin' => $id
        ]);
    }
}
