<?php

namespace Conex\Controllers;

use Conex\Request;
use Conex\Response;

final class PartnerController extends Controller
{
    public function __construct(Request $request, Response $response)
    {
        parent::__construct($request, $response, [], true, true);
    }

    public function register(): string
    {
        $result = $this->service->checkData(
            $this->request->getParam('cnpj'),
            $this->request->getParam('pass')
        );

        $data = null;
        if (is_null($result)) {
            $data = false;
        } elseif (empty($result)) {
            $data = true;
        } else {
            $data = $result;
        }

        return json_encode($data);
    }
}