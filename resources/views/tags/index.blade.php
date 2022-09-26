@extends('layout')

@section('title')
    list tags
@endsection
@section('content')
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <td colspan="1" style="text-align: center;"><a href="../" style="font-size: 30px; color: #0099FF">&#11152;
                    back</a></td>
            <td colspan="6" style="text-align: center;"><a href="tags/create" style="font-size: 30px; color: #0099FF">&#43;
                    Create tag &#43;</a></td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>
            <th scope="col">update</th>
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
                <td><a href="tags/{{ $tag->id }}/edit">&#9999;</a></td>
                <td><a href="tags/{{ $tag->id }}/delete">&#10060;</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
