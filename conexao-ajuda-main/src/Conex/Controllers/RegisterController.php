<?php

namespace Conex\Controllers;

use Conex\Request;
use Conex\Response;

final class RegisterController extends Controller
{
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response, [$request->getParsedURI()[2]]);
    }

    public function getInstitution()
    {
        return $this->view->getOutput();
    }

    public function getVolunteer()
    {
        return $this->view->getOutput();
    }
}