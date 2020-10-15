<?php

namespace Middleware\Middlewares;

use Middleware\HTTP\RequestInterface;
use Middleware\HTTP\ResponseInterface;

use Middleware\Interfaces\MiddlewareInterface;
use Middleware\Interfaces\HttpHandlerInterface;

class FooMiddleware implements MiddlewareInterface
{

    public function process(RequestInterface $request, HttpHandlerInterface $next): ResponseInterface
    {
        print '⬇FooMiddleware 通過<br>';

        return $next->handle($request);
    }
}