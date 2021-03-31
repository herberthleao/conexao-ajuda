<?php

/**
 * Função responsável por carregar as classes automaticamente.
 */
spl_autoload_register(function ($class) {
    $base = dirname(dirname(__FILE__)) . '/src/';
    $file = $base . str_replace('\\', '/', $class) . '.php';

    if (file_exists($file)) {
        include_once $file;
    }
});

use Conex\Application;
use Conex\Request;
use Conex\Response;
use Conex\Router;

/**
 * Define as rotas.
 */
$router = new Router();

// Site
$router->get('/', [HomeController::class, 'get']);
$router->get('/login', [LoginController::class, 'get']);
$router->get(
    '/register/institution',
    [RegisterController::class, 'getInstitution']
);
$router->get(
    '/register/volunteer',
    [RegisterController::class, 'getVolunteer']
);
$router->get('/partner', [PartnerController::class, 'get']);
$router->get('/timeline', [TimelineController::class, 'get']);

// API
$router->post('/api/actions', [ActionController::class, 'getActionsData']);
$router->get(
    '/api/actions/next',
    [ActionController::class, 'getNextActionsData']
);
$router->post('/api/search', [ActionController::class, 'findActions']);
$router->post('/api/partner', [PartnerController::class, 'register']);

/**
 * Inicializa a aplicação.
 */
(new Application(new Request(), new Response(), $router))->run();