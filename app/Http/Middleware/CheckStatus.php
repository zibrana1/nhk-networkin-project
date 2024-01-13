<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        $status = User::findOrFail($request->status);
        if($user->$status ==='client'){
            return redirect()->route('ventes.index');
        }else{
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
