<?php


require_once '../../vendor/autoload.php';
require_once '../../config/database.php';
require_once '../../config/blade.php';


$tags = \Hillel\Model\Tag::all();

/**  @var $blade */
echo $blade->make('tags/list', [
    'tags'=>$tags
])->render();
//categories/list-categories