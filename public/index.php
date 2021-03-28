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

$router->get('/', [HomeController::class, 'get']);
$router->get('/login', [LoginController::class, 'get']);

/**
 * Inicializa a aplicação.
 */
(new Application(new Request(), new Response(), $router))->run();