<?php

namespace Hillel\Controllers;

use Illuminate\Http\RedirectResponse;
use Hillel\Model\Tag;

class TagController
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
        $tags = Tag::all();
        return view('tags/index', compact('tags'));
    }

    public function create()
    {
        $tag = new Tag();
        return view('tags/create', compact('tag'));
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


        $request = request();
        $tag = new Tag();

        $tag->title = $data['title'];
        $tag->slug = $data['slug'];
        $tag->save();

        $_SESSION['success'] = 'Запись Успешно добавлена';
        return new RedirectResponse('/tags');
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('tags/update', compact('tag'));
    }

    public function update()
    {
        $data = $this->autoValidator([
            'title' => ['required', 'min:2'],
            'slug' => ['required', 'min:2'],
        ]);
        if (!is_array($data)) {
            return $data;
        }

        $tag = Tag::find($data['id']);
        $tag->title = $data['title'];
        $tag->slug = $data['slug'];
        $tag->save();

        $_SESSION['success'] = 'Запись Успешно обновлена';
        return new RedirectResponse('/tags');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return new RedirectResponse('/tags');
    }

    public function trash()
    {
        $tags = Tag::onlyTrashed()->get();
        return view('tags/index', compact('tags'));
    }

    public function restore($id)
    {
        Tag::withTrashed()
            ->where('id', $id)
            ->restore();
        return new RedirectResponse('/tags/trash');
    }

    public function forceDelete($id)
    {
        Tag::onlyTrashed()
            ->where('id', $id)
            ->forceDelete();
        return new RedirectResponse('/tags/trash');
    }

}