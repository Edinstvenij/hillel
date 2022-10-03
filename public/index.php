<?php
session_start();
require_once '../vendor/autoload.php';
require_once '../config/dotenv.php';
require_once '../config/database.php';
require_once '../config/blade.php';
require_once '../config/validator.php';
require_once '../config/router.php';


///**
// * @var \Illuminate\Routing\Router $router
// * @var \Illuminate\Http\Request $request
// */

//$responce = $router->dispatch($request);
//echo $responce->getContent();

use Hillel\Model\PizzaChickenGrill;
use Hillel\Model\PizzaMexico;
use Hillel\Model\PizzaMunhenskaya;
use Hillel\Model\PizzaCalculator;

$chicen = new PizzaChickenGrill();
$mexico = new PizzaMexico();
$munhen = new PizzaMunhenskaya();

$calc = new PizzaCalculator();
//
//echo '<pre>';
//print_r($chicen->getIngredients());
//echo '</pre>';
//echo '<pre>';
//print_r($mexico->getIngredients());
//echo '</pre>';
//echo '<pre>';
//print_r($munhen->getIngredients());
//echo '</pre>';

$calc->add($mexico);
$calc->add($munhen);
$calc->add($chicen);
echo '<pre>';
print_r($calc->getBasket());
echo '</pre>';

var_dump($calc->ingredients());
echo '<br>';
echo '<br>';
var_dump($calc->price());

