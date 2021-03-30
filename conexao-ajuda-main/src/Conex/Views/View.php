<?php

namespace Conex\Views;

abstract class View
{
    protected array $data = [];
    protected string $content;
    protected int $format = 0;
    protected string $output;
    protected Template $template;

    public function __construct()
    {
        $this->template = new Template();
        $this->template->addPartial('head');

        $this->data['title'] = 'Conexão Ajuda &mdash; ';
        $this->data['host'] = '/';
    }

    public function addData(array $data): void
    {
        $this->data = array_merge($this->data, $data);
    }

    public function getOutput(): string
    {
        return $this->template->parseContent($this->data);
    }
}