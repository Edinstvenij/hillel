<?php

namespace Hillel\Controllers;

use Hillel\Model\Category;
use Illuminate\Http\RedirectResponse;

class CategoryController
{
    public function index()
    {
        $categories = Category::all();
        return view('categories/index', compact('categories'));
    }

    public function show($id)
    {
    }

    public function create()
    {
        $category = new Category();
        return view('categories/create', compact('category'));
    }

    public function store()
    {
        $request = request();
        $category = new Category();

        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->save();
        return new RedirectResponse('/categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories/update', compact('category'));
    }

    public function update()
    {
        $request = request();
        $category = Category::find($request->input('id'));
        $category->title = $request->input('title');
        $category->slug = $request->input('slug');
        $category->save();
        return new RedirectResponse('/categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return new RedirectResponse('/categories');
    }
}