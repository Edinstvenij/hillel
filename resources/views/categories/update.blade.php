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
            <th scope="col">post name</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="col">{{ $category->id }}</th>
            <th scope="col">{{ $category->title }}</th>
            <th scope="col">{{ $category->slug }}</th>
            <td>@foreach($category->posts as $post)
                    {{$post->title.'; '}}
                @endforeach</td>
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
                <input type="text" class="form-control" id="title" name="title" value="{{  $_SESSION['data']['title'] ??$category->title  }}">
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
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $_SESSION['data']['slug'] ?? $category->slug  }}">
                @isset($_SESSION['errors']['slug'])
                    @foreach($_SESSION['errors']['slug'] as $error)
                        <div class="alert alert-danger" role="alert">
                            {{   $error  }}
                        </div>
                    @endforeach
                @endisset
            </div>
            <div class="mt-4 form-floating">
                <select class="form-select" id="floatingSelect" name="postId[]" style="height: 150px" multiple>
                    @foreach($posts as $post)
                        <option @foreach($postsCheck as $postCheck)
                                    {{  $postCheck->id == $post->id ? 'selected' : ''  }}
                                @endforeach
                                value="{{ $post->id }}">{{ $post->title }}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Select post(s) + ctrl</label>
                @isset($_SESSION['errors']['postId'])
                    @foreach($_SESSION['errors']['postId'] as $error)
                        <div class="alert alert-danger" role="alert">
                            {{   $error  }}
                        </div>
                    @endforeach
                @endisset
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
    @php
        unset($_SESSION['errors']);
        unset($_SESSION['data']);
    @endphp
@endsection