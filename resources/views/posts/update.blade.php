@extends('layout')


@section('title')
    update post
@endsection

@section('content')
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">body</th>
            <th scope="col">tag title</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->body }}</td>
            <td>@foreach($post->tags()->where('post_id', $post->id)->get() as $tag) {{ $tag->title. '; ' }}@endforeach</td>
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->updated_at }}</td>
        </tr>
        </tbody>
    </table>

    <div class="container mt-4">
        <form action="/posts/update" method="POST">
            <input type="hidden" id="id" name="id" value="{{ $post->id }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{  $_SESSION['data']['title'] ??$post->title  }}">
                @isset($_SESSION['errors']['title'])
                    @foreach($_SESSION['errors']['title'] as $error)
                        <div class="alert alert-danger" role="alert">
                            {{   $error  }}
                        </div>
                    @endforeach
                @endisset
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $_SESSION['data']['slug'] ?? $post->slug  }}">
                @isset($_SESSION['errors']['slug'])
                    @foreach($_SESSION['errors']['slug'] as $error)
                        <div class="alert alert-danger" role="alert">
                            {{   $error  }}
                        </div>
                    @endforeach
                @endisset
            </div>
            <div class="form-group">
                <label for="slug">body</label>
                <textarea class="form-control" id="body" name="body" placeholder="Enter body">{{  $_SESSION['data']['body']??  $post->body }}</textarea>
                @isset($_SESSION['errors']['body'])
                    @foreach($_SESSION['errors']['body'] as $error)
                        <div class="alert alert-danger" role="alert">
                            {{   $error  }}
                        </div>
                    @endforeach
                @endisset
            </div>
            <div class="mt-4 form-floating">
                <select class="form-select" id="floatingSelect" style="height: 80px;" name="categoryId">
                    @foreach($categories as $category)
                        <option {{ $category->id == $post->category_id? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Select category</label>
            </div>
            <div class="mt-4 form-floating">
                <select class="form-select" id="floatingSelect" style="height: 80px;" name="tagId[]" multiple>
                    @foreach($tags as $tag)
                        <option {{ $post->tags()->where('tag_id', $tag->id)->first()? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Select tag(s) + ctrl</label>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
    @php
        unset($_SESSION['errors']);
        unset($_SESSION['data']);
    @endphp
@endsection