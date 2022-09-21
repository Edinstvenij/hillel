<?php

if(empty($_GET['id'])){
    throw new InvalidArgumentException('Error get parameter');
}

require_once '../../vendor/autoload.php';
require_once '../../config/database.php';
require_once '../../config/blade.php';


$category = \Hillel\Model\Tag::find($_GET['id']);
$category->delete();
header('Location:list.php');