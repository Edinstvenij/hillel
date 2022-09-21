<?php


require_once '../../vendor/autoload.php';
require_once '../../config/database.php';
require_once '../../config/blade.php';


$categories = \Hillel\Model\Categorie::all();

/**  @var $blade */
echo $blade->make('categories/list', [
    'categories'=>$categories
])->render();
//categories/list-categories