@extends('layout.main')
@section('content')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{route('add-comment')}}">add</a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nội Dung</td>

    </tr>
    @foreach($comments as $cmt)
        <tr>
            <td>{{$cmt->id}}</td>
            <td>{{$cmt->noi_dung}}</td>

            <td>
                <a href="{{route('edit-comment/'.$cmt->id)}}">sửa</a>
                <a href="{{route('delete-comment/'.$cmt->id)}}">xóa</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
@endsection