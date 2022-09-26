<?php

namespace Hillel\Controllers;

use Hillel\Model\Category;
use Illuminate\Http\RedirectResponse;

class CategoryController
{
    public function index()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));

    }

    public function show($id)
    {
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function edit($id)
    {
    }

    public function update()
    {
    }

    public function destroy($id)
    {
    }
}