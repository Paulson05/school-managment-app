<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if($request->routeIs('admin.*')){
                return route('admin.get.login');
            }
            if($request->routeIs('lecturer.*')){
                return route('lecture.get.login');
            }
            return route('user.getlogin');

        }


//        if (! $request->expectsJson()) {
//            if($request->routeIs('admin.*')){
//
//                return  redirect()->route('admin.get.login');
//            }elseif($request->routeIs('writer.*')){
//                return  redirect()->route('writer.login');
//            }elseif ($request->routeIs('user.*')) {
//                return redirect()->route('user.login');
//            }else{
//                return redirect()->route('homepage');
//            }
//        }

    }
}
