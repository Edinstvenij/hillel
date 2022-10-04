@extends('layout')

@section('title')
    list tags
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
            <td colspan="1" style="text-align: center;"><a href="../" style="font-size: 30px; color: #0099FF">&#11152;
                    back</a></td>
            <td colspan="5" style="text-align: center;"><a href="tags/create" style="font-size: 30px; color: #0099FF">&#43; Create tag &#43;</a></td>
            <td colspan="1" style="text-align: center;"><a href="/tags/trash" style="font-size: 30px; color: #6a6a6a">Trash</a></td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            @if($_SERVER['REQUEST_URI'] == '/tags')
                <th scope="col">update</th>
            @else
                <th scope="col">restore</th>
            @endif
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <th scope="row">{{ $tag->id }}</th>
                <td>{{ $tag->title }}</td>
                <td>{{ $tag->slug }}</td>
                <td>{{ $tag->created_at }}</td>
                <td>{{ $tag->updated_at }}</td>
                @if($_SERVER['REQUEST_URI'] == '/tags')
                    <td><a href="tags/{{ $tag->id }}/edit">&#9999;</a></td>
                @else
                    <td><a href="{{ $tag->id }}/restore">restore</a></td>
                @endif
                @if($_SERVER['REQUEST_URI'] == '/tags')
                    <td><a href="tags/{{ $tag->id }}/delete">&#10060;</a></td>
                @else
                    <td><a href="{{ $tag->id }}/force-delete">&#10060;</a></td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
