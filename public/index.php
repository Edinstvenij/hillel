<?php
require_once '../vendor/autoload.php';
require_once '../config/database.php';
//   1.
//for ($index = 100; $index < 105; $index++) {
//$category = new \Hillel\Model\Category();
//$category->title = 'Title category ' . $index;
//$category->slug = 'Slug category ' . $index;
//$category->save();
//}

//   2.
//$category = \Hillel\Model\Category::find (10);
//$category->title = 'Title category 1000';
//$category->slug = 'Slug category 1000';
//$category->save();

//   3.
//$category = \Hillel\Model\Category::find (10);
//$category->delete();


//   4.
//for ($index = 100; $index < 110; $index++) {
//    $post = new \Hillel\Model\Post();
//    $post->title = 'Title category ' . $index;
//    $post->slug = 'Slug category ' . $index;
//    $post->body = 'loremloremloremloremloremloremloremloremloremlorem';
//    $post->category_id = rand(11,14);
//    $post->save();
//}

//   5.
//$post =  \Hillel\Model\Post::find(17);
//    $post->title = 'Title category    Find1111111 ';
//    $post->slug = 'Slug category    Find1111111 ';
//    $post->body = 'loremlorem   Find1111111 loremloremloremloremloremloremloremlorem';
//    $post->category_id = rand(11,14);
//    $post->save();

//   6.
//$post =  \Hillel\Model\Post::find(17);
//$post->delete();

//   7.
//for ($index = 100; $index < 110; $index++) {
//    $tag = new \Hillel\Model\Tag();
//    $tag->title = 'Title tag ' . $index;
//    $tag->slug = 'Slug tag ' . $index;
//    $tag->save();
//}


//   8.
//$callback = function (){
//    $tagId = [];
//    foreach (\Hillel\Model\Tag::all() as $tag) {
//       $tagId[] = $tag->id;
//    }
//    $randNumber = rand(0, count($tagId));
//return $tagId[$randNumber];
//};
//
//foreach (\Hillel\Model\Post::all() as $post) {
//    $post->tags()->sync([$callback(),$callback(),$callback()]);
//}
