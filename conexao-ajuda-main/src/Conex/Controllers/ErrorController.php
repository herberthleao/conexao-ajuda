<?php

namespace Conex\Controllers;

use Conex\Request;
use Conex\Response;

class ErrorController extends Controller
{
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);

        $status = 404;
        $this->response->setStatus($status);

        $data['code'] = $status;
        $data['message'] = 'Página não encontrada!';

        $this->view->addData($data);
    }
}