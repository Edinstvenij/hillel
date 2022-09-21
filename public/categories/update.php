<?php
require_once '../../vendor/autoload.php';
require_once '../../config/database.php';
require_once '../../config/blade.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = \Hillel\Model\Categorie::find($_POST['id']);
    $category->title = $_POST['title'];
    $category->slug = $_POST['slug'];
    $category->save();
    header('Location:list.php');

} else if (empty($_GET['id'])) {
    throw new InvalidArgumentException('Error get parameter');
}
$category = \Hillel\Model\Categorie::find($_GET['id']);

/**  @var $blade */
echo $blade->make('categories/update', [
    'category' => $category
])->render();
//categories/list-categories