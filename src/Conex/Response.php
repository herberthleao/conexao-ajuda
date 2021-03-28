<?php

namespace Conex;

final class Response
{
    private int $status;
    private string $message;
    private string $content;

    public function __construct()
    {
        $this->status = 200;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function send(): void
    {
        $this->sendHeaders();
        echo $this->content;
    }

    private function sendHeaders(): void
    {
        http_response_code($this->status);
    }
}