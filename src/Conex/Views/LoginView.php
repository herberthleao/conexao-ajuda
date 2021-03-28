<?php

namespace Conex\Views;

final class LoginView extends View
{
    public function __construct()
    {
        parent::__construct();

        $this->data['title'] .= 'Login';
    }
}