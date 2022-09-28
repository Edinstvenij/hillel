<?php

namespace Hillel\Controllers;

use Illuminate\Http\RedirectResponse;
use Hillel\Model\Tag;

class TagController
{
    public function index()
    {
        $tags = Tag::all();
        return view('tags/index', compact('tags'));
    }

    public function show($id)
    {
    }

    public function create()
    {
        $tag = new Tag();
        return view('tags/create', compact('tag'));
    }

    public function store()
    {
        $request = request();
        $tag = new Tag();

        $tag->title = $request->input('title');
        $tag->slug = $request->input('slug');
        $tag->save();
        return new RedirectResponse('/tags');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tags/update', compact('tag'));
    }

    public function update()
    {
        $request = request();
        $tag = Tag::find($request->input('id'));
        $tag->title = $request->input('title');
        $tag->slug = $request->input('slug');
        $tag->save();
        return new RedirectResponse('/tags');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return new RedirectResponse('/tags');
    }
}