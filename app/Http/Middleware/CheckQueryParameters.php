<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckQueryParameters
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (collect($request->query())->isNotEmpty()) {
            return redirect()->to($request->url());
        }

        return $next($request);
    }
}
