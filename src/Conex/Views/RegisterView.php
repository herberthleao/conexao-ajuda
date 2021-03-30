<?php

namespace Conex\Views;

final class RegisterView extends View
{
    public function __construct(array $data)
    {
        parent::__construct();
        $type = strtolower($data[0]);
        $title = ($type == 'volunteer') ? 'Voluntário' : 'Instituição';
        
        $this->data['title'] .= 'Cadastrar ' . $title;
        $this->data['type'] = $title;

        $this->template->addContent('register-' . $type);
    }
}