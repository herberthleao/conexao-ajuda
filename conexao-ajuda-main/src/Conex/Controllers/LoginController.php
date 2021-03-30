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
}