<?php

declare(strict_types=1);

namespace App\Middleware;


use Hyperf\Utils\Context;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Scpzc\HyperfDb\Db;

class RouteMiddleware implements MiddlewareInterface
{


    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        var_dump(22222);
        return $handler->handle($request);
    }
}