<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isForda
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
        if(!auth()->guard('web')->check()){
            return redirect(route('login'));
        }
        $user = $request->user();
        if(!($user->user_type=='App\Models\Forda')){
            return redirect(route('coming-soon'));
        }
        return $next($request);
    }
}
