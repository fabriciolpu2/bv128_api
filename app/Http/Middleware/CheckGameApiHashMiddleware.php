<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class CheckGameApiHashMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->header(config('api.header_name'))) {
            abort(Response::HTTP_UNAUTHORIZED);
        }

        if ($request->header(config('api.header_name')) != config('api.api_hash')) {
            abort(Response::HTTP_UNAUTHORIZED);
        }
        return $next($request);
    }
}
