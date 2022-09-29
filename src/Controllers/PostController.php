<?php

namespace Hillel\Controllers;

use Hillel\Model\Category;
use Hillel\Model\Post;
use Hillel\Model\Tag;
use Illuminate\Http\RedirectResponse;

class PostController
{
    private function autoValidator(array $arrSettings)
    {
        $data = request()->all();
        $validator = validator()->make($data, $arrSettings);
        if ($validator->fails()) {
            $_SESSION['data'] = $data;
            $_SESSION['errors'] = $validator->errors()->toArray();
            return new RedirectResponse($_SERVER['HTTP_REFERER']);

        }
        return $data;
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts/index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts/create', compact('categories', 'tags'));
    }

    public function store()
    {
        //  Custom validator
        $data = $this->autoValidator([
            'title' => ['required', 'min:2'],
            'slug' => ['required', 'min:2'],
            'body' => ['required', 'min:2'],
            'categoryId' => ['required'],
            'tagId' => ['required'],
        ]);
        if (!is_array($data)) {
            return $data;
        }

        $post = new Post();
        $post->title = $data['title'];
        $post->slug = $data['slug'];
        $post->body = $data['body'];
        $post->category_id = $data['categoryId'][0];
        $post->save();

        if (!empty($data['tagId'])) {
            $post->tags()->sync($data['tagId']);
        }

        $_SESSION['success'] = 'Запись Успешно добавлена';
        return new RedirectResponse('/posts');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts/update', compact('post', 'categories', 'tags'));
    }

    public function update()
    {
        $data = $this->autoValidator([
            'title' => ['required', 'min:2'],
            'slug' => ['required', 'min:2'],
            'body' => ['required', 'min:2'],
            'categoryId' => ['required'],
        ]);
        if (!is_array($data)) {
            return $data;
        }
        $post = Post::find($data['id']);
        $post->title = $data['title'];
        $post->slug = $data['slug'];
        $post->slug = $data['body'];
        $post->category_id = $data['categoryId'];
        $post->save();

        if (!empty($data['tagId'])) {
                $post->tags()->sync($data['tagId']);
        }

        $_SESSION['success'] = 'Запись Успешно обновлена';
        return new RedirectResponse('/posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return new RedirectResponse('/posts');
    }
}

