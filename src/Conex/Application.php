<?php

namespace Conex;

final class Application
{
    private Request $request;
    private Response $response;
    private Router $router;
    private array $controller;

    public function __construct(
        Request $request,
        Response $response,
        Router $router
    ) {
        $this->request = $request;
        $this->response = $response;
        $this->router = $router;
        $this->controller = $this->router->detect(
            $this->request->getURI(),
            $this->request->getMethod()
        );
    }

    public function run(): void
    {
        $controllerClass = $this->controller[0];
        $controllerMethod = $this->controller[1];
        $controller = new $controllerClass($this->request, $this->response);

        $this->response->setContent($controller->$controllerMethod());
        $this->response->send();
    }
}
