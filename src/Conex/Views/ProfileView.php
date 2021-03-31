<?php

namespace Conex\Views;

final class ProfileView extends View
{
    public function __construct()
    {
        parent::__construct();

        $this->data['title'] = 'Perfil';

        $this->template->addPartial('header');
        $this->template->addContent('profile');
        $this->template->addPartial('footer');
    }
}