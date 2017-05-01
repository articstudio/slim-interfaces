<?php

namespace Articstudio\SlimInterfaces\Contracts;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface Middleware {

    public function __invoke(RequestInterface $request, ResponseInterface $response, callable $next);
}
