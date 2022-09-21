<?php
require_once '../vendor/autoload.php';
require_once '../config/database.php';
echo 'old';
use Hillel\Model\Categorie;
use Hillel\Model\Post;
use Hillel\Model\Tag;


//  1. Створити 5 категорій (insert)
//for ($index = 0; $index <= 5; $index++){
//    $categorie = new Categorie();
//    $categorie->title = 'Title categorie' . $index;
//    $categorie->slug = 'Slug categorie'. $index;
//    $categorie->save();
//}

//  2. Змінити 1 категорію (update)
//$categorie = Categorie::find(3);
//$categorie->title = 'Title categorie1(Updata find(3))';
//$categorie->slug = 'Slug Update find(3)';
//$categorie->save();

//  3. Видалити 1 категорію (delete).
//$categorie = Categorie::find (2);
//$categorie->delete();


//  4. Створити 10 постів, прикріпивши довільну категорію.
//for($index = 0; $index <= 10; $index++){
//    $post = new Post();
//    $post->title = 'Title post '. $index;
//    $post->slug = 'Slug post ' . $index;
//    $post->body = 'Body post ' . $index;
//    $post->category_id = rand(3,7);
//    $post->save();
//}

//  5. Оновити 1 пост, замінивши поля + категорію.
//$post = Post::find(3);
//$post->title = 'Title post 1 (Update find(3))';
//$post->slug = 'Slug post 1 (Update find(3))';
//$post->body = 'Body post 1 (Update find(3))';
//$post->category_id = 5;
//$post->save();

//  6. Видалити пост.
//$post = Post::find(2);
//$post->delete();


//  7. Створити 10 тегів.
//for($index = 0; $index <= 10; $index++){
//    $tag = new Tag();
//    $tag->title = 'Title tag ' . $index;
//    $tag->slug = 'Slug tag ' . $index;
//    $tag->save();
//}

//  8. Кожному вже збереженому посту прикріпити по 3 випадкові теги.
//$tagsId = [];
//foreach (Tag::all() as $tag){
//    $tagsId[] = $tag->id;
//}
//
//$randTagId= function() use ($tagsId){
//    return rand(0,count($tagsId) - 1);
//};
//foreach (Post::all() as $post){
//    $post->tags()->sync([$tagsId[$randTagId()],$tagsId[$randTagId()],$tagsId[$randTagId()]]);
//}