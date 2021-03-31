<?php

namespace Conex\Controllers;

use Conex\Request;
use Conex\Response;

final class LoginController extends Controller
{
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
    }

    public function checkLogin() 
    {
        $value = $this->service->validarLogin($request->getParam('user'), $request->getParam('pass'));

        if (empty($value))
        {
            header('Location: /timeline');
            exit;
        } else 
        {
            return json_encode($value);
        }
    }
}