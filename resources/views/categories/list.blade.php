@extends('layout')

@section('title')
    list categories
@endsection
@section('content')
    <table class="table table-bordered table-hover table-dark">
        <thead>
        <tr>
            <td colspan="1"  style="text-align: center;"><a href="../" style="font-size: 30px; color: #0099FF">&#11152; back</a></td>
            <td colspan="6"  style="text-align: center;"><a href="create.php" style="font-size: 30px; color: #0099FF">&#43;  Create Category  &#43;</a></td>
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
        @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $category->id }}</th>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
                <td><a href="update.php?id={{ $category->id }}">&#9999;</a></td>
                <td><a href="delete.php?id={{ $category->id }}">&#10060;</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
