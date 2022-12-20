<?php

namespace App\Http\Middleware;

use App\Enums\UserRole;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserNotDeveloperMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->route('user')->role == UserRole::Developer) {
            return response()->json([
                'message' => 'Invisible user!'
            ], 403);
        }

        return $next($request);
    }
}
