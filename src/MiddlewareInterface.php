<?php

namespace SlimInterfaces;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface MiddlewareInterface
{

  public function __invoke(RequestInterface $request, ResponseInterface $response, callable $next);
}
