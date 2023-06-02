<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Cache\RateLimiter;
use Symfony\Component\HttpFoundation\Response;

class RequestThrottle
{
    protected $limiter;

    public function __construct(RateLimiter $limiter)
    {
        $this->limiter = $limiter;
    }

    public function handle($request, Closure $next, $maxRequests = 1, $decaySeconds = 1)
    {
        $key = $this->resolveRequestSignature($request);

        if ($this->limiter->tooManyAttempts($key, $maxRequests)) {
            abort(Response::HTTP_TOO_MANY_REQUESTS, 'Too Many Requests');
        }

        $this->limiter->hit($key, $decaySeconds);

        return $next($request);
    }

    protected function resolveRequestSignature($request)
    {
        return sha1(
            $request->method() . '|' . $request->server('SERVER_NAME') . '|' . $request->ip()
        );
    }
}
