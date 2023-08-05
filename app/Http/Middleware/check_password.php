<?php

namespace App\Http\Middleware;

use Closure;

class check_password
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if ($request->api !== env('API_PASSWORD')) {
        

            return response()->json(['message'=> 'there is no authentecated']);
        }
        return $next($request);
    }
}
