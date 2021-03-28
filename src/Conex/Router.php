<?php

namespace Conex;

use Conex\Controllers\ErrorController;

use LogicException;

final class Router
{
    private string $base;
    private array $routes = [];
    private array $methods = ['any', 'get', 'post', 'put', 'delete'];

    public function __call($name, $arguments): Route
    {
        if (!in_array($name, $this->methods)) {
            throw new LogicException($name . ' isn\'t a valid method.');
        }

        if (count($arguments) < 2) {
            throw new LogicException(
                $name . ' receives at least two parameters.'
            );
        }

        $route = new Route($this->base . $arguments[0]);
        $route->setMethod($name);
        $route->setController($arguments[1]);

        $this->append($route);

        return $route;
    }

    public function __construct(string $base = '')
    {
        $this->base = $base;
    }

    public function detect(string $uri, string $method): array
    {
        $controller = [];

        foreach ($this->routes as $route) {
            if ($route->getURI() == $uri && $route->getMethod() == $method) {
                $controller = $route->getController();
            }
        }

        if (empty($controller)) {
            $controller = [ErrorController::class, 'get'];
        }

        return $controller;
    }

    private function append(Route $route): void
    {
        $this->routes[] = $route;
    }
}