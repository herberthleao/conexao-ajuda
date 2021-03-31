<?php

namespace Conex\Controllers;

use Conex\Request;
use Conex\Response;

final class LoginController extends Controller
{
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response, [], true, true);
    }

    public function checkLogin(): string
    {
        /*$value = $this->service->validarLogin(
            $this->request->getParam('user'),
            $this->request->getParam('pass')
        );

        if (empty($value))
        {
            header('Location: /timeline');
            exit;
        } else 
        {
            return json_encode($value);
        }*/

        return json_encode('');
    }
}