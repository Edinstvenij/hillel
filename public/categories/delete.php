<?php

if (empty($_GET['id'])) {
    throw new InvalidArgumentException('Error get parameter');
}

require_once '../../vendor/autoload.php';
require_once '../../config/database.php';
require_once '../../config/blade.php';


$category = \Hillel\Model\Category::find($_GET['id']);
$category->delete();
header('Location:index.php');