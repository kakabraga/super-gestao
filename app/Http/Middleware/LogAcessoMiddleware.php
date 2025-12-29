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
        $log = $this->buildLogContext($request, $response);
        LogAcesso::create($this->geraMessageLog($log));
        return $response;
    }

    public function geraMessageLog(array $log): array
    {
        return [
            'log' => $log['isFallback']
                ? "O IP: {$log['ip']} caiu em um fallback: {$log['route']}"
                : "O IP: {$log['ip']} requisitou a rota: {$log['route']}",
            'fallback' => $log['isFallback'],
            'method' => $log['method']
        ];
    }

    private function buildLogContext(Request $request, Response $response): array
    {
        return [
            'ip' => $request->ip(),
            'route' => $request->getRequestUri(),
            'method' => $request->method(),
            'status' => $response->getStatusCode(),
            'isFallback' => $response->getStatusCode() === 404,
        ];
    }
}
