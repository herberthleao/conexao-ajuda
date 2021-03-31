<?php

namespace Conex\Controllers;

use Conex\Request;
use Conex\Response;

final class ActionController extends Controller
{
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response, [], false, true);
    }

    public function getActionsData(): string
    {
        return json_encode($this->service->getActions(
            (int) $this->request->getParam('limit')
        ));
    }

    public function findActions(): string
    {
        return json_encode($this->service->getActionsByKeywords(
            $this->request->getParam('keywords')
        ));
    }
}