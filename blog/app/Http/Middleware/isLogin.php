<?php

namespace App\Http\Middleware;

use Closure;

class isLogin
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
        // 如果登录了，跳过中间件
        if(session('users')){
            return $next($request);
        }else{
            // 如果没有登录，跳到登录页面
            return redirect('/admin/login')->with('error','用户未登录');
        }
        
    }
}
