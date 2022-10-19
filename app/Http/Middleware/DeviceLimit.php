<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DeviceLimit
{
    public $userdevice;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()){
        $this->userdevice =  DB::table('sessions')->where('user_id',$request->user()->id)->count();
        if($this->userdevice > 2)
        {
            abort(403,'Oops !! Your device limit has been exceeded , Please log out from another device. At a time you can read books from 2 devices only');
             
        }
        else
        {
            return $next($request);
        }
    }
        return $next($request);
    }
}
