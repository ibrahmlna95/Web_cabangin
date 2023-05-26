<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HasSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('id') && $this->isRolePenulis()) {
            return $next($request);
        }else{
            return redirect(route('penulis.auth.login.page'))->with([
                'status'=>'fail',
                'message'=>'session tidak ada'
            ]);
        }
        
    }

    public function isRolePenulis():bool
    {
        if (session()->has('role')) {
            if (session('role')=='penulis') {
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}
