<?php

namespace Conex\Controllers;

use Conex\Request;
use Conex\Response;

use Conex\Services\Service;
use Conex\Views\View;

use BadMethodCallException;

abstract class Controller
{
    protected Service $service;
    protected View $view;
    protected Request $request;
    protected Response $response;

    public function __construct(
        Request $request,
        Response $response,
        array $data = []
    ) {
        $this->request = $request;
        $this->response = $response;
        $this->setService();
        $this->setView($data);
    }

    public function get(): string
    {
        return $this->view->getOutput();
    }

    public function post(): string
    {
        throw new BadMethodCallException('Unsupported method.');
    }

    private function setService(): void
    {
        $service = str_replace('Controller', 'Service', get_class($this));
        $this->service = new $service();
    }

    private function setView(array $data): void
    {
        $view = str_replace('Controller', 'View', get_class($this));
        $this->view = new $view($data);
    }
}