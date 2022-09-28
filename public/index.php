<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../config/database.php';
require_once '../config/blade.php';
require_once '../config/validator.php';
require_once '../config/router.php';


/**
 * @var \Illuminate\Routing\Router $router
 * @var \Illuminate\Http\Request $request
 */

$responce = $router->dispatch($request);
echo $responce->getContent();
