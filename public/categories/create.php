<?php
require_once '../../vendor/autoload.php';
require_once '../../config/database.php';
require_once '../../config/blade.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = new \Hillel\Model\Categorie();
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location:list.php');

}

/**  @var $blade */
echo $blade->make('categories/create')->render();
