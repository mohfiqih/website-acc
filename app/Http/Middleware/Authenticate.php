<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson() && ! $request->user()) {
            return route('login');
        }
    }

    public function handle($request, Closure $next, ...$guards)
    {
        if ($this->authenticate($request, $guards) === 'login') {
            return $this->redirectTo($request);
        }

        return $next($request);
    }
}