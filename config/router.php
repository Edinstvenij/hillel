<?php

use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Hillel\Controllers\CategoryController;

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


$router->get('/categories', [CategoryController::class, 'index']);



//$router->get('/contact', [PageController::class, 'contact']);
//
//$router->get('/order', [OrderController::class, 'index']);
//$router->get('/order/{id}/show', [OrderController::class, 'show']);
//$router->get('/order/create', [OrderController::class, 'create']);
//$router->post('/order/store', [OrderController::class, 'store']);
//$router->get('/order/{id}/edit', [OrderController::class, 'edit']);
//$router->post('/order/update', [OrderController::class, 'update']);
//$router->get('/order/{id}/delete', [OrderController::class, 'destroy']);