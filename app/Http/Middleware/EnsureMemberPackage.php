<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class EnsureMemberPackage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       
        $plan = $request->user()->plan->name;
      /*  if ($request->route('plan') != $plan) {
           return redirect()->route('home');
        } 
     */


    if (! $request->user()->hasPlan($plan)) {
        return redirect()->route('home');
    }

      
        // return redirect()->route('home');
         
        $response = $next($request);
         
       /* if ($request->route('plan') == $plan) {
            return redirect()->route('dashboard.' .$plan);
         } */
         return $response;

    }
}
