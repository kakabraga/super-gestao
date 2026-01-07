<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use \App\Http\Controllers\Login;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (session()->has('email')) {
            return $next($request);
        }
        return redirect()->route('site.index')->withErrors(['usuario_off' => 'Usuario não está logado!']);
    }

    // public function verificaMetodoAuth($auth_metodo = ''): mixed
    // {
    //     if ($auth_metodo == 'padrao') {
    //         return true;
    //     }
    //     ;
    //     if ($auth_metodo == 'ldap') {
    //         $retorno = 'metodo por ldap ainda não implementado, tente de outra forma!';
    //         return $retorno;
    //     }
    //     ;
    //     return false;
    // }
}
