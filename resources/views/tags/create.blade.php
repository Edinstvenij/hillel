@extends('layout')


@section('title')
    Create tag
@endsection

@section('content')
    <div class="container mt-4">
        <form action="/tags/store" method="POST">
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug">
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
@endsection