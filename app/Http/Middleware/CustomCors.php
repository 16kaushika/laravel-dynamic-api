<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomCors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
    // If the request method is OPTIONS, return a 200 response with CORS headers
        if ($request->isMethod('OPTIONS')) {
            return response()->json('Preflight OK', 200)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With, Authorization')
            ->header('Access-Control-Allow-Credentials', 'true');
        }

        $response = $next($request);

    // Add the necessary CORS headers to the response
    $response->headers->set('Access-Control-Allow-Origin', '*'); // Allow all origins
    $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS'); // Allow methods
    $response->headers->set('Access-Control-Allow-Headers', 'Content-Type, X-Requested-With, Authorization'); // Allow headers

    return $response;
}
}
