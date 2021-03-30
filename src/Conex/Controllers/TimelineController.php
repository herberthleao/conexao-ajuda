<?php

namespace Conex\Controllers;

use Conex\Request;
use Conex\Response;

final class TimelineController extends Controller
{
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response, [], true, false);
    }

    public function get(): string
    {
        $name = (isset($_SESSION['name'])) ? $_SESSION['name'] : 'Visitante';
        $this->view->addData(['user' => $name]);

        return parent::get();
    }
}