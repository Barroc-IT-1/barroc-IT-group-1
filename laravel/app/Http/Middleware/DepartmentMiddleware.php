<?php

namespace App\Http\Middleware;

use Closure;

class DepartmentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = null)

    {
      /*  if (Auth::guard($guard)->check()) {
            return redirect('/');

        } */

        if  (Auth::user()->roles = 'sales'){

            return redirect('/sales');

        }

        elseif  (Auth::user()->roles = 'development'){

            return redirect('/development');

        }

        elseif  (Auth::user()->roles = 'finance'){

            return redirect('/finance');

        }
        return $next($request);
    }

}
