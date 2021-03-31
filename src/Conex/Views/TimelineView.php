<?php

namespace Conex\Views;

final class TimelineView extends View
{
    public function __construct()
    {
        parent::__construct();

        $this->data['title'] .= 'Ações';
        $this->data['show'] = '["profile"]';
        $this->data['hide'] = '["menu", "navbarNav"]';

        $this->template->addPartial('header');
        $this->template->addContent('timeline');
        $this->template->addPartial('footer');
    }
}