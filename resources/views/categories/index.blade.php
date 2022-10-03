@extends('layout')

@section('title')
    list categories
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
            <td colspan="1" style="text-align: center;"><a href="../" style="font-size: 30px; color: #0099FF">&#11152; back</a></td>
            <td colspan="6" style="text-align: center;"><a href="/categories/create" style="font-size: 30px; color: #0099FF">&#43; Create Category &#43;</a></td>
            <td colspan="1" style="text-align: center;"><a href="/categories/trash" style="font-size: 30px; color: #6a6a6a">Trash</a></td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">post name</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            @if($_SERVER['REQUEST_URI'] == '/categories/')
                <th scope="col">update</th>
            @else
                <th scope="col">restore</th>
            @endif
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
                <td>@foreach($category->posts as $post)
                        {{$post->title.'; '}}
                    @endforeach</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                @if($_SERVER['REQUEST_URI'] == '/categories/')
                    <td><a href="{{ $category->id }}/edit">&#9999;</a></td>
                @else
                    <td><a href="{{ $category->id }}/restore">restore</a></td>
                @endif
                <td><a href="{{ $category->id }}/delete">&#10060;</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
