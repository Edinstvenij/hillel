@extends('layout')

@section('title')
    list posts
@endsection
@section('content')
    @isset($_SESSION['success'])
        <div class="alert alert-info" role="alert">
            {{   $_SESSION['success']  }}
        </div>
        @php
            unset($_SESSION['success']);
        @endphp
    @endisset
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <td colspan="2" style="text-align: center;"><a href="../" style="font-size: 30px; color: #0099FF">&#11152; back</a></td>
            <td colspan="8" style="text-align: center;"><a href="posts/create" style="font-size: 30px; color: #0099FF">&#43; Create posts &#43;</a></td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">body</th>
            <th scope="col">category</th>
            <th scope="col">tag title</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">update</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->categories->title }}</td>
                <td>@foreach($post->tags()->where('post_id', $post->id)->get() as $tag) {{ $tag->title. '; ' }}@endforeach</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td><a href="posts/{{ $post->id }}/edit">&#9999;</a></td>
                <td><a href="posts/{{ $post->id }}/delete">&#10060;</a></td>
            </tr>
    @endforeach
        </tbody>
    </table>

@endsection
