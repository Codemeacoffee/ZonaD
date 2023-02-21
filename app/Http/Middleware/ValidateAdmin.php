<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ValidateAdmin
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
        $adminCookie = $request->cookie('adminIdentifier');
        $adminRememberToken = $request->cookie('adminRememberToken');

        if($adminCookie && $adminRememberToken){
            $admin = Admin::where('user', $adminCookie)->first();
            if ($admin && $adminRememberToken == $admin->token) return $next($request);
        }
        Cookie::queue(Cookie::forget('adminIdentifier'));
        Cookie::queue(Cookie::forget('adminRememberToken'));
        return redirect('admin');
    }
}
