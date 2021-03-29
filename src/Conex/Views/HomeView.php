<?php

namespace Conex\Views;

final class HomeView extends View
{
    public function __construct()
    {
        parent::__construct();

        $this->data['title'] .= 'Boas-vindas!';

        $this->template->addPartial('header');
        $this->template->addContent('home');
        $this->template->addPartial('footer');
    }
}