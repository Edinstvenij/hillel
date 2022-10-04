<?php

namespace Hillel\Controllers;

use Hillel\Model\Category;
use Hillel\Model\Post;
use Illuminate\Http\RedirectResponse;

class CategoryController
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
        $categories = Category::all();
        return view('categories/index', compact('categories'));
    }

    public function create()
    {
        $category = new Category();
        $posts = Post::all();
        return view('categories/create', compact('category', 'posts'));
    }

    public function store()
    {
        //  Custom validator
        $data = $this->autoValidator([
            'title' => ['required', 'min:2'],
            'slug' => ['required', 'min:2'],
        ]);
        if (!is_array($data)) {
            return $data;
        }

        $category = new Category();
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->save();

        for ($index = 0, $count = count($data['postId']); $index < $count; $index++) {
            $post = Post::find($data['postId'][$index]);
            $post->category_id = $category->id;
            $post->save();
        }

        $_SESSION['success'] = 'Запись Успешно добавлена';
        return new RedirectResponse('/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $postsCheck = $category->posts()->where('category_id', $category->id)->get();
        $posts = Post::all();
        return view('categories/update', compact('category', 'postsCheck', 'posts'));
    }

    public function update()
    {
        $data = $this->autoValidator([
            'postId' => ['required'],
            'id' => ['required', 'exists:Hillel\Model\Category,id'],
            'title' => ['required', 'min:2'],
            'slug' => ['required', 'min:2'],
        ]);
        if (!is_array($data)) {
            return $data;
        }

        $category = Category::find($data['id']);
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->save();

        for ($index = 0, $count = count($data['postId']); $index < $count; $index++) {
            $post = Post::find($data['postId'][$index]);
            $post->category_id = $category->id;
            $post->save();
        }


        $_SESSION['success'] = 'Запись Успешно обновлена';
        return new RedirectResponse('/categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return new RedirectResponse('/categories');
    }

    public function trash()
    {
        $categories = Category::onlyTrashed()->get();
        return view('categories/index', compact('categories'));
    }

    public function restore($id)
    {
        Category::withTrashed()
            ->where('id', $id)
            ->restore();
        return new RedirectResponse('/categories/trash');
    }

    public function forceDelete($id)
    {
        Category::onlyTrashed()
            ->where('id', $id)
            ->forceDelete();
        return new RedirectResponse('/categories/trash');
    }

}