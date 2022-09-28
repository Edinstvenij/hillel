@extends('layout')


@section('title')
    Create tag
@endsection

@section('content')
    <div class="container mt-4">
        <form action="/tags/store" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                       value="{{  $_SESSION['data']['title']?? '' }}" placeholder="Enter title">
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
                <input type="text" class="form-control" id="slug" name="slug"
                       value="{{  $_SESSION['data']['slug']?? '' }}" placeholder="Enter slug">
                @isset($_SESSION['errors']['slug'])
                    @foreach($_SESSION['errors']['slug'] as $error)
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