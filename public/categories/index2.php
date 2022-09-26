<?php


require_once '../../vendor/autoload.php';
require_once '../../config/database.php';
require_once '../../config/blade.php';


$categories = \Hillel\Model\Category::all();

/**  @var $blade */
echo $blade->make('categories/index', [
    'categories' => $categories
])->render();
