<?php

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Hillel\Controllers\CategoryController;
use Hillel\Controllers\TagController;

$request = Request::createFromGlobals();

function request()
{
    global $request;

    return $request;
}

$router = new Router(new Dispatcher(), (new Container()));

function router()
{
    global $router;

    return $router;
}


$router->get('/', function () {
    return view('index');
});
//  Category
$router->get('/categories', [CategoryController::class, 'index']);
$router->get('/categories/create', [CategoryController::class, 'create']);
$router->post('/categories/store', [CategoryController::class, 'store']);
$router->get('/categories/{id}/edit', [CategoryController::class, 'edit']);
$router->post('/categories/update', [CategoryController::class, 'update']);
$router->get('/categories/{id}/delete', [CategoryController::class, 'destroy']);

//  Category
$router->get('/tags', [TagController::class, 'index']);
$router->get('/tags/create', [TagController::class, 'create']);
$router->post('/tags/store', [TagController::class, 'store']);
$router->get('/tags/{id}/edit', [TagController::class, 'edit']);
$router->post('/tags/update', [TagController::class, 'update']);
$router->get('/tags/{id}/delete', [TagController::class, 'destroy']);


//$router->get('/contact', [PageController::class, 'contact']);
//
//$router->get('/order', [OrderController::class, 'index']);
//$router->get('/order/{id}/show', [OrderController::class, 'show']);
//$router->get('/order/create', [OrderController::class, 'create']);
//$router->post('/order/store', [OrderController::class, 'store']);
//$router->get('/order/{id}/edit', [OrderController::class, 'edit']);
//$router->post('/order/update', [OrderController::class, 'update']);
//$router->get('/order/{id}/delete', [OrderController::class, 'destroy']);