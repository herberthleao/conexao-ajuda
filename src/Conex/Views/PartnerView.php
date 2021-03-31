<?php

namespace Conex\Views;

final class PartnerView extends View
{
    public function __construct()
    {
        parent::__construct();

        $this->data['title'] .= 'Parceiros';

        $this->template->addContent('partner');
    }
}