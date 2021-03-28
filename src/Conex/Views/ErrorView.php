<?php

namespace Conex\Views;

class ErrorView extends View
{
    public function __construct()
    {
        parent::__construct();

        $this->data['title'] .= 'Página não encontrada';

        $this->template->addContent('error');
        $this->template->addPartial('footer');
    }
}