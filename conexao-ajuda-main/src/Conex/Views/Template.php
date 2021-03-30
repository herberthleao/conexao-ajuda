<?php

namespace Conex\Views;

final class Template
{
    private array $contents = [];
    private string $directory;

    public function __construct()
    {
        $this->directory = dirname(dirname(dirname(dirname(__FILE__))));
        $this->directory .= '/res/views';
    }

    public function addPartial(string $partial): void
    {
        $this->contents[] = [$partial, true];
    }

    public function addContent(string $content): void
    {
        $this->contents[] = [$content, false];
    }

    public function parseContent(array $data): string
    {
        $content = $this->format();

        foreach ($data as $key => $value) {
            $content = str_replace('{{ ' . $key . ' }}', $value, $content);
        }

        return $content;
    }

    private function format(): string
    {
        $template = '';

        foreach ($this->contents as $content) {
            $base = ($content[1]) ? '/partials/' : '/';

            $file = $this->directory . $base . $content[0] . '.html';

            if (file_exists($file)) {
                $template .= file_get_contents($file);
            }
        }

        return $template;
    }
}