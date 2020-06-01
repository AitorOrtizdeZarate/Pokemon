<?php

namespace App\Http\Middleware;

use Closure;

class SoloDia
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
        $permitido = strtotime(date("Y-m-d")."14:00:00");
        $hora = strtotime(date("Y-m-d H:i:s"));
        if ($hora > $permitido){
            return $next($request);
        }
        else {
            return redirect('medallas');
        }
        
    }
}
