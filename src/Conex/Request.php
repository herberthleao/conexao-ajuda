<?php

namespace Conex;

final class Request
{
    private string $uri;
    private string $method;
    private array $parsedURI = [];

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->method = strtoupper($_SERVER['REQUEST_METHOD']);
        $this->parsedURI = explode('/', $this->uri);
    }

    public function getURI(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getParsedURI(): array 
    {
        return $this->parsedURI;
    }

    public function getParam(string $name): string
    {
        return ($_REQUEST[$name]) ? $_REQUEST[$name] : '';
    }
}