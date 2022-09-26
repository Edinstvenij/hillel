@extends('layout')


@section('title')
    update category
@endsection

@section('content')
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="col">{{ $category->id }}</th>
            <th scope="col">{{ $category->title }}</th>
            <th scope="col">{{ $category->slug }}</th>
            <th scope="col">{{ $category->created_at }}</th>
            <th scope="col">{{ $category->updated_at }}</th>
        </tr>
        </tbody>
    </table>
    <div class="container mt-4">
        <form action="/categories/update" method="POST">
            <input type="hidden" id="id" name="id" value="{{ $category->id }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $category->title }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
@endsection