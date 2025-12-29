<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        $ip = $request->ip();
        $route = $request->getRequestUri();
        $isFallback = $response->getStatusCode() === 404;
        $message = [
            'log' => $isFallback
                ? "O IP: $ip caiu em um fallback: $route"
                : "O IP: $ip requisitou a rota: $route",
            'fallback' => $isFallback
                ? 1
                : 0
        ];
        LogAcesso::create($message);
        return $response;
    }
}
