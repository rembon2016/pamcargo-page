<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use App\Models\WebVisitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class CountWebVisitor
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        $cacheName = 'guest:'.$request->getClientIp();

        if (!Cache::has($cacheName)) {
            Cache::remember($cacheName, 60*60*24,
                function () use ($request, $response) {
                    return [
                        'session_id' => session()->getId(),
                        'ip' => $request->getClientIp(),
                        'ajax' => $request->ajax(),
                        'url' => $request->fullUrl(),
                        'payload' => $request->all(),
                        'status_code' => $response->getStatusCode()
                    ];
                }
            );

            WebVisitor::create(Cache::get($cacheName));
        }

        return $response;
    }
}
