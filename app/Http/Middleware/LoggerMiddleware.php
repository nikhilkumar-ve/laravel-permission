<?php

namespace App\Http\Middleware;

use Closure;
use Log;
class LoggerMiddleware
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
        Log::info("This is looged from the logger middleware");
        return $next($request);
    }
}
