<?php
require_once '../../vendor/autoload.php';
require_once '../../config/database.php';
require_once '../../config/blade.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tag = new \Hillel\Model\Tag();
    $tag->title = $_POST['title'];
    $tag->slug = $_POST['slug'];
    $tag->save();
    header('Location:index2.php');

}

/**  @var $blade */
echo $blade->make('categories/create')->render();
