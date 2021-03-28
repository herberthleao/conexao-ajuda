<?php

namespace Conex\Views;

final class HomeView extends View
{
    public function __construct()
    {
        parent::__construct();

        $this->data['title'] .= 'Boas-vindas!';

        $this->template->addContent('home');
        $this->template->addPartial('footer');
    }
}