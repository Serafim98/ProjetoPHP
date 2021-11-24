<?php

require __DIR__.'/vendor/autoload.php';
$method =$_SERVER['REQUEST_METHOD'];
$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

$router = new App\Router($method, $path);

$router->get('/', 'App\Controller\HomeController::index');

$router->get('/generos', 'App\Controller\GeneroController::index');

$router->get('/generos/novo', 'App\Controller\GeneroController::create');

$router->post('/generos/salvar', 'App\Controller\GeneroController::store');

$router->get('/generos/alterar/{id}', 'App\Controller\GeneroController::edit');

$router->get('/generos/excluir/{id}', 'App\Controller\GeneroController::delete');

$router->post('/generos/atualizar/{id}', 'App\Controller\GeneroController::update');

$router->post('/generos/remover/{id}', 'App\Controller\GeneroController::remove');


$result = $router->handler();

if(!$result){
    http_response_code(404);
    echo "Página não encontrada!";
    die();
}

$result = explode('::', $result);
$controller = new $result[0];
$action = $result[1];
$controller->$action($router->getParams());