<?php

namespace Conex\Controllers;

use Conex\Request;
use Conex\Response;

final class ProfileController extends Controller
{
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response);
    }
}