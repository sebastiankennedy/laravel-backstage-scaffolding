<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class BackstageAuthenticate
 * 后台用户认证中间件
 *
 * @package App\Http\Middleware
 */
class BackstageAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! auth()->guard('backstage')->check()) {
            return redirect()->route('backstage.authentication.login.page');
        }

        return $next($request);
    }
}
