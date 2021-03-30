<?php

namespace Conex\Controllers;

use Conex\Request;
use Conex\Response;

final class ActionController extends Controller
{
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
    }

    public function getActionsData(): string
    {
        return json_encode($this->service->getActions());
    }
}