<?php

namespace Conex;

class Route
{
    private string $uri;
    private string $method;
    private array $controller;
    private string $controllerNamespace = 'Conex\\Controllers\\';

    public function __construct(string $uri)
    {
        $this->uri = $uri;
    }

    public function getController(): array
    {
        return $this->controller;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getURI(): string
    {
        return $this->uri;
    }

    public function setController(array $controller): void
    {
        $controller[0] = $this->controllerNamespace . $controller[0];
        $this->controller = $controller;
    }

    public function setMethod(string $method): void
    {
        $this->method = strtoupper($method);
    }
}
