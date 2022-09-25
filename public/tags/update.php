<?php
require_once '../../vendor/autoload.php';
require_once '../../config/database.php';
require_once '../../config/blade.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tag = \Hillel\Model\Tag::find($_POST['id']);
    $tag->title = $_POST['title'];
    $tag->slug = $_POST['slug'];
    $tag->save();
    header('Location:index.php');

} else if (empty($_GET['id'])) {
    throw new InvalidArgumentException('Error get parameter');
}
$tag = \Hillel\Model\Tag::find($_GET['id']);

/**  @var $blade */
echo $blade->make('tags/update', [
    'tag' => $tag
])->render();
